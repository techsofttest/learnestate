@extends('layouts.app')






@section('content')


<style>

    .course-filter {
            display: flex;
            gap: 10px;
        }

        .course-filter button {
            padding: 8px 16px;
            border: 1px solid #dee2e6;
            background: white;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .course-filter button:hover,
        .course-filter button.active {
            background: #667eea;
            color: white;
            border-color: #667eea;
        }

        .course-card {
            background: white;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .course-card:hover {
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .course-header {
            padding: 25px 30px;
            background: var(--theme-color2);
            color: white;
            position: relative;
        }

        .course-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .course-meta {
            display: flex;
            gap: 20px;
            font-size: 0.9rem;
            opacity: 0.95;
        }

        .course-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .progress-bar-container {
            margin-top: 15px;
            background: rgba(255,255,255,0.2);
            border-radius: 10px;
            height: 8px;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            background: #4ade80;
            border-radius: 10px;
            transition: width 0.3s ease;
        }

        .course-body {
            padding: 0;
        }

        .module {
            border-bottom: 1px solid #e9ecef;
        }

        .module:last-child {
            border-bottom: none;
        }

        .module-header {
            padding: 20px 30px;
            background: #f8f9fa;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s;
        }

        .module-header:hover {
            background: #e9ecef;
        }

        .module-title {
            font-weight: 600;
            color: #333;
            font-size: 1.05rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .module-info {
            display: flex;
            gap: 20px;
            font-size: 0.85rem;
            color: #6c757d;
        }

        .module-chevron {
            transition: transform 0.3s;
        }

        .module-chevron.active {
            transform: rotate(180deg);
        }

        .lessons-container {
            display: none;
            padding: 10px 30px 20px;
        }

        .lessons-container.active {
            display: block;
        }

        .lesson-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            margin-bottom: 10px;
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .lesson-item:hover {
            border-color: #667eea;
            background: #f8f9ff;
            transform: translateX(5px);
        }

        .lesson-item.completed {
            background: #f0fdf4;
            border-color: #86efac;
        }

        .lesson-left {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1;
        }

        .lesson-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .lesson-item.completed .lesson-icon {
            background: #22c55e;
        }

        .lesson-details {
            flex: 1;
        }

        .lesson-title {
            font-weight: 500;
            color: #333;
            margin-bottom: 3px;
            font-size: 0.95rem;
        }

        .lesson-subtitle {
            font-size: 0.8rem;
            color: #6c757d;
        }

        .lesson-duration {
            color: #6c757d;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .video-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .video-modal.active {
            display: flex;
        }

        .video-container {
            width: 90%;
            max-width: 1000px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .video-header {
            padding: 20px;
            background: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .video-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar-header h4,
            .sidebar-header p,
            .sidebar-nav a span {
                display: none;
            }

            .sidebar-nav a {
                justify-content: center;
                padding: 15px;
            }

            .sidebar-nav a i {
                margin: 0;
            }

            .main-content {
                margin-left: 70px;
                padding: 15px;
            }

            .course-meta {
                flex-direction: column;
                gap: 5px;
            }

            .module-info {
                flex-direction: column;
                gap: 5px;
                align-items: flex-end;
            }

            .lesson-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }

</style>


<div class="container-fluid">

<div class="row">



@include('student.sidebar')




<div class="col-12 col-lg-9">


    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">

            <h2>My Courses</h2>

        </div>

        @forelse($courses as $course)
<div class="course-card">

    <div class="course-header">
        <div class="course-title">{{ $course->title }}</div>

        <div class="course-meta">
            <span><i class="fas fa-list"></i> {{ $course->modules_count }} Modules</span>
            <span><i class="fas fa-play-circle"></i> {{ $course->lessons_count }} Lessons</span>
        </div>
    </div>

     <div class="course-body">
        @foreach($course->modules as $module)
        <div class="module">

            <div class="module-header" onclick="toggleModule(this)">
                <div class="module-title">
                    <i class="fas fa-folder"></i>
                    {{ $module->title }}
                </div>

                <div style="display:flex; align-items:center; gap:20px;">
                    <div class="module-info">
                        <span>{{ $module->lessons->count() }} lessons</span>
                    </div>
                    <i class="fas fa-chevron-down module-chevron"></i>
                </div>
            </div>

             <div class="lessons-container">
                @foreach($module->lessons as $lesson)
                <div class="lesson-item"
                     onclick="openVideo(
                        '{{ $lesson->title }}',
                        'https://player.vimeo.com/video/{{ $lesson->video_url }}'
                     )">

                    <div class="lesson-left">
                        <div class="lesson-icon">
                            <i class="fas fa-play"></i>
                        </div>

                        <div class="lesson-details">
                            <div class="lesson-title">{{ $lesson->title }}</div>
                            <div class="lesson-subtitle">
                                {{ $lesson->short_description ?? '' }}
                            </div>
                        </div>
                    </div>

                    <div class="lesson-duration">
                        <i class="fas fa-play-circle"></i>
                        {{ $lesson->duration ?? '' }} Hour
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        @endforeach
    </div>

</div>
@empty
    <p>You have not purchased any courses yet.</p>
@endforelse

        
    </div>

    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <div class="video-container">
            <div class="video-header">
                <h5 id="videoTitle">Lesson Title</h5>
                <button class="video-close" onclick="closeVideo()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="video-wrapper">
                <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>



</div>

</div>




 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleModule(element) {
            const lessonsContainer = element.nextElementSibling;
            const chevron = element.querySelector('.module-chevron');
            
            lessonsContainer.classList.toggle('active');
            chevron.classList.toggle('active');
        }

        function openVideo(title, videoUrl) {
            const modal = document.getElementById('videoModal');
            const videoTitle = document.getElementById('videoTitle');
            const videoFrame = document.getElementById('videoFrame');
            
            videoTitle.textContent = title;
            videoFrame.src = videoUrl + '?autoplay=1';
            modal.classList.add('active');
        }

        function closeVideo() {
            const modal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');
            
            videoFrame.src = '';
            modal.classList.remove('active');
        }

        // Close modal when clicking outside
        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVideo();
            }
        });

        // Course filter functionality
        document.querySelectorAll('.course-filter button').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.course-filter button').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>



@endsection