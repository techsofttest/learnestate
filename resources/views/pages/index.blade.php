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

 <div class="th-hero-wrapper position-relative">
   <div class="hero-4">
 
                <div class="swiper th-slider" id="hero-thumb" data-slider-options='{"effect":"fade","loop":true,"paginationType":"fraction"}'>
                    
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
 <div class="container bb-container">								
 <div class="row align-items-center">
 <div class="col-lg-6 ">
 <div class="hero-style4">
<h3 class="hero-title-span" data-ani="slideinleft" data-ani-delay="0.3s"> Platform for Real Estate Education</h3>
<h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Empowering India’s Future in 
 <span class="text-theme">Real Estate </span>  </h1>
<p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">Guided by Experts. Built for Growth. Powered by Results. </p>
<div class="btn-group justify-content-xl-start justify-content-center" data-ani="slideinleft" data-ani-delay="0.5s">
<a href="{{url('courses')}}" class="th-btn style2">Our Courses <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a>
<a href="{{url('contact')}}" class="th-btn  style3">Contact Us  <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a> </div>


</div> <!-- end hero-title-->
 </div> 
 <div class="col-lg-6">
 <div class="one-third order-md-last">
  <div class="one-third-bb">
 <img src="{{asset('img/banner1.png')}}" data-ani="slideinleft" data-ani-delay="0.3s" alt="" width="100%">
    </div>
	    </div>
 </div>
   </div><!-- row-->
</div><!-- container-->
</div>


<!--  end slide-->


    <div class="swiper-slide">
 <div class="container bb-container">								
 <div class="row align-items-center">
 <div class="col-lg-6">
 <div class="hero-style4">
<h3 class="hero-title-span" data-ani="slideinleft" data-ani-delay="0.3s"> Platform for Real Estate Education</h3>
<h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Empowering India's Future in 
 <span class="text-theme">Real Estate </span>  </h1>
<p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">Guided by Experts. Built for Growth. Powered by Results.</p>
 <div class="btn-group justify-content-xl-start justify-content-center" data-ani="slideinleft" data-ani-delay="0.5s">

<a href="{{url('courses')}}" class="th-btn style2">Our Courses <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a>
<a href="{{url('contact')}}" class="th-btn  style3">Contact Us  <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a> </div>
</div> <!-- end hero-title-->
 </div> 
 <div class="col-lg-6">
 <div class="one-third order-md-last">
  <div class="one-third-bb">
 <img src="{{asset('img/banner2.png')}}" data-ani="slideinleft" data-ani-delay="0.3s" alt="" width="100%">
    </div>
    </div>
 </div>
   </div><!-- row-->
</div><!-- container-->
</div>


<!--  end slide-->


 <div class="swiper-slide">
 <div class="container bb-container">								
 <div class="row align-items-center">
 <div class="col-lg-6">
 <div class="hero-style4">
<h3 class="hero-title-span" data-ani="slideinleft" data-ani-delay="0.3s"> Platform for Real Estate Education</h3>
<h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Empowering India's Future in 
 <span class="text-theme">Real Estate </span>  </h1>
<p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">Guided by Experts. Built for Growth. Powered by Results.</p>
 <div class="btn-group justify-content-xl-start justify-content-center" data-ani="slideinleft" data-ani-delay="0.5s">

<a href="{{url('courses')}}" class="th-btn style2">Our Courses <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a>
<a href="{{url('contact')}}" class="th-btn  style3">Contact Us  <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a> </div>
</div> <!-- end hero-title-->
 </div> 
 <div class="col-lg-6">
 <div class="one-third order-md-last">
  <div class="one-third-bb">
 <img src="{{asset('img/banner3.png')}}" data-ani="slideinleft" data-ani-delay="0.3s" alt="" width="100%">
    </div>
    </div>
 </div>
   </div><!-- row-->
</div><!-- container-->
</div>


<!--  end slide-->

 


<!--  end slide-->
		 </div>						
		 <!-- end wrapper -->						
				
    <div class="slider-controller">
                        <div class="hero-thumb" data-slider-tab="#hero-thumb">
                            <div class="tab-btn active"></div>
                            <div class="tab-btn"></div>
                            <div class="tab-btn"></div>
							 
                        </div>
                    </div>


				
                          
                           
                        </div>
                     
                      
                    </div>
					
					
					
                
                </div>
				
				
				<div class="Aboo-sec">
				
				<div class="container">
				
				
				<div class="row align-items-center  justify-content-center">
				  <div class="col-lg-4   wow fadeInUp" data-wow-delay=".3s">
				    <div class="abb-img  ">
				  <img src="{{asset('img/about.jpg')}}" alt="" width="100%">
				  </div>
				    </div>
                    <div class="col-lg-4  wow fadeInUp" data-wow-delay=".3s">
					        <div class="acc-aa text-center ">
						 
                        <div class="title-area mb-20  ">
                         
                     
							
							
							       <div class="title-area   mb-30">
                          
                            <h2 class="sec-title style2 split-text  ">
                                Why Learn Estate
                            </h2>
                        </div>
					
                        {!!$why_learn_estate->content!!}
                     
                        </div>
                      
                   
						</div>
                    </div>
                <div class="col-lg-4   wow fadeInUp" data-wow-delay=".3s">
				    <div class="abb-img  ">
				  <img src="{{asset('img/about2.jpg')}}" alt="" width="100%">
				  </div>
                </div>
				
				</div>
				
				
				</div>
				
					</div>
          
		  
	
      <div class="mivisse"  data-bg-src="{{asset('img/misiion-bgs.webp')}}">
	  
	  <div class="container">
	  
	  
	       <div class="title-area text-center mb-30">
                          
                            <h2 class="sec-title style2 split-text text-white">
                                Excellence in Real Estate Education
                            </h2>
                        </div>
	  
	  <div class="mivisse-white">
	  
	  <div class="mi-logo-icon"><img src="{{asset('img/logo-icon.png')}}" alt=""></div>
	  
	  <div class="row ">
	  <div class="col-lg-6 col-md-6 d-flex">
	  <div class="miciboss   wow fadeInUp" data-wow-delay=".3s">
	 
	  <div class="miciboss-icon">
	 
	 <img src="{{asset('img/vision.png')}}" alt="">
	 </div>
	 	  <div class="miciboss-text">
	 
	 <h3>Our Vision</h3>
	 {!!$vision->content!!}
	 </div>
	 </div>
	  
	  </div>
	   <div class="col-lg-6 col-md-6 d-flex">
	  <div class="miciboss mi-color  wow fadeInUp" data-wow-delay=".3s">
	 
	  <div class="miciboss-icon">
	 
	 <img src="{{asset('img/mission.png')}}" alt="">
	 </div>
	 	  <div class="miciboss-text">
	 
	 <h3>Our Mission</h3>
	 
     {!!$mission->content!!}

	 </div>
	 </div>
	  
	  </div>
	  
	  </div>
	  </div>
	  </div>
	  
	 
	  
	  
	  
	  
	  
	  
       </div>
		
        <section class="position-relative overflow-hidden   home-three"  id="service-sec">
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
					 
							<img src="{{asset('storage')}}/{{$course->thumbnail}}"   alt="" width="100%">		 
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
    
		
		  
       
         
     
		 
		 <div class="Booking-ssection  ">
		 
		 <div class="container">
		 <div class="row justify-content-center">
		 
		 <div class="col-lg-10 wow fadeInLeft" data-wow-delay=".6s">
		 
 
 
       <div class="  text-center  Booking-ssection-ss">
      <div class="title-area text-center mb-20 ">
                            
                            <h2 class="sec-title style2 split-text">
                          <span class="text-theme">Director's </span>     Note 
                            </h2>
                        </div>
						
						
                        {!!$directors_note->content!!}
						
		 <div class="btn-group ">
		 <a href="{{url('about')}}">Read More   <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a>
		  <a href="tel:+91 9747532827" target="_blank"><i class="fa-brands fa-whatsapp"></i> Call Us Now</a>
		 </div>
		 </div>
		 </div>
		 
		 </div>	
		 </div>
		 
		 </div>
		 
	
		 
		  <section class="position-relative overflow-hidden  Testimoniola-sec"   	  data-bg-src="assets/img/tes-bg.webp">
            <div class="container">
              			      <div class="title-area text-center mb-30 ">
                                 <span class="sub-title text-anime">TESTIMONIALS</span>
                            <h2 class="sec-title style2 split-text">
                          What Our<span class="text-theme">  Students Says</span>     
                         </h2>
						 
						 <p>Don’t just take our word for it—see what our students have to say about  Learn Estate.</p>
                        </div>
						    <div class="row justify-content-center">
							    <div class="col-lg-10">
                <div class="slider-wrap">
                    <div
                        class="swiper th-slider serviceSlide1 has-shadow"
                        id="serviceSlide1"
                        data-slider-options='{"spaceBetween": 50,"loop":true,"breakpoints": {"0":{"slidesPerView": 1},"576": {"slidesPerView": 1},"768": {"slidesPerView": 1},"1200": {"slidesPerView": 1}}}'
                    >
                        <div class="swiper-wrapper">




                            @foreach($testimonials as $testimonial)


                            <div class="swiper-slide">
                               <div class="testimonials-card">
                       
                         
                            <div class="testimonials-card__quote">
							   <div class="testimonials-card__ratings">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div><!-- /.testimonials-card__ratings -->
							
							<p>{{$testimonial->text}}</p></div> 
							
							
							<div class="row justify-content-center">
							<div class="col-auto">
							   <div class="testimonials-card__im-tt">
							     <div class="testimonials-card__image">
                                <img src="{{asset('storage')}}/{{$testimonial->image}}" alt=" ">
                            </div>
                            <div class="testimonials-card__meta">
                                <h5 class="testimonials-card__meta__name">{{$testimonial->name}}</h5>
                                <p class="testimonials-card__meta__designation">{{$testimonial->place}}</p>
                            </div><!-- /.testimonials-card__meta -->
							</div>
							</div>
							
							</div>
							
                        </div>
                        </div>

                        @endforeach
							
							
                      
                        </div>
                     <div class="slider-pagination"></div>
                    </div>
                </div>
            </div>
			    </div>
            </div>
        </section>
		
			 <div class="why-choose-us">
		 
		 <div class="container">
		  <div class="title-area text-center mb-30 ">
                               
                            <h2 class="sec-title style2 split-text">
                          Why<span class="text-theme">  Choose Us</span>     
                         </h2>
						 
					 
                        </div>
<div class="row justify-content-center mt-20">

<div class="col-lg-3 col-md-6 col-sm-6 d-flex">


<div class="corrp-sebox">

<div class="corrp-sebox-icon">

<img src="{{asset('img/w1.png')}} " alt="">

</div>

<div class="corrp-sebox-content">
<h3><a href="javascript:void(0);"> Trusted by students 

 

 </a></h3>
<div class="corrp-sebox-p">
<p> Chosen by Thousands of Students Trusted by Future Professionals  </p></div>
 
</div>

</div>
</div>
<!-------------   -->
<div class="col-lg-3 col-md-6 col-sm-6 d-flex">


<div class="corrp-sebox">

<div class="corrp-sebox-icon">

<img src="{{asset('img/w2.png')}}" alt="">

</div>

<div class="corrp-sebox-content">
<h3><a href="#"> Expert Faculty Support

 

 </a></h3>
<div class="corrp-sebox-p">
<p> Need more help? we are helping to achieve your goals </p></div>
 
</div>

</div>
</div>
<!-------------   -->
<div class="col-lg-3 col-md-6 col-sm-6 d-flex">


<div class="corrp-sebox">

<div class="corrp-sebox-icon">

<img src="{{asset('img/w3.png')}}" alt="">

</div>

<div class="corrp-sebox-content">
<h3><a href="#"> Your   partner in success


 </a></h3>
<div class="corrp-sebox-p">
<p>Supporting Your Journey with Expertise, Guidance & Innovation  </p></div>
 
 
</div>

</div>
</div>
<!-------------   --> 

<div class="col-lg-3 col-md-6 col-sm-6 d-flex">


<div class="corrp-sebox">

<div class="corrp-sebox-icon">

<img src="{{asset('img/w4.png')}}" alt="">

</div>

<div class="corrp-sebox-content">
<h3><a href="#"> Cost-Effective

 </a></h3>
<div class="corrp-sebox-p">
<p>Lowest prices with the best courses</p></div>

 
 
</div>

</div>
</div>
<!-------------   --> 
 
<!-------------   -->
 
<!-------------   -->
 
 
 

</div>
		 
		 </div>
		 
		 </div>
		
		 
		
		
		
		<div class=" Videogalleryinner-sec">
  <div class="container">
                 <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title-area text-center">
                            <span class="sub-title text-anime">VIDEOS</span>
                            <h2 class="sec-title style2 split-text">
                          Latest   <span class="text-theme">Learn Estate </span>   Video
                            </h2>
                        </div>
                    </div>
                </div>
  <div class="row justify-content-center">


    @foreach($videos as $video)
      <div class="col-lg-4 col-md-6 col-sm-6 d-flex  wow fadeInUp" data-wow-delay=".3s">
        <div class="feature-box text-center media-box fbox-bg">
								<div class="fbox-media">
                                 <div class="wrapper">
        <div class="youtube" data-embed="{{$video->youtube_url}}">
            <div class="play-button"></div>
        <img src="https://img.youtube.com/vi/{{$video->youtube_url}}/hqdefault.jpg"></div>
        </div>
                                        
                                        </div>
                                        <div class="fbox-content">
                                            <h3>{{$video->title}}</h3>
                                        </div>
                                    </div>
            </div>

      @endforeach


      
      
        </div>
  </div>
</div>
		  <div class="Countersss overflow-hidden">
            <div class="container">
                <div class="counter-card_wrapp row">
				
				<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="counter-card  wow fadeInUp" data-wow-delay=".3s">
					
					<img src="{{asset('img/c1.png')}}" alt="">
					<div class=" ccdd">
                        <h3 class="box-number"><span class="counter-number">5000</span>+</h3>
                        <p class="box-text">People trained</p>
                    </div>
					    </div>   </div>
						<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="counter-card  wow fadeInUp" data-wow-delay=".3s">
					<img src="{{asset('img/c2.png')}}" alt="">
							<div class=" ccdd">
                        <h3 class="box-number"><span class="counter-number">10000</span>+</h3>
                        <p class="box-text">Happy Students</p>
                    </div>
					    </div>   </div>
						<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="counter-card  wow fadeInUp" data-wow-delay=".3s">
					<img src="{{asset('img/c3.png')}}" alt="">
							<div class=" ccdd">
                        <h3 class="box-number"><span class="counter-number">100</span>+</h3>
                        <p class="box-text">Expert Faculty</p>
                    </div>
					    </div>   </div>
						<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="counter-card  wow fadeInUp" data-wow-delay=".3s">
					<img src="{{asset('img/c4.png')}}" alt="">
							<div class=" ccdd">
                        <h3 class="box-number"><span class="counter-number">100</span>%</h3>
                        <p class="box-text">Satisfaction</p>
                    </div>   </div>
					    </div>
                </div>
            </div>
        </div> 
		
		
		
		<div class="gg-secs proo-innersec">
		
		<div class="container">
	                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title-area text-center">
                            <span class="sub-title text-anime">IMAGES</span>
                            <h2 class="sec-title style2 split-text">
                              Our <span class="text-theme">Photo </span>  Gallery
                            </h2>
                        </div>
                    </div>
                </div>
	 
	<div class="row justify-content-center">


            @foreach($photos as $image)

			<div class="col-lg-4 col-md-4 col-sm-12 d-flex">
			
			<a href="{{asset('storage')}}/{{$image->image}}" class="ppproject-card  th-popup-image"  data-lightbox="gallery">
                        <img src="{{asset('storage')}}/{{$image->image}}" alt="">
                        <img src="{{asset('storage')}}/{{$image->image}}" alt="">
                    </a>
			</div>

            @endforeach
			
			
					
			
			
			</div>
	 </div>
		
		</div>
		 
   <section class="overflow-hidden  blogggsec overflow-hidden" id="blog-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="title-area text-center">
                            <span class="sub-title text-anime">BLOG & NEWS</span>
                            <h2 class="sec-title style2 split-text">
                                Discover <span class="text-theme">Insights </span> From Our Creative Blog
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">



                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="blog-card  wow fadeInUp" data-wow-delay=".3s">
                            <div class="box-img global-img">
                                <img src="{{asset('storage')}}/{{$blog->image}}" alt="blog image" />
                            </div>
                            <div class="box-content">
                               
                                <h3 class="box-title">
                                    <a href="{{url('blogs')}}/{{$blog->slug}}"
                                        >{{$blog->title}}</a
                                    >
                                </h3>
                            </div>
                            <div class="box-wrapp">
                                <span class="date"><i class="far fa-calendar-alt"></i>@php echo date('M d, Y',strtotime($blog->published_date)); @endphp</span>
                                <a href="{{url('blogs')}}/{{$blog->slug}}" class="th-btn black-border"
                                    >Read More  <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                   
                </div>
            </div>
        </section>



@endsection


@section('footer_extras')

<script>
(function() {
    const youtubeElements = document.querySelectorAll(".youtube");

    youtubeElements.forEach(el => {
        // Create thumbnail image
        const img = new Image();
        img.src = "https://img.youtube.com/vi/" + el.dataset.embed + "/hqdefault.jpg";
        img.alt = "YouTube Thumbnail";
        el.appendChild(img);

        // Add click handler
        el.addEventListener("click", function() {
            // Create iframe
            const iframe = document.createElement("iframe");
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "");
            iframe.setAttribute(
                "src",
                "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1&mute=1"
            );

            // Remove all content (thumbnail + play button)
            this.innerHTML = "";
            // Add iframe
            this.appendChild(iframe);
        });
    });
})();
</script>



<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js"></script>


@endsection