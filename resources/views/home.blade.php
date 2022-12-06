@extends('layouts.app')

@section('content')


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


    <!-- testimonial-section -->
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
                            <div class=" rtl row align-items-center h-100">
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
    <!-- testimonial-section end -->

@endsection
