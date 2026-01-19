@extends('layouts.app')




@section('head_extras')








<style>

    .sticky-wrapper.sticky {
    display: none !important;
    }

    .main-content {
            padding: 60px 0px;
            position: relative;
            z-index: 10;
        }

        .content-card {
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            margin-bottom: 30px;
        }

        .thumbnail-container {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.4);
        }

        .thumbnail-container img {
            width: 100%;
            height: 350px !important;
            object-fit: cover;
            object-position: top;
            display: block;
        }

        .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .play-overlay:hover {
            background: rgba(0,0,0,0.6);
        }

        .play-button {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(96,165,250,0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            transition: transform 0.3s;
        }

        .play-overlay:hover .play-button {
            transform: scale(1.1);
        }

         .price-section {
            padding: 0;
            margin-bottom: 35px;
            text-align: center;
        }

        .price-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            margin-bottom: 25px;
        }

        .price-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .price-wrapper {
            display: contents;
            align-items: baseline;
            gap: 12px;
        }

        .price-strike {
            font-size: 1.3rem;
            color: #64748b;
            text-decoration: line-through;
            font-weight: 500;
        }

        .price-current {
            font-size: 55px;
            color:black;
            font-weight: 900;
            background-clip: text;
            line-height: 1;
            letter-spacing: -2px;
        }

        .price-discount {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            top: -8px;
        }

        .savings-text {
            font-size: 0.95rem;
            color: #4ade80;
            font-weight: 600;
        }

        .buy-button {
            width: 100%;
            padding: 20px;
            background: var(--theme-color);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1.2rem;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        /*
        .buy-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        

        .buy-button:hover::before {
            left: 100%;
        }
        */

        .buy-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 8px var(--theme-color);
        }

        .buy-button:active {
            transform: translateY(-1px);
        }

        .course-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-item {
            background: var(--theme-color2);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            
        }

        .stat-icon {
            font-size: 2rem;
            color: white;
            margin-bottom: 10px;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: white;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .description-text {
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .features-list {
            list-style: none;
            padding: 0;
        }

        .features-list li {
            padding: 12px 0;
            border-bottom: 1px solid #334155;
            color: black;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .features-list li:last-child {
            border-bottom: none;
        }

        .features-list i {
            color: var(--theme-color2);
            font-size: 1.1rem;
        }

        .instructor-card {
            background: #0f172a;
            padding: 25px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 20px;
            border: 1px solid #334155;
        }

        .instructor-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #60a5fa 0%, #7c3aed 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            font-weight: 700;
        }

        .instructor-info h5 {
            color: white;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .instructor-info p {
            color: #94a3b8;
            margin: 0;
            font-size: 0.9rem;
        }

        .money-back {
            background: rgba(74,222,128,0.1);
            border: 1px solid #4ade80;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            text-align: center;
        }

        .money-back i {
            color: #4ade80;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .money-back p {
            margin: 0;
            color: #cbd5e1;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .course-title {
                font-size: 1.8rem;
            }

            .price-current {
                font-size: 2rem;
            }

            .content-card {
                padding: 20px;
            }
        }

</style>



@endsection




@section('content')

 


            @php /*
            <div class="Inner-banner-sec">
			
			 <img src="{{asset('img/banner/course-banner.jpg')}}" alt="" width="100%">

			</div>
            */ @endphp
		




            <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center"><h3>{{$course->title}}</h2></div>

                <!-- Left Column -->
                <div class="col-lg-8">
                    <div class="content-card">
                        <!-- Course Thumbnail -->
                        <div class="thumbnail-container">

                            <img src="{{asset('storage')}}/{{$course->thumbnail}}" alt="{{$course->title}} Thumbnail">
                           
                        </div>


                       

                        <!-- Course Stats -->
                        <div class="course-stats">

                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="stat-value">{{$course->modules_count}}</div>
                                <div class="stat-label">Modules</div>
                            </div>

                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="stat-value">{{$course->lessons_count}}</div>
                                <div class="stat-label">Lessons</div>
                            </div>

                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="stat-value">42h</div>
                                <div class="stat-label">Duration</div>
                            </div>
                           
                        </div>

                        <!-- Description -->
                        <h3 class="section-title">
                            Course Description
                        </h3>

                        {!! $course->description !!}
                       
                    
                        <!-- Instructor 

                        <h3 class="section-title" style="margin-top: 40px;">
                            <i class="fas fa-user-tie"></i>
                            Your Instructor
                        </h3>
                        <div class="instructor-card">
                            <div class="instructor-avatar">JD</div>
                            <div class="instructor-info">
                                <h5>John Doe</h5>
                                <p>Senior Full-Stack Developer | 10+ years experience</p>
                                <p style="margin-top: 5px;">
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    4.9 Instructor Rating • 250K+ Students • 15 Courses
                                </p>
                            </div>
                        </div>
                        -->

                    </div>
                </div>




                <!-- Right Column - Pricing Card -->
                <div class="col-lg-4">
                    <div class="content-card" style="">
                        
                        <div class="price-section">
                            <div class="price-container">

                                 

                            @if($course->isPurchasedByStudent())
                                <div class="purchased-badge">
                                    <i class="fas fa-check-circle"></i>
                                    Already Purchased
                                </div>
                            @endif

                               <div class="price-wrapper">
                                    @if($course->sale_price && $course->sale_price < $course->price)
                                        <span class="price-strike">₹ {{ number_format($course->price) }}</span>
                                        <span class="price-current">₹ {{ number_format($course->sale_price) }}</span>
                                    @else
                                        <span class="price-current">₹ {{ number_format($course->price) }}</span>
                                    @endif
                                </div>

                               

                                @if($course->sale_price && $course->sale_price < $course->price)
                                    <div class="savings-text">
                                        <i class="fas fa-bolt"></i>
                                        You save ₹ {{ number_format($course->price - $course->sale_price) }}!
                                    </div>
                                @endif

                            </div>

                            


                            @php
                                $student = auth('student')->user();
                            @endphp

                            @if(auth('student')->check())
                            @if($student->courses()
                                ->where('course_id', $course->id)
                                ->wherePivot('status', 'active')
                                ->exists())

                            

                            <a href="{{ route('student.courses') }}" class="buy-button">
                                <i class="fas fa-shopping-cart"></i> Go To Courses
                            </a>
                            
                            @else

                            <form method="POST" action="{{ route('student.course.purchase', $course) }}">
                                @csrf
                            <button class="buy-button">
                                <i class="fas fa-shopping-cart"></i> Buy Now
                            </button>
                            </form>

                            @endif

                            @else
                                <button class="buy-button" data-bs-toggle="modal" data-bs-target="#youmyModal">
                                    <i class="fas fa-shopping-cart"></i> Buy Now
                                </button>
                            @endif



                        </div>

                        <h5 style="margin-bottom: 10px; font-weight: 600;">This course includes:</h5>
                        <ul class="features-list" style="margin-bottom: 20px;">
                            
                            <!--<li>
                                <i class="fas fa-infinity"></i>
                                Lifetime access
                            </li>-->

                            <li>
                                <i class="fas fa-mobile-alt"></i>
                                Single Device Access
                            </li>
                            <li>
                                <i class="fas fa-certificate"></i>
                                Certificate of completion
                            </li>

                            <li>
                                <i class="fas fa-comments"></i>
                                Community support
                            </li>
                        </ul>

                        
                        <div class="money-back">
                            <i class="fas fa-shield-alt"></i>
                            <p class="text-black"><strong>Certified Trainers</strong></p>
                            <!--<p style="margin-top: 5px;"></p>-->
                        </div>

                    </div>
                </div>
                </div>
                </div>
                </div>


            





@endsection