<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CoursePurchaseController extends Controller
{


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

        // TEMP: AUTO-SUCCESS PAYMENT
        DB::transaction(function () use ($student, $course) {

            $payment = Payment::create([
                'student_id'     => $student->id,
                'course_id'      => $course->id,
                'amount'         => $course->sale_price ?? $course->price,
                'gateway'        => 'manual', // TEMP
                'transaction_id' => Str::uuid(),
                'status'         => 'paid',   // AUTO SUCCESS
            ]);

            $student->courses()->attach($course->id, [
                'status'     => 'active',
                'starts_at' => now(),
                'ends_at'   => null,
            ]);
        });

        return redirect()
            ->route('student.courses')
            ->with('success', 'Payment successful. Course unlocked!');
    }


}
