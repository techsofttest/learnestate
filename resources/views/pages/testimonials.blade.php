@extends('layouts.app')


@section('meta_data')



<title>{{ filled($seo_meta['meta_title'] ?? null)
        ? $seo_meta['meta_title'] : 'Learn Estate | Your real estate online learning platform' }}</title>

<meta name="description" content="{{ filled($seo_meta['meta_description'] ?? null)
          ? $seo_meta['meta_description'] : 'Learn estate is a real estate online learning platform' }}">


@endsection



@section('content')

 



<div class="Inner-banner-sec">
			
			 <img src="assets/img/banner/testi-banner.jpg" alt="" width="100%">
			</div>
		
		 
 
		 
  <div class="  Testimoniola-sec-baa"   	  data-bg-src="assets/img/tes-bg.webp">
  <div class="container">
  
  
                        <div class="title-area text-center mb-30 ">
                        <span class="sub-title text-anime">TESTIMONIALS</span>
                        <h2 class="sec-title style2 split-text">
                          What Our<span class="text-theme">  Students Says</span>     
                        </h2>
						 
						 
                        </div>
  
                          <div class="row justify-content-center">

							
                            @foreach($testimonials as $test)
							  

							  <div class="col-lg-4 col-md-6 d-flex wow fadeInLeft" data-wow-delay=".6s">
                              <div class="testimonials-card testimonials-mmainsec">
                     
                         
                            <div class="testimonials-card__quotett">
							   <div class="testimonials-card__ratings">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div><!-- /.testimonials-card__ratings -->
							
							<p>{{$test->text}}</p></div> 
							
							<div class="row justify-content-center">
							<div class="col-auto">
							   <div class="testimonials-card__im-tt">
							     <div class="testimonials-card__image">
                                <img src="{{asset('storage')}}/{{$test->image}}" alt=" ">
                            </div>
                            <div class="testimonials-card__meta">
                                <h5 class="testimonials-card__meta__name">{{$test->name}}</h5>
                                <p class="testimonials-card__meta__designation">{{$test->location}}</p>
                            </div><!-- /.testimonials-card__meta -->
							</div>
							</div>
							
							</div>
                        </div>
                            </div>


                            @endforeach

                          
							 
                      
  </div>
  </div>
  </div>
			








@endsection