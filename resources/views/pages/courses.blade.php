@extends('layouts.app')


@section('meta_data')



<title>{{ filled($seo_meta['meta_title'] ?? null)
        ? $seo_meta['meta_title'] : 'Learn Estate | Your real estate online learning platform' }}</title>

<meta name="description" content="{{ filled($seo_meta['meta_description'] ?? null)
          ? $seo_meta['meta_description'] : 'Learn estate is a real estate online learning platform' }}">


@endsection



@section('content')

 


      <div class="Inner-banner-sec">
			
			 <img src="{{asset('img/banner/course-banner.jpg')}}" alt="" width="100%">

			</div>
		
		 
		     <section class="position-relative overflow-hidden   home-three co-mmsert"  id="service-sec">
            <div class="container">
                <div class="row  justify-content-center  ">
                    <div class="col-lg-7">
                        <div class="title-area text-center ">
                            <span class="sub-title text-anime">OUR COURSES</span>
                            <h2 class="sec-title style2 split-text">
                                Our  <span class="text-theme">Real Estate</span>  Courses
                            </h2>
                        </div>
                    </div>
                  
                </div>
               <div class="row  justify-content-center course-rr ">
                     
							


            @foreach($courses as $course)

							
						<div class="col-lg-6 col-md-6 col-sm-12  wow fadeInUp" data-wow-delay=".3s">
                               <div class="single-offer-box">
						<div class="single-offer-thumb">
					 
							<img src="{{asset('storage')}}/{{$course->thumbnail}}" alt="" width="100%">		 
						</div>
				
						<div class="offer-content">

				    <h4><a href="{{url('courses')}}/{{$course->slug}}">{{$course->title}}</a></h4>

						<div class="tour-listing__card-inner-content">
						<div class="ttpricesec">
							 
						<h4 class="tour-listing__card-price">₹ {{$course->price}} only</h4>
						 
								</div>
                                    <div class="tour-listing__card-review-box">
									<p class="tour-listing__card-review-text  "> {{$course->duration}}hr Session</p>
                                       
                                       
                                    </div> 
                              
                                  
                                
                                </div>
							<a href="{{url('courses')}}/{{$course->slug}}" class="resdh-btn">Book Now <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a>
						</div>
						
					</div>
                            </div>


          @endforeach

							
							 
                </div>
            </div>
        </section>






@endsection