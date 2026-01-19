<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SeoMeta;

class ContactController extends Controller
{
     public function index()
    {

    $data['seo_meta'] = SeoMeta::where('id',8)->first();

    return view('pages.contact',$data);
        
    }
}
