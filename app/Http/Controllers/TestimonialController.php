<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;

use App\Models\SeoMeta;

class TestimonialController extends Controller
{
    
public function index()
    {

    $data['testimonials'] = Testimonial::orderBy('created_at')->get();  

    $data['seo_meta'] = SeoMeta::where('id',4)->first();

    return view('pages.testimonials',$data);

    }

}
