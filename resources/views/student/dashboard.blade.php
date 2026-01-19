@extends('layouts.app')

@section('head_extras')






<style>
    .sticky-wrapper.sticky {
    display: none !important;
    }
</style>

@endsection

@section('content')


<div class="container-fluid">

<div class="row">



@include('student.sidebar')



<div class="col-12 col-lg-9">

 <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <h2>Welcome back, {{ Str::of(auth('student')->user()->name)->before(' ') }}!</h2>
            <p>Here's what's happening with your learning today</p>
        </div>

        <!-- Stats Cards -->
        <div class="stats-container">
            <div class="stat-card purple">
                <div class="stat-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-label">Courses Purchased</div>
                <div class="stat-value">{{$totalCourses}}</div>
                
            </div>

            <div class="stat-card green">
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-label">Total Payment</div>
                <div class="stat-value">₹ {{ number_format($totalPaid, 2) }}</div>
                
            </div>

        </div>

        <!-- Recent Activity -->
        <div class="recent-activity">
            <h5><i class="fas fa-clock"></i>Activities</h5>

          @forelse($recentActivities as $activity)
        <div class="activity-item">
            <h6>
                Course Added: {{ $activity->course->title }}
            </h6>
            <p>
                <i class="far fa-calendar-alt"></i> 
                {{ \Carbon\Carbon::parse($activity->created_at)->format('F d, Y') }}
            </p>
        </div>
    @empty
        <p>No recent activity yet.</p>
    @endforelse

        </div>
        
    </div>

    </div>



</div>

</div>

@endsection