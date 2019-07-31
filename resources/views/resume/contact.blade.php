@extends('layouts.app')
@section('content')
 <section class="pb-0">
 
  <div class="container">
   
    <div class="row">
     <div class="col-sm-12 text-center mb-5 wow zoomIn">
       <h2 class="section-title">
         get in touch
       </h2>
       <span class="background-text">contact</span>
     </div>
    </div> <!-- END row-->
  
    <div class="row">
     
      <div class="col-lg-8 pt-md-5 wow fadeIn">
        <h4 class="block-title">Feel free to Drop a line</h4>
        <p>
          Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo  minus id quod maxime placeat facere possimus.
        </p>
        
        <form class="form-contact" action="form-process.php" method="POST">
         
          <div class="row">
           
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name" required>
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
              </div>
            </div>
            
          </div> <!-- END row-->
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Your text here..." rows="5" required></textarea>
          </div>
          
          <button class="btn btn-theme btn-active" type="submit" >Send Message</button>
          <div class="form-send-callback"></div>
        </form> <!-- END form-->
        
      </div> <!-- END col-lg-8-->
      
      <div class="col-lg-4 mt-5">
       
        <div class="contact-block wow zoomIn">
          <h4>Contact Information</h4>
          
          <div class="contact-info">
            <div class="con-icon">
              <span class="lnr lnr-phone-handset"></span>
            </div>
            <div class="con-text">
              Phone: +6789-875-2235
            </div>
          </div> <!-- END contact-info-->
          
          <div class="contact-info">
            <div class="con-icon">
              <span class="lnr lnr-envelope"></span>
            </div>
            <div class="con-text">
              <a href="mailto:support@theme-valley.com">support@theme-valley.com</a>
            </div>
          </div> <!-- END contact-info-->
          
          <div class="contact-info">
            <div class="con-icon">
              <span class="lnr lnr-map-marker"></span>
            </div>
            <div class="con-text">
              202 New Hampshire Avenue Northwest #100, New York-2573
            </div>
          </div> <!-- END contact-info-->
          
          <div class="social mt-4">
            <a href="" class="color-social"><i class="fa fa-facebook"></i></a>
            <a href="" class="color-social"><i class="fa fa-twitter"></i></a>
            <a href="" class="color-social"><i class="fa fa-google-plus"></i></a>
            <a href="" class="color-social"><i class="fa fa-linkedin"></i></a>
            <a href="" class="color-social"><i class="fa fa-dribbble"></i></a>
          </div>
        </div> <!-- END contact-block-->
        
      </div> <!-- END col-lg-4 -->
      
    </div> <!-- END row-->
    
    <div class="row">
      <div class="col-sm-12">
        <div id="map" style="width:100%; height:450px;"></div>
      </div>
    </div> <!-- END row-->
    
  </div> <!-- END container-->
</section> <!-- END section-->





<section class="contact-bottom-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <h2 class="contact-hero-text">
          More than <span class="color-text">1200 Projects</span> for <span class="text-blue">Seven hundred clients</span> in less than three years of operation. We’d love to 
          work on your project!
        </h2>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END contact-bottom-content-->
@endsection