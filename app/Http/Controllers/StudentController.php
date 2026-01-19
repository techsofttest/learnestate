<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Payment;

class StudentController extends Controller
{
    

    public function dashboard()
    {

    $student = auth('student')->user();

    // Total courses purchased
    $totalCourses = $student->courses()->count();

    // Total amount paid (only successful payments)
    $totalPaid = Payment::where('student_id', $student->id)
        ->where('status', 'paid')
        ->sum('amount');
    
    $recentActivities = Payment::where('student_id', $student->id)
        ->where('status', 'paid')
        ->with('course')
        ->latest()
        ->take(5)
        ->get();

    return view('student.dashboard', compact(
        'totalCourses',
        'totalPaid',
        'recentActivities'
    ));

    }


    public function courses()
    {
        $student = auth('student')->user();

        $courses = $student->courses()
            ->wherePivot('status', 'active')
            ->with([
                'modules.lessons'
            ])
            ->withCount([
                'modules',
                'lessons'
            ])
            ->get();

        return view('student.my-courses', compact('courses'));
    }


    public function payments()
    {

        $student = auth('student')->user();

        // Fetch all payments for this student
        $payments = Payment::where('student_id', $student->id)
            ->with('course') // eager load course
            ->orderByDesc('created_at')
            ->get();

        return view('student.payments', compact('payments'));

    }


}
