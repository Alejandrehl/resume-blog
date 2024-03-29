@extends('layouts.app')
@section('content')
<section>
  <div class="container">
    <div class="row">
     <div class="col-sm-12 text-center mb-5">
       <h2 class="section-title">
         My Work
       </h2>
       <span class="background-text">portfolio</span>
     </div>
    </div> <!-- END row-->
    
    <div class="row">
      <div class="col-sm-12 text-center">
        <ol class="breadcrumb theme-breadcrumb">
          <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
          <li class="breadcrumb-item active">Portfolio Title</li>
        </ol>
      </div>
    </div> <!-- END row-->
    
    <div class="row">
    <div class="col-sm-12">
      <div class="portfolio-slider owl-carousel">
        <img src="assets/img/portfolio/l1.jpg" alt="">
        <img src="assets/img/portfolio/l2.jpg" alt="">
        <img src="assets/img/portfolio/l3.jpg" alt="">
      </div>
    </div>
    </div> <!-- END row-->
    
    <div class="row mt-5">
     
      <div class="col-md-8">
        <div class="portfolio-details-text">
          <h2>Creative Landing Page Template</h2>
          <p>
            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod there maxime placeat facere possimus. Nam libero tempore. Nam libero tempore, cum soluta nobis est eligen di optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore. Nam libero tempore. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore.
          </p>
          <p>
            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore.
          </p>
        </div>
      </div> <!-- END col-md-8 -->
      
      <div class="col-md-4">
        <div class="portfolio-meta">
         <ul class="list-inline">
           <li>
             <strong>Client :</strong> Jonathon Doe
           </li>
           <li>
             <strong>Agency :</strong> Shaken Technology
           </li>
           <li>
             <strong>Type :</strong> Web Design, Branding
           </li>
           <li>
             <strong>Lunch :</strong> 24 Dec 2016
           </li>
           <li>
             <strong>Share :</strong> 
             <a href=""><i class="fa fa-facebook"></i></a>
             <a href=""><i class="fa fa-twitter"></i></a>
             <a href=""><i class="fa fa-google-plus"></i></a>
             <a href=""><i class="fa fa-linkedin"></i></a>
           </li>
         </ul>
         <a href="" class="btn btn-theme btn-active mb-2">visit live demo</a>
        </div>
      </div> <!-- END col-md-4 -->
      
      <div class="col-sm-12">
        <div class="theme-pagination">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href=""><span class="lnr lnr-arrow-left"></span> Previous</a>
            </li>
            <li class="list-inline-item">
              <strong> 01/14 </strong>
            </li>
            <li class="list-inline-item">
              <a href="">Next <span class="lnr lnr-arrow-right"></span></a>
            </li>
          </ul>
        </div>
      </div> <!-- END col-sm-12 -->
      
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
        <a href="contact.html" class="btn btn-theme btn-active mt-1">get a free quote</a>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END call-to-action-->
@endsection