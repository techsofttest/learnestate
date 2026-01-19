@extends('layouts.app')



@section('meta_data')


<title>{{ filled($seo_meta['meta_title'] ?? null)
        ? $seo_meta['meta_title'] : 'Learn Estate | Your real estate online learning platform' }}</title>

<meta name="description" content="{{ filled($seo_meta['meta_description'] ?? null)
          ? $seo_meta['meta_description'] : 'Learn estate is a real estate online learning platform' }}">


@endsection





@section('content')

 


   <div class="Inner-banner-sec">
			
			 <img src="assets/img/banner/videogallery-banner.jpg" alt="" width="100%">
			</div>
		
		 
		
		
		
		<div class=" Videogalleryinner-rr">
  <div class="container">
                 
                        <div class="title-area text-center">
                            <span class="sub-title text-anime">VIDEOS</span>
                            <h2 class="sec-title style2 split-text">
                          Latest   <span class="text-theme">Learn Estate </span>   Video
                            </h2>
                        
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

@endsection