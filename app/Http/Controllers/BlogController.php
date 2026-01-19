<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

use App\Models\SeoMeta;

class BlogController extends Controller
{
    public function index()
    {

    $data['blogs'] = Blog::orderBy('published_date')->get();

    $data['seo_meta'] = SeoMeta::where('id',7)->first();

    return view('pages.blogs',$data);
        
    }



    public function detail($slug)
    {

     // Main blog
    $blog = Blog::where('slug', $slug)
                ->firstOrFail();

    // Related blogs (latest, exclude current)
    $related = Blog::where('id', '!=', $blog->id)
                        ->latest('published_date')
                        ->limit(5)
                        ->get();

    return view('pages.blog-detail', compact('blog', 'related'));
        
    }


}
