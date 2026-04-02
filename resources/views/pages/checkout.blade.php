@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card shadow-sm border-0">
                <div class="card-body p-5">
                    <h2 class="mb-4">Complete Your Purchase</h2>
                    <p class="text-muted mb-4">Please wait while we redirect you to the payment gateway...</p>

                    <button id="rzp-button" class="btn btn-primary btn-lg px-5">Pay ₹{{ number_format($course->sale_price ?? $course->price, 2) }}</button>

                    <form action="{{ route('payment.razorpay.verify') }}" method="POST" id="razorpay-form">
                        @csrf
                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="{{ $order['id'] }}">
                        <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{ $key_id }}",
        "amount": "{{ $order['amount'] }}",
        "currency": "INR",
        "name": "{{ config('app.name') }}",
        "description": "Purchase course: {{ $course->title }}",
        "image": "{{ asset('logo.png') }}", // Replace with your logo
        "order_id": "{{ $order['id'] }}",
        "handler": function (response){
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
            document.getElementById('razorpay_signature').value = response.razorpay_signature;
            document.getElementById('razorpay-form').submit();
        },
        "prefill": {
            "name": "{{ $student->name }}",
            "email": "{{ $student->email }}"
        },
        "theme": {
            "color": "#3399cc"
        },
        "modal": {
            "ondismiss": function(){
                window.location.href = "{{ route('student.courses') }}";
            }
        }
    };
    var rzp1 = new Razorpay(options);
    
    // Auto open checkout
    window.onload = function() {
        rzp1.open();
    };

    document.getElementById('rzp-button').onclick = function(e){
        rzp1.open();
        e.preventDefault();
    }
</script>
@endsection
