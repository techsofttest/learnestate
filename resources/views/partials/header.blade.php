@php use Illuminate\Support\Str; @endphp
<div class="th-menu-wrapper">
            <div class="th-menu-area text-center">
                <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt="  " /></a>
                </div>


		    <div class="mobile-login">

			 @guest('student')
                {{-- NOT LOGGED IN --}}
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#youmyModal" class="book-n-btn">
                    Login
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512">
                        <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"/>
                    </svg>
                </a>
            @endguest

            @auth('student')
                {{-- LOGGED IN STUDENT --}}
                <a href="{{ route('student.dashboard') }}" class="book-n-btn">
                    Hi, {{ Str::of(auth('student')->user()->name)->before(' ') }}
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512">
                        <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"/>
                    </svg>
                </a>
            @endauth

		    </div>


                <div class="th-mobile-menu">
                    <ul>
  <li  >   <a href="{{url('/')}}">Home</a>  </li>
  <li > <a href="{{url('about')}}">About Us</a>   </li>
   
                     
                        <li class="menu-item-has-children">
                            <a href="{{url('courses')}}">Courses</a>
                            <ul class="sub-menu">
							 
                            @foreach($globalCourses as $course)
                <li><a href="{{url('courses')}}/{{$course->slug}}">{{$course->title}}</a></li>
                            @endforeach
                            </ul>
                        </li>
                    <li><a href="{{url('testimonials')}}">Testimonials</a></li>
			  <li class="menu-item-has-children">
                            <a href="javascript:void();">Gallery</a>
                            <ul class="sub-menu">
							 
  <li><a href="{{url('photo-gallery')}}">Photo Gallery</a></li> 
   <li><a href="{{url('video-gallery')}}">Video Gallery</a></li> 
                            </ul>
                        </li>
                        
						<li><a href="{{url('blogs')}}">Blogs</a></li>
						<li><a href="{{url('contact')}}">Contact Us</a></li>
						
						 
                    </ul>
                </div>
            </div>
        </div>
        <header class="th-header header-layout1">
            <div class="sticky-wrapper">
                <div class="container th-container2">
                    <div class="menu-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt="   " ></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
									
									
  <li  >   <a href="{{url('/')}}">Home</a>  </li>
  <li > <a href="{{url('about')}}">About Us</a>   </li>
   
                     
                        <li class="menu-item-has-children">
                            <a href="{{url('courses')}}">Courses</a>
                            <ul class="sub-menu">
							 
                @foreach($globalCourses as $course)
                <li><a href="{{url('courses')}}/{{$course->slug}}">{{$course->title}}</a></li>
                @endforeach

                            </ul>
                        </li>
                    <li><a href="{{url('testimonials')}}">Testimonials</a></li>
			 
                      			  <li class="menu-item-has-children">
                            <a href="javascript:void();">Gallery</a>
                            <ul class="sub-menu">
							 
   <li><a href="{{url('photo-gallery')}}">Photo Gallery</a></li> 
   <li><a href="{{url('video-gallery')}}">Video Gallery</a></li> 
                            </ul>
                        </li>
						    <li><a href="{{url('blogs')}}">Blogs</a></li>
						    <li><a href="{{url('contact')}}">Contact Us</a></li>
 </ul>
 </nav>
 <button type="button" class="th-menu-toggle d-inline-block d-lg-none">
<i class="far fa-bars"></i>
 </button>
</div>

<div class="col-auto modal-mmm-auto">


<div class="col-auto modal-mmm-auto">

    @guest('student')
        {{-- NOT LOGGED IN --}}
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#youmyModal" class="book-n-btn">
            Login
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512">
                <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"/>
            </svg>
        </a>
    @endguest

    @auth('student')
        {{-- LOGGED IN STUDENT --}}
        <a href="{{ route('student.dashboard') }}" class="book-n-btn">
            Hi, {{ Str::of(auth('student')->user()->name)->before(' ') }}
            <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512">
                <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"/>
            </svg>
        </a>
    @endauth

</div>

</div>


</div>
    </div>
    </div>
    </div>
    </header>