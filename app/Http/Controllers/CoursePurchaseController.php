<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class CoursePurchaseController extends Controller
{
    private $razorpay;

    public function __construct()
    {
        $this->razorpay = new Api(
            config('services.razorpay.key_id'),
            config('services.razorpay.key_secret')
        );
    }

    public function purchase(Request $request, Course $course)
    {
        $student = auth('student')->user();

        // Prevent duplicate purchase
        if ($student->courses()
            ->where('course_id', $course->id)
            ->exists()) {
            return back()->with('error', 'Course already purchased.');
        }

        // FREE COURSE
        if ($course->is_free || $course->price == 0) {
            $student->courses()->attach($course->id, [
                'status'     => 'active',
                'starts_at' => now(),
                'ends_at'   => null,
            ]);

            return redirect()
                ->route('student.courses')
                ->with('success', 'Course unlocked!');
        }

        $amount = $course->sale_price ?? $course->price;

        // Create Razorpay Order
        $orderData = [
            'receipt'         => 'rcpt_' . Str::random(10),
            'amount'          => $amount * 100, // Amount in paise
            'currency'        => 'INR',
            'payment_capture' => 1 // Auto-capture
        ];

        $razorpayOrder = $this->razorpay->order->create($orderData);

        // Store Payment as Pending
        $payment = Payment::create([
            'student_id' => $student->id,
            'course_id'  => $course->id,
            'order_id'   => $razorpayOrder['id'],
            'amount'     => $amount,
            'gateway'    => 'razorpay',
            'status'     => 'pending',
        ]);

        return view('pages.checkout', [
            'course' => $course,
            'order'  => $razorpayOrder,
            'student' => $student,
            'key_id' => config('services.razorpay.key_id'),
        ]);
    }

    public function verify(Request $request)
    {
        $success = true;
        $error = "Payment Failed";

        if (empty($request->razorpay_payment_id) === false) {
            try {
                $attributes = [
                    'razorpay_order_id' => $request->razorpay_order_id,
                    'razorpay_payment_id' => $request->razorpay_payment_id,
                    'razorpay_signature' => $request->razorpay_signature
                ];

                $this->razorpay->utility->verifyPaymentSignature($attributes);
            } catch (\Exception $e) {
                $success = false;
                $error = 'Razorpay Error : ' . $e->getMessage();
            }
        }

        if ($success === true) {
            $payment = Payment::where('order_id', $request->razorpay_order_id)->first();

            if ($payment && $payment->status == 'pending') {
                $this->completePurchase($payment, $request->razorpay_payment_id);

                return redirect()
                    ->route('student.courses')
                    ->with('success', 'Payment successful. Course unlocked!');
            }
        }

        return redirect()->back()->with('error', $error);
    }

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $signature = $request->header('X-Razorpay-Signature');
        $webhookSecret = config('services.razorpay.webhook_secret');

        try {
            $this->razorpay->utility->verifyWebhookSignature($payload, $signature, $webhookSecret);

            $data = json_decode($payload, true);

            if ($data['event'] === 'payment.captured') {
                $orderId = $data['payload']['payment']['entity']['order_id'];
                $paymentId = $data['payload']['payment']['entity']['id'];

                $payment = Payment::where('order_id', $orderId)->first();

                if ($payment && $payment->status == 'pending') {
                    $this->completePurchase($payment, $paymentId);
                }
            }

            return response('Webhook Handled', 200);

        } catch (\Exception $e) {
            return response($e->getMessage(), 400);
        }
    }

    private function completePurchase(Payment $payment, $transactionId)
    {
        DB::transaction(function () use ($payment, $transactionId) {
            $payment->update([
                'transaction_id' => $transactionId,
                'status'         => 'paid',
            ]);

            // Prevent duplicate attachment
            if (!$payment->student->courses()->where('course_id', $payment->course_id)->exists()) {
                $payment->student->courses()->attach($payment->course_id, [
                    'status'     => 'active',
                    'starts_at' => now(),
                    'ends_at'   => null,
                ]);
            }
        });
    }
}
