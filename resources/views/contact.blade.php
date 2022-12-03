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


@endsection
