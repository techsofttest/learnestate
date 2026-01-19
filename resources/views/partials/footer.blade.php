  <footer class="footer-wrapper footer-layout1"  >
		
	
            <div class="widget-area" data-bg-src="{{asset('img/footer-bg.jpg')}}">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-7 col-xl-4 col-lg-4 col-sm-7">
                            <div class="widget newsletter-widget footer-widget">
							
							<div class="foot-head-text">
							<h3>Excellence in Real Estate Education</h3>
							
							<p>fulfil your needs within your budget and provide high-quality, cost-effective services that satisfy clients.</p>
							</div>
                             <div class="footer-logo-gold">
                                <img src="{{asset('img/footerlogo.png')}}" alt="">
                            </div>
                           
			
		
                            </div>
                        </div>
						
						 
							 <div class="col-md-5 col-lg-auto col-sm-5">
                            <div class="widget widget_nav_menu  footer-widget">
                                <h3 class="widget_title">Quick Links</h3>
                                <div class="menu-all-pages-container">
								
								
							
								
								
                                    <ul class="menu">
									 <li><a href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('about')}}">About Us</a></li> 
  <li><a href="{{url('courses')}}">Courses</a></li>
  <li><a href="{{url('testimonials')}}">Testimonials</a></li>
  <li><a href="{{url('photo-gallery')}}">Photo Gallery</a></li> 
   <li><a href="{{url('video-gallery')}}">Video Gallery</a></li> 
  <li><a href="{{url('blogs')}}">Blogs</a></li> 
  <li><a href="{{url('contact')}}">Contact Us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
						
						
							 <div class="col-md-6 col-lg-3 col-sm-6">
                            <div class="widget widget_nav_menu   footer-widget">
                                <h3 class="widget_title">Our Courses</h3>
                                <div class="menu-all-pages-container">
								
								
							
								
								
                                    <ul class="menu">
                                  	 
                    @foreach($globalCourses as $course)
                                <li><a href="{{url('courses')}}/{{$course->slug}}">{{$course->title}}</a></li>
                    @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
						
						
						<div class="col-md-6 col-xl-3 col-lg-3  col-sm-6">
                            <div class="widget newsletter-widget footer-widget">
 <h3 class="widget_title">Contact Us</h3>
                             <div class="as-widget-contact">
              <div class="as-widget-about mt-15">
                
   <p class="footer-info"><i class="fas fa-location-dot"></i> 
			 
 Jossys Complex, Pathadipalam, Changampuzha Nagar, Ernakulam, Kerala, India
				 
				</p>
 
                <p class="footer-info"><i class="fas fa-phone"></i> 
			 
  <a href="tel:+91 9747532827" class="info-box_link">+91 9747532827  </a>
				 
				</p>
			 
 <p class="footer-info"><i class="fas fa-envelope"></i>
<a href="mailto:info@learnestate.com" class="info-box_link">info@learnestate.com</a></p>
            
              </div>
			  
			  
            </div>
			 
                            </div>
                        </div>
						
						
					 
						
                       
                    </div>
                </div>
           
                <div class="copyright-wrap">
                    <div class="container">
                        <div class="row  justify-content-between align-items-center">
                            <div class="col-lg-auto col-md-12">
                                <p class="copyright-text ">
                                    Copyright <i class="fal fa-copyright"></i> @php echo date('Y'); @endphp
                                    <a href="{{url('/')}}">Learn Estate </a>. All Rights Reserved. Web Designed By <a href="https://www.techsoftweb.com/" target="_blank"> Techsoft</a> </p>
                               
                            </div>
							
							 <div class="col-lg-auto col-md-12">
                               	   <div class="footer-social-links-gold">
                                <ul>
								  <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class=" "><img src="{{asset('img/twitter.png')}}"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
									 <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                  
                                </ul>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        
        </footer>
		