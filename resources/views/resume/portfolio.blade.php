@extends('layouts.app')
@section('content')
<section>
  <div class="container">
   
    <div class="row">
     <div class="col-sm-12 text-center mb-5 wow zoomIn">
       <h2 class="section-title">
         My Work
       </h2>
       <span class="background-text">portfolio</span>
     </div>
    </div> <!-- END row-->
    
    <div class="row">
      <div class="col-sm-12 text-center my-4">
        <ul class="portfolio-filter list-inline">
          <li class="active" data-filter="*">All</li>
          <li data-filter=".cat1">Creative</li>
          <li data-filter=".cat2">Corporate</li>
          <li data-filter=".cat3">Onepage</li>
          <li data-filter=".cat4">Ecommerce</li>
          <li data-filter=".cat5">wordpress</li>
        </ul>
      </div>
    </div> <!-- END row-->
    
    <div class="row portfolio">
     
      <div class="col-md-6 col-lg-4 portfolio-item cat1 cat5">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/1.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/1.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
     
      <div class="col-md-6 col-lg-4 portfolio-item cat2 cat3">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/2.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/2.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
     
      <div class="col-md-6 col-lg-4 portfolio-item cat1 cat2 cat5">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/3.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/3.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
     
      <div class="col-md-6 col-lg-4 portfolio-item cat3 cat4 cat1">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/4.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/4.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
     
      <div class="col-md-6 col-lg-4 portfolio-item cat3 cat1 cat5">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/5.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/5.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
     
      <div class="col-md-6 col-lg-4 portfolio-item cat5 cat4">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/6.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/6.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div>  
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
     
      <div class="col-md-6 col-lg-4 portfolio-item cat3 cat1">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/7.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/7.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->

      <div class="col-md-6 col-lg-4 portfolio-item cat2 cat3">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/2.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/2.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
     
      <div class="col-md-6 col-lg-4 portfolio-item cat1 cat2 cat5">
        <div class="portfolio-block">
          <img src="assets/img/portfolio/3.jpg" alt="">
          <div class="portfolio-overlay">
           <div class="portfolio-btn-action">
             <a href="{{ route('portfolio/details') }}">
               <span class="lnr lnr-link"></span>
             </a>
             <a href="assets/img/portfolio/3.jpg" class="popup-img">
               <span class="lnr lnr-frame-expand"></span>
             </a>
           </div> 
           <div class="portfolio-desc">
            <h4>Creative Landing Page</h4>
            <p>Design & Branding</p>
           </div>
          </div>
        </div> <!-- END portfolio-single-->
      </div> <!--  END col-md-4-->
      
    </div> <!-- END row-->
    
  </div> <!-- END container-->
</section> <!-- END portfolio-->




<section class="call-to-action bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="section-title">Start Your Project With Me!</h2>
        <p>
          Contact with me today for a fast free quote!
        </p>
        <a href="contact.html" class="btn btn-theme btn-active mt-2">get a free quote</a>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END call-to-action-->
@endsection