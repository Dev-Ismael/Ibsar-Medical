@extends('layouts.app')

@section('content')
    <div id="about-page">

        <!-- page-title -->
        <section class="page-title centred" style="background-image: url(front/images/background/testimonial-1.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="inner-box">
                        <div class="title">
                            <h1>من نحن</h1>
                        </div>
                        <p>أفضل شركة طبية في مجال طب العيون</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-style-four sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-12 text-right">
                        <h1 class="font-blue pb-4">عن الشركة</h1>
                        <h3 class="cta-section">نسعى أّن نكون الاختيار الأول دائمًا على مستوى الشرق الأوسط</h3>
                        <p class="pt-2">
                            شركة الإبصار الطبية متخصصة فى توفير الخدمات الطبية المتميزة للمرضى في مجال طب العيون باستقطاب
                            الأطباء ذو الكفاءات العالية واستخدام أحدث التقنيات والأجهزة الطبية
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-pad">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('front/images/about/patient.png') }}" width="64" alt="ixon">
                                </div>
                                <div class="col-8">
                                    <h4 class="number font-weight-bold"> 3000+ </h4>
                                    <span class="text"> عدد المرضى شهريًا </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('front/images/about/eye.png') }}" width="64" alt="ixon">
                                </div>
                                <div class="col-8">
                                    <h4 class="number font-weight-bold"> 70+ </h4>
                                    <span class="text"> عملية ناجحة شهريًا </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-4">
                                    <img src="{{ asset('front/images/about/doctor.png') }}" width="64" alt="ixon">
                                </div>
                                <div class="col-8">
                                    <h4 class="number font-weight-bold"> 10 </h4>
                                    <span class="text"> طبيب خبير </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="goal-vision sec-pad">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-6">
                        <h3> الرسالة </h3>
                        <p>
                            تتمثل رسالة شركة الإبصار الطبية بتوفير الخدمات الطبية المتميزة
                            للمرضى في مجال طب العيون باستقطاب الأطباء ذو الكفاءات
                            العالية واستخدام أحدث التقنيات والأجهزة الطبية وفقًا لمعايير
                            الجودة العالمية الآمنة للمرضى
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3> الرؤية </h3>
                        <p>
                            نسعى أّن نكون الاختيار الأول دائمًا على مستوى الشرق
                            الأوسط في تقديم خدمات العيون ذات الجودة العالية
                            لنصل لرضا المرضى
                        </p>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="img-box">
                            <span>.01</span>
                            <img src="{{ asset("front/images/about/about-1.jpg") }}" class="img-fluid" alt="about-us">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="img-box">
                            <span>.02</span>
                            <img src="{{ asset("front/images/about/about-2.jpg") }}" class="img-fluid" alt="about-us">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="list">
                            <h3> القيم </h4>
                            <ul>
                                <li> الالتزام بالامتياز: نلتزم بالعمل بامتياز لتقديم خدماتنا للمرضى على
                                    أعلى معايير الجودة. </li>
                                <li> المهنية العالية : نلتزم بتقديم خدماتنا الصحية بمهنية عالية وفقًا
                                    للمعايير الصحية العالمية </li>
                                <li> الدقة و الوضوح : نلتزم بالدقة في خدماتنا الطبية والوضوح التام مع
                                    مرضانا </li>
                                <li> الشفافية : نلتزم بالشفافية التامة تجاه حقوق مرضانا . </li>
                                <li> الاحترام و التقدير : نلتزم أّن نوفر محيط لمرضانا فيه الاحترام و التقدير </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="img-box">
                            <span>.03</span>
                            <img src="{{ asset("front/images/about/about-3.jpg") }}" class="img-fluid" alt="about-us">
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
@endsection
