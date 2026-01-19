<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Testimonial;
use App\Models\VideoGallery;
use App\Models\ImageGallery;
use App\Models\Blog;
use App\Models\SeoMeta;
use App\Models\Content;

class HomeController extends Controller
{
    

    public function index()
    {

    $data['courses'] = Course::orderBy('created_at')->limit(4)->get();

    $data['testimonials'] = Testimonial::orderBy('created_at')->get();

    $data['videos'] = VideoGallery::orderBy('created_at')->get();

    $data['photos'] = ImageGallery::orderBy('created_at')->get();

    $data['blogs'] = Blog::orderBy('published_date')->get();

    $data['seo_meta'] = SeoMeta::where('id',1)->first();

    $data['why_learn_estate'] = Content::where('id',1)->first();

    $data['vision'] = Content::where('id',2)->first();

    $data['mission'] = Content::where('id',3)->first();

    $data['directors_note'] = Content::where('id',4)->first();

    return view('pages.index',$data);

    }




}
