@extends('layouts.app')


@section('meta_data')



<title>{{ filled($seo_meta['meta_title'] ?? null)
        ? $seo_meta['meta_title'] : 'Learn Estate | Your real estate online learning platform' }}</title>

<meta name="description" content="{{ filled($seo_meta['meta_description'] ?? null)
          ? $seo_meta['meta_description'] : 'Learn estate is a real estate online learning platform' }}">


@endsection



@section('content')

    <div class="Inner-banner-sec">
			
			 <img src="{{asset('img/banner/co-banner.jpg')}}" alt="" width="100%">
			</div>
		
		 
		
	 
 	<div class=" Contact-sec" data-bg-src="{{asset('img/cc-bgs.jpg')}}">
  <div class="container">
  
  
	  <div class="row ">
	   <div class="col-lg-7 d-flex">
	   <div class="coleft-main  ">
	   <div class="coleft-1 ">
                           


                     
	   
	     <div class="title-area  mb-15">
                            <span class="sub-title text-anime">CONTACT</span>
                            <h2 class="sec-title style2 split-text text-white">
                               Get In Touch 
                            </h2>
                        </div>
						
						<p class="text-white">Have any questions about our services   please don’t hesitate to reach out. Our dedicated team is on hand to assist and guide you.</p>
	   
	      </div>
	   <div class="coleft-2 ">
	    <div class="row coniuy justify-content-center sebox cc-roww-c">
      <div class="col-lg-6 col-md-6 d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">
       <div class=" style-eight">
                  <div class="service-box-icon"> <i class="fas fa-location-dot"></i></div>
                  <div class="service-content">
                    <h3>Address</h3>
                    <p>  
Jossys Complex, Pathadipalam, Changampuzha Nagar, Ernakulam, Kerala, India</p>
                  </div>
                </div>
      </div>
	   
      <div class="col-lg-6 col-md-6 d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">
        <div class=" style-eight centerr">
                  <div class="service-box-icon"> <i class="fas fa-phone"></i> </div>
                  <div class="service-content">
                    <h3>Call Us</h3>
                    <p>  <a href="tel:
+91 9747532827" class="info-box_link">
+91 9747532827</a>
				
				 
             </p> 
             </div>
                </div>
      </div>
	  
	   <div class="col-lg-6 col-md-6 d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">
        <div class=" style-eight">
                  <div class="service-box-icon"> <i class="fal fa-envelope"></i> </div>
                  <div class="service-content">
                    <h3>Email Us</h3>
                    <p>  <a href="mailto:info@learnestate.com" class="info-box_link">info@learnestate.com</a>     </p> 
                  </div>
                </div>
      </div>
     
         <div class="col-lg-6 col-md-6 d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-duration="800">
        <div class=" style-eight">
                  <div class="service-box-icon"> <i class="fal fa-link"></i> </div>
                  <div class="service-content">
                    <h3>Follow Us</h3>
                  <div class="main-e_socials">

 
								 <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a> 
                                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a> 
                                <a href="#" target="_blank"><i class=" "><img src="{{asset('img/twitter.png')}}"></i></a> 
                                  <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a> 
									      <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a> 
                                  
                             </div>       
                  </div>
                </div>
      </div>
    </div>
  	  </div>
	    </div>
	  </div>
	<div class="col-lg-5 d-flex ">

<div class="co-in-form">


<div class="co-in-form-inner">


<form id="contactForm" method="post" action="#">

     <div class="title-area  mb-15">
                           
                            <h2 class="sec-title style2 split-text">
                            Sent a  <span class="text-theme">Message ...</span>
                            </h2>
							
					 
                        </div>
								<div class="row clearfix">
									
									<div class="col-lg-12 col-sm-12 form-group " data-aos="zoom-in" data-aos-duration="800">
										
										<input type="text" name="username" placeholder="Full Name" required="">
									</div>
								
									
									<div class="col-lg-12 col-sm-12 form-group " data-aos="zoom-in" data-aos-duration="800">
										
										<input type="text" name="email" placeholder="Email Id" required="">
									</div>
									<div class="col-lg-12 col-sm-12 form-group " data-aos="zoom-in" data-aos-duration="800">
										
										<input type="text" name="text" placeholder="Contact No" required="">
									</div>
										 
										 
							 
							 
									<div class="col-lg-12 col-sm-12 form-group aos-init" data-aos="zoom-in" data-aos-duration="800">
										
										<textarea class="" name="message" placeholder="Message"></textarea>
									</div>
								
									
									<div class="col-lg-12 col-md-12 col-sm-12   text-center aos-init" data-aos="zoom-in" data-aos-duration="800">
									<button name="submit" class="th-btn style1  ">Submit Now <svg aria-hidden="true" class="e-font-icon-svg e-fas-chevron-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path></svg></button>
									</div>
									
								</div>
							</form>


</div>


</div>

</div>
	  </div>
	

  
    </div>
  
    
  </div>
   <div class="mapp-area">
         <div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15714.844088248861!2d76.319543!3d10.040688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c359f5cdac9%3A0x97d82a81628adaf2!2sChangampuzha%20Nagar%2C%20Pathadipalam%2C%20Edappally%2C%20Ernakulam%2C%20Kerala%20682033!5e0!3m2!1sen!2sin!4v1768383489973!5m2!1sen!2sin"  width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    </div>
    


@endsection


@section('footer_extras')

<script>

document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault(); // stop real submit

    // show success message
    alertify.success('Message sent, We will contact you soon!');

    // reset form fields
    this.reset();

});
</script>

@endsection