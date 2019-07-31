<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Alejandro Hernández Laravel Portfolio Template">
    <meta name="author" content="Alejandro Hernández">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RESUME|BLOG') }}</title>

    <link rel="icon" href="assets/img/facicon/114x114.png" type="image/gif">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav id="nav">
        <div class="sm-nav-toggler">
            <span class="lnr lnr-menu"></span>
            <span class="lnr lnr-cross"></span>
        </div>
        <ul class="main-menu">
            <li>
                <a href="index.html">
                    <span class="lnr lnr-home"></span>
                    <span class="nav-text">home</span>
                </a>
            </li>
            <li>
                <a class="scrolling" href="#about">
                    <span class="lnr lnr-user"></span>
                    <span class="nav-text">About</span>
                </a>
            </li>
            <li>
                <a href="resume.html">
                    <span class="lnr lnr-license"></span>
                    <span class="nav-text">resume</span>
                </a>
            </li>
            <li>
                <a href="services.html">
                    <span class="lnr lnr-cog"></span>
                    <span class="nav-text">services</span>
                </a>
            </li>
            <li>
                <a href="portfolio.html">
                    <span class="lnr lnr-briefcase"></span>
                    <span class="nav-text">portfolio</span>
                </a>
            </li>
            <li>
                <a href="blog.html">
                    <span class="lnr lnr-leaf"></span>
                    <span class="nav-text">blog</span>
                </a>
            </li>
            <li>
                <a href="contact.html">
                    <span class="lnr lnr-phone-handset"></span>
                    <span class="nav-text">Contact</span>
                </a>
            </li>
        </ul>
        <div class="menu-bg"></div>
    </nav>

    <section class="intro-hero">
        <div class="container">
            <div class="row">
            
            <div class="col-sm-12 text-center">
                <img class="intro-hero-img" src="assets/img/hero-round.png" alt="">
                <h1 class="hero-title">Hello Guys, I’m <strong>John Doe</strong> </h1>
                <p class="hero-tagline">
                I am 
                <span class="typelist-skill" data-typist="a Creative Designer, a Blogger, a Traveller, an Entrepreneur,a Speaker, a Teacher">a Developer</span>
                </p>
            </div> 
                
            <div class="col-sm-6">
                <ul class="list-inline social social-intro">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div> 
            
            <div class="col-sm-6">
                <a href="https://vimeo.com/45830194" class="btn-play-video">
                <svg viewBox="0 0 294.843 294.843" style="enable-background:new 0 0 294.843 294.843;" xml:space="preserve">
                    <path d="M278.527,79.946c-10.324-20.023-25.38-37.704-43.538-51.132c-2.665-1.97-6.421-1.407-8.392,1.257s-1.407,6.421,1.257,8.392
                    c16.687,12.34,30.521,28.586,40.008,46.983c9.94,19.277,14.98,40.128,14.98,61.976c0,74.671-60.75,135.421-135.421,135.421
                    S12,222.093,12,147.421S72.75,12,147.421,12c3.313,0,6-2.687,6-6s-2.687-6-6-6C66.133,0,0,66.133,0,147.421
                    s66.133,147.421,147.421,147.421s147.421-66.133,147.421-147.421C294.842,123.977,289.201,100.645,278.527,79.946z"/>
                    <path d="M109.699,78.969c-1.876,1.067-3.035,3.059-3.035,5.216v131.674c0,3.314,2.687,6,6,6s6-2.686,6-6V94.74l88.833,52.883
                    l-65.324,42.087c-2.785,1.795-3.589,5.508-1.794,8.293c1.796,2.786,5.508,3.59,8.294,1.794l73.465-47.333
                    c1.746-1.125,2.786-3.073,2.749-5.15c-0.037-2.077-1.145-3.987-2.93-5.05L115.733,79.029
                    C113.877,77.926,111.575,77.902,109.699,78.969z"/>
                </svg>
                <span>Watch <br> Intro Video</span>
                </a>
            </div> 
            
            </div> 
        </div> 
    </section>

    <main class="content-wrap">

    <section class="about-me" id="about">
    
    <div class="container">

    <div class="row">
        <div class="col-sm-12 text-center mb-5 wow zoomIn">
        <h2 class="section-title">
            About Me
        </h2>
        <span class="background-text">about me</span>
        </div>
    </div> <!-- END row-->

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
        </div> <!-- END col-md-8 about-me-text-->
        </div> <!-- END row-->
        
    </div> <!-- END container-->
    </section> <!-- END about-me-->





    <section class="my-interest bg-gray">
    
    <div class="container">
    
    <div class="row">
        <div class="col-sm-12 text-center mb-5 wow zoomIn">
        <h2 class="section-title">
            My Interests
        </h2>
        <span class="background-text">Interests</span>
        </div>
    </div> <!-- END row-->
    
    <div class="row">
        
        <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s">
        <div class="interest-block">
            <span class="lnr lnr-bicycle"></span>
            <p> Bicycling </p>
        </div>
        </div> <!-- END col-lg-2 col-md-4-->
        
        <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
        <div class="interest-block">
            <span class="lnr lnr-camera-video"></span>
            <p> Watch Movies </p>
        </div>
        </div> <!-- END col-lg-2 col-md-4-->
        
        <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="interest-block">
            <span class="lnr lnr-book"></span>
            <p> Reading Books </p>
        </div>
        </div> <!-- END col-lg-2 col-md-4-->
        
        <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".4s">
        <div class="interest-block">
            <span class="lnr lnr-cart"></span>
            <p> Shopping </p>
        </div>
        </div> <!-- END col-lg-2 col-md-4-->
        
        <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="interest-block">
            <span class="lnr lnr-bus"></span>
            <p> Travelling </p>
        </div>
        </div> <!-- END col-lg-2 col-md-4-->
        
        <div class="col-lg-2 col-md-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".6s">
        <div class="interest-block">
            <span class="lnr lnr-laptop-phone"></span>
            <p> Gaming </p>
        </div>
        </div> <!-- END col-lg-2 col-md-4-->
        
    </div> <!-- END row-->
    
    </div> <!-- END container-->
    </section> <!-- END my-interest-->





    <section class="awards">
    
    <div class="container">
    
        <div class="row">
        <div class="col-sm-12 text-center mb-5 wow zoomIn">
        <h2 class="section-title">
            My Awards
        </h2>
        <span class="background-text">Awards</span>
        </div>
        </div> <!-- END row-->
        
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
            </div> <!-- END awards-item-->
        
            <div class="awards-item">
            <div class="awards-logo">
                <img src="assets/img/awards/2.jpg" alt="">
            </div>
            <h4 class="block-title my-4">Excellence Award 2012</h4>
            <p>
                Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
            </p>
            </div> <!-- END awards-item-->
        
            <div class="awards-item">
            <div class="awards-logo">
                <img src="assets/img/awards/3.jpg" alt="">
            </div>
            <h4 class="block-title my-4">Excellence Award 2012</h4>
            <p>
                Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
            </p>
            </div> <!-- END awards-item-->
        
            <div class="awards-item">
            <div class="awards-logo">
                <img src="assets/img/awards/1.jpg" alt="">
            </div>
            <h4 class="block-title my-4">Excellence Award 2012</h4>
            <p>
                Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
            </p>
            </div> <!-- END awards-item-->
        
            <div class="awards-item">
            <div class="awards-logo">
                <img src="assets/img/awards/2.jpg" alt="">
            </div>
            <h4 class="block-title my-4">Excellence Award 2012</h4>
            <p>
                Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
            </p>
            </div> <!-- END awards-item-->
        
            <div class="awards-item">
            <div class="awards-logo">
                <img src="assets/img/awards/3.jpg" alt="">
            </div>
            <h4 class="block-title my-4">Excellence Award 2012</h4>
            <p>
                Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
            </p>
            </div> <!-- END awards-item-->
        
            <div class="awards-item">
            <div class="awards-logo">
                <img src="assets/img/awards/3.jpg" alt="">
            </div>
            <h4 class="block-title my-4">Excellence Award 2012</h4>
            <p>
                Nam liber tempor cum soluta nobis eleifend the option congue nihil imper per tem por legere me doming vulputate velit esse molestie. 
            </p>
            </div> <!-- END awards-item-->
            
        </div> <!-- END awards-slides-->
        </div> <!-- END row-->
        
    </div>  <!-- END container-->
    </section> <!-- END awards-->

    </main> <!-- END content-wrap-->

    <footer class="site-footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 text-center">
            <h1 class="footer-theme-name">Bryson</h1>
            <p>
            &copy; Copyright 2017  -  Created by <a target="_blank" class="color-text" href="http://echotheme.com">Echo Theme</a>
            <br>
            All rights reserved
            </p>
        </div>
        </div> <!-- END row-->
    </div> <!-- END container-->
    </footer> <!-- END site-footer-->





    <div class="scroll-top">
    <span class="lnr lnr-chevron-up"></span>
    </div>

    @yield('content')

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
