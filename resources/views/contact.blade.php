@extends('layouts.app')

@section('content')


    <!-- Page Title -->
    <section class="page-title centred my-5" style="background-image: url(front/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="shape" style="background-image: url(front/images/shape/shape-63.png);"></div>
                <div class="title">
                    <h1>Contact Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="info-section">
            <div class="auto-container">
                <div class="info-inner clearfix">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="icon-23"></i></div>
                        <h4>Office Location</h4>
                        <p>31 park street, 5th Avenue, Dhanmondy, Dhaka.</p>
                    </div>
                    <div class="single-info-box">
                        <div class="icon-box"><i class="icon-59"></i></div>
                        <h4>Phone Number</h4>
                        <p><a href="tel:316668880001">+31 666 888 0001</a><br /><a href="tel:316668880023">+31 666 888
                                0023</a></p>
                    </div>
                    <div class="single-info-box">
                        <div class="icon-box"><i class="icon-60"></i></div>
                        <h4>Email Address</h4>
                        <p><a href="mailto:info@example.com">info@example.com</a><br /><a
                                href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- contact-style-two -->
    <section class="contact-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>Research Topic</h6>
                <h2>Have Any Questins Contact With Us</h2>
            </div>
            <div class="form-inner">
                <form method="post" action="sendemail.php" id="contact-form" class="default-form">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Full Name" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email Address" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" required="" placeholder="Phone">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" required="" placeholder="Subject">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                            <button class="theme-btn-one" type="submit" name="submit-form">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->










    <!----- Offer Form ----->
    <div class="form-offer-container mb-5">
        <div class="auto-container">
            <button class="theme-btn-one offer-form-btn main">
                <i class="fa-solid fa-calendar"></i>
                &nbsp;
                احجز معنا
            </button>
            <div id="offer-form" class="d-none">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8 text-right">
                                احجز الان
                            </div>
                            <div class="col-4 text-left">
                                <button class="offer-form-btn">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="messege text-center">
                            اهلا بك انا المساعد الذكي لمساعدتك فالحجز
                        </div>
                        <div class="messege blue text-center">
                            <div class="rtl row align-items-center h-100">
                                <div class="col-6">
                                    مواعيد العمل :
                                </div>
                                <div class="col-6">
                                    <p> 9AM - 10AM </p>
                                    <p> السبت - الخميس </p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('store_appointment') }}" method="POST" class="offer-form">

                            <h5 class="mb-2"> الرجاء ادخال التالي: </h5>

                            @csrf

                            <!------- username -------->
                            <div class="input__box mb-2">
                                <i class="input__icon fa-solid fa-circle-user"></i>
                                <input type="text" class="w-100" placeholder="الاسم : *" name="username"
                                    autocomplete="nope" value="{{ old('username') }}" minlength="8" maxlength="100"
                                    required />
                            </div>

                            <!----- phone ----->
                            <div class="input__box mb-2">
                                <i class="input__icon fa-solid fa-phone"></i>
                                <input type="text" class="w-100" placeholder="رقم الجوال : *" name="phone"
                                    autocomplete="nope" value="{{ old('phone') }}" minlength="8" maxlength="100"
                                    required />
                            </div>

                            <!----- member ----->
                            <div class="input__box mb-2">
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


                            <!----- date ----->
                            <div class="mt-3 datepicker-box">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-calendar"></i>
                                    <input class="textbox-n" type="text" onfocus="(this.type='date');this.showPicker()"
                                        onblur="(this.type='text')" placeholder="تاريخ الحجز : *"
                                        value="{{ old('date') }}" name="date" id="date" required />
                                </div>
                            </div>

                            <!----- time ----->
                            <div class="mt-3 datepicker-box">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-clock"></i>
                                    <input class="textbox-n" type="text" onfocus="(this.type='time');this.showPicker()"
                                        onblur="(this.type='text')" placeholder="وقت الحجز : *" value="{{ old('time') }}"
                                        name="time" id="time" required />
                                </div>
                            </div>


                            <!----- Submit Btn ----->
                            <button type="submit" class="theme-btn-one blue-opcity mt-3 w-100">احجز الان</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
