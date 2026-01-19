<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VideoGallery;
use App\Models\ImageGallery;

use App\Models\SeoMeta;

class GalleryController extends Controller
{
   

    public function photos()
    {

    $data['photos'] = ImageGallery::orderBy('created_at')->get();

    $data['seo_meta'] = SeoMeta::where('id',5)->first();

    return view('pages.photos',$data);
        
    }



    public function videos()
    {

    $data['videos'] = VideoGallery::orderBy('created_at')->get();

    $data['seo_meta'] = SeoMeta::where('id',6)->first();
  
    return view('pages.videos',$data);
        
    }


}
