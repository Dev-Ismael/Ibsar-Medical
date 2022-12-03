<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fav Icon -->
    <link rel="icon" href='{{ asset('front/images/favicon.png') }}' type="image/x-icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href='{{ asset('front/css/font-awesome-all.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/flaticon.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/owl.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/bootstrap.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/jquery.fancybox.min.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/animate.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/color.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/style.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/responsive.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/customize.css') }}' rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div id="app" class="boxed_wrapper">



        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="x" class="letters-loading">
                                x
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><span>x</span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Finance</a></li>
                        <li><a href="index.html">Idea</a></li>
                        <li><a href="index.html">Service</a></li>
                        <li><a href="index.html">Growth</a></li>
                        <li><a href="index.html">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


        <!-- main header -->
        <header class="main-header style-four">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="/"><img src="{{ asset('front/images/logo.png') }}" alt="fusion-logo"></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route("home") }}">Home</a></li>
                                    <li><a href="{{ route("about") }}">About</a></li>
                                    <li class="dropdown"><a href="index.html">Services</a>
                                        <ul>
                                            <li><a href="index.html">Service</a></li>
                                            <li><a href="index-2.html">Service</a></li>
                                            <li><a href="index-3.html">Service</a></li>
                                            <li><a href="index-4.html">Service</a></li>
                                            <li><a href="index-5.html">Service</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">locations</a>
                                        <ul>
                                            <li><a href="index.html">Location</a></li>
                                            <li><a href="index-2.html">Location</a></li>
                                            <li><a href="index-3.html">Location</a></li>
                                            <li><a href="index-4.html">Location</a></li>
                                            <li><a href="index-5.html">Location</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route("contact") }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <ul class="menu-right-content clearfix">
                        <li class="search-btn">
                            <button type="button" class="search-toggler"><i class="icon-1"></i></button>
                        </li>
                    </ul>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="menu-area pull-left">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <ul class="menu-right-content pull-right clearfix">
                            <li class="search-btn">
                                <button type="button" class="search-toggler"><i class="icon-1"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->


        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="main-footer bg-color-1">
            <div class="footer-top">
                <div class="shape">
                    {{-- <div class="shape-1 rotate-me" style="background-image: url(front/images/shape/shape-14.png);"></div>
                    <div class="shape-2 rotate-me" style="background-image: url(front/images/shape/shape-14.png);"></div> --}}
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                </div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <div class="footer-logo">
                                    <figure class="logo"><a href="index.html"><img src="{{ asset('front/images/logo.png') }}" alt="fusion-logo"></a></figure>
                                </div>
                                <div class="text">
                                    <p>Nostrud exertation ullamco labor aliquip commodo duis.</p>
                                    <ul class="info clearfix">
                                        <li><i class="icon-26"></i>Flat 20, Reynolds Neck, <br>FV77 8WS</li>
                                        <li><i class="icon-24"></i>Call Us: <a href="tel:3336660001">333-666-0001</a></li>
                                        <li><i class="icon-25"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget ml-70">
                                <div class="widget-title">
                                    <h4>Latest Events</h4>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <h5><a href="blog-details.html">A New World View Our Global Impact.</a></h5>
                                        <span class="post-date">27 May, 2021</span>
                                    </div>
                                    <div class="post">
                                        <h5><a href="blog-details.html">Proper Self-collection of Nasal Swabs.</a></h5>
                                        <span class="post-date">26 May, 2021</span>
                                    </div>
                                    <div class="post">
                                        <h5><a href="blog-details.html">Evidence Lacking for Widespread Vitamin.</a></h5>
                                        <span class="post-date">25 May, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Usefull Link</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About Company</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">How It Works</a></li>
                                        <li><a href="index.html">Our Blog</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
                                        <li><a href="index.html">Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget subscribe-widget">
                                <div class="widget-title">
                                    <h4>Subscribe</h4>
                                </div>
                                <div class="widget-content">
                                    <p>Lorem ipsum dlor sit amet, conect adipisicing elit sed do eiusmod.</p>
                                    <form action="contact.html" method="post" class="subscribe-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                            <button type="submit"><i class="icon-27"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p><a href="index.html">Laborex</a> © 2022 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>


    <!-- jequery plugins -->
    <script src='{{ asset('front/js/jquery.js') }}'></script>
    <script src='{{ asset('front/js/popper.min.js') }}'></script>
    <script src='{{ asset('front/js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('front/js/owl.js') }}'></script>
    <script src='{{ asset('front/js/wow.js') }}'></script>
    <script src='{{ asset('front/js/validation.js') }}'></script>
    <script src='{{ asset('front/js/jquery.fancybox.js') }}'></script>
    <script src='{{ asset('front/js/appear.js') }}'></script>
    <script src='{{ asset('front/js/isotope.js') }}'></script>
    <script src='{{ asset('front/js/jquery.nice-select.min.js') }}'></script>
    <script src='{{ asset('front/js/nav-tool.js') }}'></script>
    <script src='{{ asset('front/js/jquery.paroller.min.js') }}'></script>


    <!-- main-js -->
    <script src='{{ asset('front/js/script.js') }}'></script>


</body>

</html>
