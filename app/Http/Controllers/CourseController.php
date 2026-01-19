<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

use App\Models\SeoMeta;

class CourseController extends Controller
{
   

    public function index()
    {

    $data['courses'] = Course::orderBy('created_at')->get();

    $data['seo_meta'] = SeoMeta::where('id',3)->first();

    return view('pages.courses',$data);
        
    }


    public function detail($slug)
    {
    
    $course = Course::where('slug', $slug)->withCount(['modules', 'lessons'])
                ->firstOrFail();

    return view('pages.course-detail', compact('course'));

    }


}
