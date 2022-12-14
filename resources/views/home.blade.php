@extends('layouts.app')

@section('content')
    <div id="home-page">

        <!-- banner-section -->
        <section class="banner-section style-four">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">

                <div class="slide-item">
                    <div class="auto-container">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('front/images/banner/banner-1.png') }}"
                                            alt="slider-img" class="slider-img">
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
                                            alt="slider-img" class="slider-img">
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
        <section id="book-appointment" class="cta-style-two bg-color-3 rtl">
            <div class="auto-container">
                <div class="inner-box clearfix rtl">
                    <h4 class="title text-white">احجز معنا : </h4>

                    <form action="{{ route('store_appointment') }}" method="POST">
                        <div class="row book-container pt-3">

                            @csrf

                            <!----- Name ----->
                            <div class="col-md-4 mt-3">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-circle-user"></i>
                                    <input type="text" class="w-100" placeholder="الاسم : *" name="username"
                                        autocomplete="nope" value="{{ old('username') }}" minlength="8" maxlength="100"
                                        required />
                                </div>
                            </div>

                            <!----- phone ----->
                            <div class="col-md-4 mt-3">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-phone"></i>
                                    <input type="text" class="w-100" placeholder="رقم الجوال : *" name="phone"
                                        autocomplete="nope" value="{{ old('phone') }}" minlength="8" maxlength="100"
                                        required />
                                </div>
                            </div>

                            <!----- member ----->
                            <div class="col-md-4 mt-3">
                                <div class="input__box">
                                    <select name="member_id" id="member" required>
                                        <option value="" disabled selected hidden>الحجز مع : *</option>
                                        @foreach ($all_members as $member)
                                            <option value="{{ $member->id }}"
                                                {{ old('member') == $member->id ? 'selected' : '' }}>
                                                {{ $member->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <!----- date ----->
                            <div class="col-md-4 mt-3 datepicker-box">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-calendar"></i>
                                    <input class="textbox-n" type="text" onfocus="(this.type='date');this.showPicker()"
                                        onblur="(this.type='text')" placeholder="تاريخ الحجز : *"
                                        value="{{ old('date') }}" name="date" id="date" required />
                                </div>
                            </div>

                            <!----- time ----->
                            <div class="col-md-4 mt-3 datepicker-box">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-clock"></i>
                                    <input class="textbox-n" type="text" onfocus="(this.type='time');this.showPicker()"
                                        onblur="(this.type='text')" placeholder="وقت الحجز : *" value="{{ old('time') }}"
                                        name="time" id="time" required />
                                </div>
                            </div>


                            <!----- Submit Btn ----->
                            <div class="col-md-4 mt-3">
                                <button type="submit" class="theme-btn-one blue-opcity w-100">احجز الان</button>
                            </div>

                        </div>
                    </form>

                </div>
        </section>
        <!-- End Book Section -->


        <!-- service-section -->
        @if (!$services->isEmpty())
            <section class="service-custom-section section-padding">
                <div class="auto-container">
                    <div class="sec-title centred">
                        <h6>خدماتنا</h6>
                        <p>نلتزم بالعمل بامتياز لتقديم خدماتنا للمرضى على أعلى معايير
                            الجودة و السلامة</p>
                    </div>
                    <div class="row clearfix">
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6 col-sm-12 service-block mt-5">
                                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <img src="{{ asset('images/services/' . $service->icon) }}"  height="320" class="rounded"
                                                alt="service-icon">
                                        </div>
                                        <h4><a href="{{ route('service.show', $service->slug) }}"> {{ $service->title }} </a></h4>
                                        <p> {{ $service->summary }} </p>
                                        <div class="btn-box mt-5"><a href="{{ route('service.show', $service->slug) }}"
                                                class="theme-btn-one">المزيد</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>



                    <div class="more-details mt-5 text-center">
                        لمشاهدة المزيد من الخدمات
                        <a href="{{ route('service.index') }}" class="font-blue"> اضغط هنا </a>
                    </div>
                </div>
            </section>
        @endif


        <!-- Working-Hours section -->
        <section class="testimonial-section sec-pad-2 ltr"
            style="background-image: url(front/images/background/testimonial-1.jpg);">
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
        @if (!$members->isEmpty())
            <section class="team-section">
                <div class="auto-container">
                    <div class="sec-title centred">
                        <h6>الطاقم الطبي</h6>
                        <p>لدينا أطباء ذو كفاءة عالية في خدمتك</p>
                    </div>

                    <div class="row clearfix">

                        @foreach ($members as $member)
                            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box text-center mb-3">
                                        <figure class="image-box"
                                            style="background-image: url('/images/members/{{ $member->img }}')"></figure>
                                        <div class="lower-content">
                                            <h4>{{ $member->name }}</h4>
                                            <span class="designation">{{ $member->job_title }}</span>
                                        </div>
                                        <div class="social-icons">
                                            <ul class="social-style-one clearfix">
                                                <li><a href="{{ $member->twitter }}" target="_blank"><i
                                                            class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <!-- team Section -->
        @endif



        <!-- Blog Section -->
        @if (!$members->isEmpty() && count($members) >= 3)
            <section class="custom-blog-section">
                <div class="auto-container">
                    <div class="sec-title centred">
                        <div class=" row align-items-center h-100">
                            <div class="col-8 text-right">
                                <h6>المكتبة الطبية</h6>
                                <p>أحدث المقالات والتقنيات الطبية المتخصصة بالعيون</p>
                            </div>
                            <div class="col-4 text-left">
                                <a href="{{ route('blog') }}" class="theme-btn-one">المزيد</a>
                            </div>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box custom-post big-post bg-style"
                                    style="background-image: url(/images/articles/{{ $articles[0]->img }})">
                                    <div class="overlay">
                                        <div class="date">
                                            <p class="day"> {{ $articles[0]->arabic_date["day"] }} </p>
                                            <p class="month">{{ $articles[0]->arabic_date["month"] }}</p>
                                        </div>
                                        <div class="heading">
                                            <h3> <a href="{{ route('article', $articles[0]->slug) }}">
                                                    {{ $articles[0]->title }} </a> </h3>
                                            <p> {{ $articles[0]->summary }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 team-block">
                            <div class="row">

                                <div class="col-md-12 team-block">
                                    <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner-box custom-post original-post">
                                            <div class="row h-100">
                                                <div class="col-5 bg-style"
                                                    style="background-image: url(/images/articles/{{ $articles[1]->img }})">
                                                </div>
                                                <div class="col-7 d-flex align-items-center">
                                                    <div class="post-content">
                                                        <p class="date">
                                                            {{ $articles[1]->arabic_date["day"] }}
                                                            {{ $articles[1]->arabic_date["month"] }},
                                                            {{ $articles[1]->arabic_date["year"] }}
                                                        </p>
                                                        <h6 class="f-bold"> <a
                                                                href="{{ route('article', $articles[1]->slug) }}">
                                                                {{ $articles[1]->title }} </a> </h6>
                                                        <p> {{ $articles[1]->summary }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 team-block" style="margin-top: 40px">
                                    <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner-box custom-post original-post">
                                            <div class="row h-100">
                                                <div class="col-5 bg-style"
                                                    style="background-image: url(/images/articles/{{ $articles[2]->img }})">
                                                </div>
                                                <div class="col-7 d-flex align-items-center">
                                                    <div class="post-content">
                                                        <p class="date">
                                                            {{ $articles[2]->arabic_date["day"] }}
                                                            {{ $articles[2]->arabic_date["month"] }},
                                                            {{ $articles[2]->arabic_date["year"] }}
                                                        </p>
                                                        <h6 class="f-bold"> <a
                                                                href="{{ route('article', $articles[2]->slug) }}">
                                                                {{ $articles[2]->title }} </a> </h6>
                                                        <p> {{ $articles[2]->summary }} </p>
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
        @endif


    </div>
@endsection
