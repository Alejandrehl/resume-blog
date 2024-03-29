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

    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="page-loader">
        <div class="loader-icon fa fa-spin colored-border"></div>
    </div>
    <nav id="nav">
        <div class="sm-nav-toggler">
            <span class="lnr lnr-menu"></span>
            <span class="lnr lnr-cross"></span>
        </div>
        <ul class="main-menu">
            <li>
                <a href="{{ route('index') }}">
                    <span class="lnr lnr-home"></span>
                    <span class="nav-text">home</span>
                </a>
            </li>
            <li>
                @if (\Route::current()->getName() == "index")
                    <a class="scrolling" href="#about">
                @else
                    <a class="scrolling" href="{{ route('index') }}#about">
                @endif
                    <span class="lnr lnr-user"></span>
                    <span class="nav-text">About</span>
                </a>
            </li>
            <li>
                <a href="{{ route('resume') }}">
                    <span class="lnr lnr-license"></span>
                    <span class="nav-text">resume</span>
                </a>
            </li>
            <li>
                <a href="{{ route('services') }}">
                    <span class="lnr lnr-cog"></span>
                    <span class="nav-text">services</span>
                </a>
            </li>
            <li>
                <a href="{{ route('portfolio') }}">
                    <span class="lnr lnr-briefcase"></span>
                    <span class="nav-text">portfolio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('blog') }}">
                    <span class="lnr lnr-leaf"></span>
                    <span class="nav-text">blog</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}">
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
            @yield('content')
    </main>

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
            </div>
        </div>
    </footer>

    <div class="scroll-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap-validator/dist/validator.min.js"></script>
    <script src="assets/vendor/typist/typist.js"></script>
    <script src="assets/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope/dist/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/matchHeight/dist/jquery.matchHeight-min.js"></script>
    <script src="assets/vendor/wow/dist/wow.min.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/smothscroll.js"></script>
    <script src="assets/js/count.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
