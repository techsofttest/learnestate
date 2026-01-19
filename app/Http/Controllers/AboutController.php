<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SeoMeta;

use App\Models\Content;

class AboutController extends Controller
{
    
    public function index()
    {

    $data['about'] = array();

    $data['why_learn_estate'] = Content::where('id',5)->first();

    $data['vision'] = Content::where('id',2)->first();

    $data['mission'] = Content::where('id',3)->first();

    $data['directors_note'] = Content::where('id',6)->first();

    $data['seo_meta'] = SeoMeta::where('id',2)->first();

    return view('pages.about',$data);
        
    }

}
