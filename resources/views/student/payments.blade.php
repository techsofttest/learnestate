@extends('layouts.app')



@section('content')




<div class="container-fluid">

<div class="row">



@include('student.sidebar')



<div class="col-12 col-lg-9">

<div class="main-content">
       
       <h3>My Payments</h3>

    @if($payments->count())

    <div class="table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course</th>
                    <th>Amount</th>
                    <th>Payment Gateway</th>
                    <th>Transaction ID</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $payment->course->title }}</td>
                    <td>₹ {{ number_format($payment->amount, 2) }}</td>
                    <td>{{ ucfirst($payment->gateway) }}</td>
                    <td>DEMO123</td>
                    <td>
                        @if($payment->status == 'paid')
                            <span class="badge bg-success">Paid</span>
                        @elseif($payment->status == 'pending')
                            <span class="badge bg-warning">Pending</span>
                        @elseif($payment->status == 'failed')
                            <span class="badge bg-danger">Failed</span>
                        @else
                            <span class="badge bg-secondary">{{ ucfirst($payment->status) }}</span>
                        @endif
                    </td>
                    <td>{{ $payment->created_at->format('F d, Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No payments found.</p>
    @endif
</div>

        
</div>

</div>



</div>

</div>








@endsection