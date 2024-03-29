@extends('layouts.app')
@section('content')
    <section class="about-me" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5 wow zoomIn">
                    <h2 class="section-title">
                        About Me
                    </h2>
                    <span class="background-text">about me</span>
                </div>
            </div> 

            <div class="row">
                <div class="col-lg-4 text-center wow fadeInLeft">
                    <img src="assets/img/about-large.jpg" alt="">
                </div>

                <div class="col-lg-8 about-me-text pl-lg-5">
                    <p class="lead my-4">
                        Hello, I’m <strong>John Doe</strong>, an independent UI/UX design 
                        professional based in USA. Find me on 
                        <a href="#" class="google-plus-link">Google Plus</a>,
                        <a href="#" class="facebook-link">Facebook</a> , 
                        <a href="#" class="twitter-link">Twitter</a> , 
                        <a href="#" class="dribbble-link">Dribbble</a> ,
                        <a href="#" class="pinterest-link">Pinterest</a> ,
                        <a href="#" class="behance-link">Behance</a> and
                        <a href="#" class="linkedin-link">LinkedIn</a>
                    </p>
                    <p class="mb-5">
                        Nam liber tempor cum soluta nobis eleifend option congue nihil imper per tem por legere me doming vulputate velit esse molestie possim. Ut wisi enim ad placerat facer possim assum minim veniam, quis nostrud exerci tation ullamcorper.
                    </p>
                    <h4>Personal Information</h4>
                    <ul class="personal-info list-inline clearfix mb-5">
                        <li><strong>Full Name :</strong> John Doe</li>
                        <li><strong>Birthday :</strong> 25 January 1990</li>
                        <li><strong>Address :</strong> Jatrabari, Dhaka, Bangladesh</li>
                        <li><strong>Phone :</strong> +1 256 254 84 56</li>
                        <li><strong>Email :</strong> <a href="mailto:support@echotheme.com">support@echotheme.com</a></li>
                        <li><strong>Job :</strong> UI/UX Engineer</li>
                        <li><strong>Skype :</strong> skype_id</li>
                    </ul>
                    <a href="resume.html" class="btn btn-theme btn-active mr-md-3 wow slideInUp">download resume</a>
                    <a href="contact.html" class="btn btn-theme wow slideInUp">get in touch now</a>
                </div>
            </div> 
        </div> 
    </section>

    <section class="my-interest bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5 wow zoomIn">
                    <h2 class="section-title">
                        My Interests
                    </h2>
                    <span class="background-text">Interests</span>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="interest-block">
                        <span class="lnr lnr-bicycle"></span>
                        <p> Bicycling </p>
                    </div>
                </div>
        
                <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="interest-block">
                        <span class="lnr lnr-camera-video"></span>
                        <p> Watch Movies </p>
                    </div>
                </div>
        
                <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="interest-block">
                        <span class="lnr lnr-book"></span>
                        <p> Reading Books </p>
                    </div>
                </div>
        
                <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="interest-block">
                        <span class="lnr lnr-cart"></span>
                        <p> Shopping </p>
                    </div>
                </div> 
        
                <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="interest-block">
                        <span class="lnr lnr-bus"></span>
                        <p> Travelling </p>
                    </div>
                </div>
        
                <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".6s">
                    <div class="interest-block">
                        <span class="lnr lnr-laptop-phone"></span>
                        <p> Gaming </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awards">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5 wow zoomIn">
                    <h2 class="section-title">
                        My Awards
                    </h2>
                    <span class="background-text">Awards</span>
                </div>
            </div>

            <div class="row">
                <div class="awards-slides owl-carousel">
                    <div class="awards-item">
                        <div class="awards-logo">
                            <img src="assets/img/awards/1.jpg" alt="">
                        </div>
                        <h4 class="block-title my-4">Excellence Award 2012</h4>
                        <p>
                            Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
                        </p>
                    </div>
                    <div class="awards-item">
                        <div class="awards-logo">
                            <img src="assets/img/awards/2.jpg" alt="">
                        </div>
                        <h4 class="block-title my-4">Excellence Award 2012</h4>
                        <p>
                            Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
                        </p>
                    </div>
        
                    <div class="awards-item">
                        <div class="awards-logo">
                            <img src="assets/img/awards/3.jpg" alt="">
                        </div>
                        <h4 class="block-title my-4">Excellence Award 2012</h4>
                        <p>
                            Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
                        </p>
                    </div>
            
                    <div class="awards-item">
                        <div class="awards-logo">
                            <img src="assets/img/awards/1.jpg" alt="">
                        </div>
                        <h4 class="block-title my-4">Excellence Award 2012</h4>
                        <p>
                            Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
                        </p>
                    </div>
            
                    <div class="awards-item">
                        <div class="awards-logo">
                            <img src="assets/img/awards/2.jpg" alt="">
                        </div>
                        <h4 class="block-title my-4">Excellence Award 2012</h4>
                        <p>
                            Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
                        </p>
                    </div>
            
                    <div class="awards-item">
                        <div class="awards-logo">
                            <img src="assets/img/awards/3.jpg" alt="">
                        </div>
                        <h4 class="block-title my-4">Excellence Award 2012</h4>
                        <p>
                            Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
                        </p>
                    </div>
            
                    <div class="awards-item">
                        <div class="awards-logo">
                            <img src="assets/img/awards/3.jpg" alt="">
                        </div>
                        <h4 class="block-title my-4">Excellence Award 2012</h4>
                        <p>
                            Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection