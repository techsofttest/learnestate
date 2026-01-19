@extends('layouts.app')



@section('content')


      <div class="Inner-banner-sec">
			
			 <img src="{{asset('img/banner/blog-d-banner.jpg')}}" alt="" width="100%">

			</div>
		


<section class="as-blog-wrapper blog-details  Blog-ddsec">
  <div class="container">
    <div class="row  ">

      <div class="col-lg-8">
        <div class="as-blog blog-single">
          <div class="blog-img"><img src="{{asset('storage')}}/{{$blog->image}}" alt=" " width="100%"></div>
          <div class="blog-content">
            <div class="blog-meta">  <a href="javasctipt:void();"><i class="far fa-calendar-alt"></i>@php echo date('M d, Y',strtotime($blog->published_date)); @endphp</a> </div>
     
            <h2 class="blog-title">{{$blog->title}}</h2>
 
	


      {!! $blog->description !!}

      
		  </div>
     
       
     
        </div>
      </div>

      
      <div class="col-lg-4   ">
        <aside class="sidebar-area boll-sticy">
 
       
          <div class="widget">
            <h3 class="widget_title">Recent Blogs</h3>
            <div class="recent-post-wrap">


              @foreach($related as $rblog)

              <div class="recent-post">
                <div class="media-img"><a href="{{url('blogs')}}/{{$rblog->slug}}">
                  <img src="{{asset('storage')}}/{{$rblog->image}}" alt=""></a>
                </div>
                <div class="media-body">
                  <div class="recent-post-meta"><a href="{{url('blogs')}}/{{$rblog->slug}}"><i class="fal fa-calendar"></i>@php echo date('M d, Y',strtotime($rblog->published_date)); @endphp</a></div>
                  <h4 class="post-title"><a class="text-inherit" href="{{url('blogs')}}/{{$rblog->slug}}">{{$rblog->title}}</a></h4>
                </div>
              </div>

              @endforeach
			               
			           
            </div>
          </div>
 
     
        </aside>
      </div>


    </div>
  </div>
</section>
<!-- end  --->



    

@endsection