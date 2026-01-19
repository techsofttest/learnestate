@extends('layouts.app')



@section('meta_data')



<title>{{ filled($seo_meta['meta_title'] ?? null)
        ? $seo_meta['meta_title'] : 'Learn Estate | Your real estate online learning platform' }}</title>

<meta name="description" content="{{ filled($seo_meta['meta_description'] ?? null)
          ? $seo_meta['meta_description'] : 'Learn estate is a real estate online learning platform' }}">


@endsection


@section('head_extras')

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css">


@endsection




@section('content')



        <div class="Inner-banner-sec">
			
			 <img src="{{asset('img/banner/photogallery-banner.jpg')}}" alt="" width="100%">

		</div>
		 
		
		<div class="Ga-sec  pp-gallery"  >

<div class="container">
 
   <div class="title-area text-center">
                            <span class="sub-title text-anime">IMAGES</span>
                            <h2 class="sec-title style2 split-text">
                              Our <span class="text-theme">Photo </span>  Gallery
                            </h2>
                        </div>
	
	

            
	    <div class="row  gal-row grid-container gutter-30 has-init-isotope" >


        @foreach($photos as $image)

            <div class="col-lg-3 col-md-4 col-sm-6 rounded img-hover-wrap" >
              <div class="gallery-card">

          <div class="gallery-img">
            <a href="{{ asset('storage/'.$image->image) }}"
              data-lightbox="gallery"
              data-caption="Gallery Image">
              
                <img src="{{ asset('storage/'.$image->image) }}"
                    alt="Gallery Image">
                    
                <span class="gallery-btn">
                    <i class="fas fa-image"></i>
                </span>
            </a>
        </div>
  
        </div>
            </div>

        @endforeach

 			

            
          </div>



	 </div>
	 
		
		
	 
 
</div>
		 
 

 
@endsection


@section('footer_extras')

<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js"></script>



@endsection