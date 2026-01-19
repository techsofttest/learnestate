@extends('layouts.app')



@section('meta_data')



<title>{{ filled($seo_meta['meta_title'] ?? null)
        ? $seo_meta['meta_title'] : 'Learn Estate | Your real estate online learning platform' }}</title>

<meta name="description" content="{{ filled($seo_meta['meta_description'] ?? null)
          ? $seo_meta['meta_description'] : 'Learn estate is a real estate online learning platform' }}">


@endsection




@section('content')

 


  <div class="Inner-banner-sec">
			
			 <img src="assets/img/banner/blog-banner.jpg" alt="" width="100%">
			</div>
		
		 
		
	 
   <section class="blogggsec-innner">
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

                 <div class="col-lg-4 col-md-6 d-flex mb-20">
                        <div class="blog-card  wow fadeInUp" data-wow-delay=".3s">
						<div class="blog-card__date">
                                    <h4 class="blog-card__date-number">@php echo date('d',strtotime($blog->published_date)); @endphp</h4>
                                    <h4 class="blog-card__date-month">@php echo date('M Y',strtotime($blog->published_date)); @endphp</h4>
                                </div>
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
                           <a href="{{url('blogs')}}/{{$blog->slug}}" class="th-btn black-border"
                                    >Read More  <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg>
									</a>
                        </div>
                    </div>

                    @endforeach
				
             
			
					
				
                </div>
            </div>
        </section>
			





@endsection