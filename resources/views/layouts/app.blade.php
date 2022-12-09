<!doctype html>
<html dir="rtl">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fav Icon -->
    <link rel="icon" href='{{ asset('front/images/favicon.png') }}' type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href='{{ asset('front/css/font-awesome-all.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/flaticon.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/owl.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/bootstrap.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/jquery.fancybox.min.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/animate.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/color.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/rtl.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/style.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/responsive.css') }}' rel="stylesheet">
    <link href='{{ asset('front/css/customize.css') }}' rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker-standalone.css" integrity="sha512-wT6IDHpm/cyeR3ASxyJSkBHYt9oAvmL7iqbDNcAScLrFQ9yvmDYGPZm01skZ5+n23oKrJFoYgNrlSqLaoHQG9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite([ 'resources/sass/app.scss', 'resources/js/app.js' ])

</head>

<body class="rtl text-right">
    <div id="app" class="boxed_wrapper">


        <!-- preloader -->
        {{-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div> --}}
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
            <div class="header-lower container">
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
                                    <li><a href="{{ route("home") }}">الرئيسية</a></li>
                                    <li class="dropdown"><a href="index.html">الخدمات</a>
                                        <ul>
                                            <li><a href="index.html">خدمة</a></li>
                                            <li><a href="index-2.html">خدمة</a></li>
                                            <li><a href="index-3.html">خدمة</a></li>
                                            <li><a href="index-4.html">خدمة</a></li>
                                            <li><a href="index-5.html">خدمة</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route("about") }}">من نحن</a></li>
                                    <li><a href="{{ route("contact") }}">الطاقم الطبي</a></li>
                                    <li><a href="{{ route("contact") }}">العروض</a></li>
                                    <li><a href="{{ route("contact") }}">حجز موعد</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
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
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <div class="footer-logo">
                                    <figure class="logo"><a href="index.html"><img src="{{ asset('front/images/logo.png') }}" alt="fusion-logo"></a></figure>
                                </div>
                                <div class="text">
                                    <p>المملكة العربية السعودية - الرياض حي الملك
                                        فيصل ، تقاطع طريق الملك عبدالله بن عبدالعزيز
                                        و شارع الفضول 13</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ">
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">الرئيسية</a></li>
                                        <li><a href="index.html">الخدمات</a></li>
                                        <li><a href="index.html">من نحن</a></li>
                                        <li><a href="index.html">الطاقم الطبي</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ">
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">المدونة</a></li>
                                        <li><a href="index.html">الخدمات</a></li>
                                        <li><a href="index.html">من نحن</a></li>
                                        <li><a href="index.html">الاختبارات</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ">
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">المسؤولية الاجتماعية</a></li>
                                        <li><a href="index.html">انضم لنا</a></li>
                                        <li><a href="index.html">حجز موعد</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget subscribe-widget">
                                <div class="widget-title">
                                    <h4 class="font-blue">تحميل التطبيق</h4>
                                </div>
                                <div class="row align-items-center h-100">
                                    <div class="col-4">
                                        <a href="#">
                                            <img src="{{ asset('front/images/icons/android-icon.png') }}" alt="android-icon" width="64">
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <p>Get It From </p>
                                        <h4> Playstore </h4>
                                    </div>
                                </div>
                                <div class="row align-items-center h-100 mt-3">
                                    <div class="col-4">
                                        <a href="#">
                                            <img src="{{ asset('front/images/icons/apple-icon.png') }}" alt="apple-icon" width="64">
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <p>Get It From </p>
                                        <h4> Appstore </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <ul class="social-style-one mb-3">
                            <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index-3.html"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <p> © جميع الحقوق محفوظة. الابصار الطبية </p>
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
    {{-- <script src='{{ asset('front/js/jquery.nice-select.min.js') }}'></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='{{ asset('front/js/nav-tool.js') }}'></script>
    <script src='{{ asset('front/js/jquery.paroller.min.js') }}'></script>


    <!-- main-js -->
    <script src='{{ asset('front/js/script.js') }}'></script>


</body>

</html>
