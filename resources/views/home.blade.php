@extends('layouts.app')

@section('content')

<div id="home-page">

    <!-- banner-section -->
    <section class="banner-section style-four" >
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">

            <div class="slide-item">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-1.png') }}"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                            <div class="content-box rtl">
                                <h2 class="cta-section">الابصار...الحياة اصفي</h2>
                                <p class="cta-section">
                                    نتعهد خدماتنا الطبية بكفاءة طاقمنا, وحداثة تقنياتنا, و جودة اجهزتنا
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('front/images/banner/banner-1.png') }}"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box rtl">
                                <h2 class="cta-section">الابصار الطبية</h2>
                                <p class="cta-section">نوفر الخدمات الطبية المتميزة للمرضى في مجال طب
                                    العيون باستقطاب الأطباء ذو الكفاءات العالية واستخدام
                                    أحدث التقنيات والأجهزة الطبية وفقًا لمعايير الجودة
                                    العالمية الآمنة للمرضى .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- banner-section end -->

    <!-- Start Book Section -->
    <section class="cta-style-two bg-color-3 rtl">
        <div class="auto-container">
            <div class="inner-box clearfix rtl">
                <h4 class="title text-white">احجز معنا : </h4>
                <div class="row book-container pt-3">


                    <!----- Name ----->
                    <div class="col-md-4">
                        <div class="form-group booking">
                            <input type="text" class="p-4 form-control custom-input" placeholder="الاسم :  *">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>

                    <!----- phone ----->
                    <div class="col-md-4">
                        <div class="form-group booking">
                            <input type="text" class="p-4 form-control custom-input" placeholder="رقم الجوال :  *">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>

                    <!----- phone ----->
                    <div class="col-md-4">
                        <div class="form-group booking">
                            <select name="doctor" class="p-4 form-control custom-input" id="doctor">
                                <option value="" disabled selected >الحجز مع : *</option>
                                <option value="">Hello</option>
                                <option value="">Hello</option>
                            </select>
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>

                    <!----- phone ----->
                    <div class="col-md-4">
                        <div class="form-group booking">
                            <div class='input-group date' id='datetimepicker3'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Book Section -->

    <!-- Working-Hours section -->
    <section class="testimonial-section sec-pad-2 ltr" style="background-image: url(front/images/background/testimonial-1.jpg);">
        <div class="auto-container">
            <div class="inner-content">
                <div class="sec-title">
                    <h6>عن الشركة</h6>
                    <h5>نسعى أّن نكون الاختيار الأول دائمًا على مستوى
                        الشرق الأوسط</h5>
                        <p class="about-content">شركة الإبصار الطبية متخصصة فى توفير الخدمات الطبية المتميزة
                            للمرضى في مجال طب العيون باستقطاب الأطباء ذو الكفاءات
                            العالية واستخدام أحدث التقنيات والأجهزة الطبية</p>
                        <hr>
                        <div class="working-hours">
                            <div class="rtl row align-items-center h-100">
                                <div class="col-4">
                                    مواعيد العمل :
                                </div>
                                <div class="col-8">
                                    <h4> 9AM - 10AM </h4>
                                    <br>
                                    <h4> السبت - الخميس </h4>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Working-Hours section end -->

    <!-- team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>الطاقم الطبي</h6>
                <p>لدينا أطباء ذو كفاءة عالية في خدمتك</p>
            </div>

            <div class="row clearfix">

                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box text-center">
                            <figure class="image-box">
                                <img src="{{ asset('front/images/team/team-1.jpg') }}" alt="">
                            </figure>
                            <div class="lower-content">
                                <h4><a href="team-details.html">Dr. Antonio Banderas</a></h4>
                                <span class="designation">PHD Student</span>
                            </div>
                            <div class="social-icons">
                                <ul class="social-style-one clearfix">
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box text-center">
                            <figure class="image-box">
                                <img src="{{ asset('front/images/team/team-1.jpg') }}" alt="">
                            </figure>
                            <div class="lower-content">
                                <h4><a href="team-details.html">Dr. Antonio Banderas</a></h4>
                                <span class="designation">PHD Student</span>
                            </div>
                            <div class="social-icons">
                                <ul class="social-style-one clearfix">
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box text-center">
                            <figure class="image-box">
                                <img src="{{ asset('front/images/team/team-1.jpg') }}" alt="">
                            </figure>
                            <div class="lower-content">
                                <h4><a href="team-details.html">Dr. Antonio Banderas</a></h4>
                                <span class="designation">PHD Student</span>
                            </div>
                            <div class="social-icons">
                                <ul class="social-style-one clearfix">
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- team Section -->


    <!-- Blog Section -->
    <section class="custom-blog-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <div class=" row align-items-center h-100">
                    <div class="col-8 text-right">
                        <h6>المكتبة الطبية</h6>
                        <p>أحدث المقالات والتقنيات الطبية المتخصصة بالعيون</p>
                    </div>
                    <div class="col-4 text-left">
                        <a href="#" class="theme-btn-one">المزيد</a>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box custom-post big-post bg-style" style="background-image: url(/front/images/team/team-1.jpg)">
                            <div class="overlay">
                                <div class="date">
                                    <p class="day"> 25 </p>
                                    <p class="month">مايو</p>
                                </div>
                                <div class="heading">
                                    <h3> الماء البيضاء </h3>
                                    <p> الماء الأبيض (الساد) ويسمى أيضًا (الكتاراكت) وهو عتامة عدسة
                                        العين أي تعكر في عدسة العين السليمة </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 team-block">
                    <div class="row">

                        <div class="col-md-12 team-block">
                            <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <div class="inner-box custom-post original-post">
                                    <div class="row h-100">
                                        <div class="col-5 bg-style" style="background-image: url(/front/images/team/team-1.jpg)"></div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="post-content">
                                                <p class="date"> 2022 ،مايو 29 </p>
                                                <h6 class="f-bold"> عيون الأطفال و الحول </h6>
                                                <p> نوفر التشخيص المبكر لعيوب الإبصار عند الأطفال بأحدث
                                                    التقنيات لعلاج حالات كسل العين و الأمراض الخلقية و </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 team-block" style="margin-top: 40px">
                            <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <div class="inner-box custom-post original-post">
                                    <div class="row h-100">
                                        <div class="col-5 bg-style" style="background-image: url(/front/images/team/team-1.jpg)"></div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="post-content">
                                                <p class="date"> 2022 ،مايو 29 </p>
                                                <h6 class="f-bold"> عيون الأطفال و الحول </h6>
                                                <p> نوفر التشخيص المبكر لعيوب الإبصار عند الأطفال بأحدث
                                                    التقنيات لعلاج حالات كسل العين و الأمراض الخلقية و </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

@endsection
