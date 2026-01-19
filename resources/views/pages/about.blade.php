@extends('layouts.app')


@section('meta_data')



<title>{{ filled($seo_meta['meta_title'] ?? null)
        ? $seo_meta['meta_title'] : 'Learn Estate | Your real estate online learning platform' }}</title>

<meta name="description" content="{{ filled($seo_meta['meta_description'] ?? null)
          ? $seo_meta['meta_description'] : 'Learn estate is a real estate online learning platform' }}">


@endsection



@section('content')

 <div class="Inner-banner-sec">
			
			 <img src="{{asset('img/banner/about-banner.jpg')}}" alt="" width="100%">
			</div>
		
		 
 
			  <div class="Service-innersec3">
    <div class="container">


      <div class="row ">



        <div class="col-lg-7 col-md-12 d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">

          <div class="Service-innersec3-content-main">
            <div class="Service-innersec3-content-con">
   <div class="title-area  mb-20 ">
                            <span class="sub-title text-anime">ABOUT US</span>
                            <h2 class="sec-title style2 split-text">
                       Why Learn Estate
                            </h2>
                        </div>

              {!!$why_learn_estate->content!!}
 
            </div>
            <div class="  Service-innersec3-img1 ">

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <img src="{{asset('img/ab1.jpg')}}" alt="" width="100%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <img src="{{asset('img/ab2.jpg')}}" alt="" width="100%">
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">

          <div class="  Service-innersec3-img2  ">
            <img src="{{asset('img/ab3.jpg')}}" alt="" width="100%">
			 
          </div>
        </div>
      </div>



    </div>


  </div>
  
  
  
       <div class="mivisse-new"  data-bg-src="assets/img/misiion-bgs.webp">
	  
	  <div class="container">
	  
	  
	       <div class="title-area text-center mb-30">
                          
                            <h2 class="sec-title style2 split-text text-white">
                                Excellence in Real Estate Education
                            </h2>
                        </div>
	  
 
	  
	 
	  
	  <div class="row ">
	  <div class="col-lg-6 col-md-6 d-flex">
	  <div class="miciboss-new text-center  wow fadeInUp" data-wow-delay=".3s">
	 
	  <div class="miciboss-icon-new">
	 
	 <img src="{{asset('img/vision.png')}}" alt="">
	 </div>
	 	  <div class="miciboss-text-new">
	 
	 <h3>Our Vision</h3>
	 {!!$vision->content!!}
	 </div>
	 </div>
	  
	  </div>
	   <div class="col-lg-6 col-md-6 d-flex">
	  <div class="miciboss-new mi-color text-center wow fadeInUp" data-wow-delay=".3s">
	 
	  <div class="miciboss-icon-new">
	 
	 <img src="{{asset('img/mission.png')}}" alt="">
	 </div>
	 	  <div class="miciboss-text-new">
	 
	 <h3>Our Mission</h3>
	 {!!$mission->content!!}
	 </div>
	 </div>
	  
 </div>
	  
 	  </div>
	  </div>
	  </div>
	  
	  
	  
	  <div class="Dii-note-sec"  data-bg-src="{{asset('img/tes-bg.webp')}}">
	  
	              <div class="container">
              			      <div class="title-area text-center mb-30 ">
                                 <span class="sub-title text-anime">MESSAGE</span>
                            <h2 class="sec-title style2 split-text">
                     Director’s <span class="text-theme"> Note</span>     
                         </h2>
						 
					   </div>
					   
					   
					    <div class="row justify-content-center">
                        <div class="  col-xl-12 col-lg-12">
						
						    <div class=" nottsec">
						
						 {!!$directors_note->content!!}
						
						 </div>
						
						 </div>
						 
						  </div>
							  </div>
	  </div>
    

@endsection