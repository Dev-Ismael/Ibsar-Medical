@extends('layouts.app')

@section('content')



    <!-- Page Title -->
    <section class="page-title centred my-5" style="background-image: url(front/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="shape" style="background-image: url(front/images/shape/shape-63.png);"></div>
                <div class="title">
                    <h1>About Laborex</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>About Laborex</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->



    <!-- research-style-two -->
    <section class="research-style-two centred bg-color-1">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(front/images/shape/shape-65.png);"></div>
            <div class="pattern-2" style="background-image: url(front/images/shape/shape-66.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>Research Topic</h6>
                <h2>Medical, Medicine and Health <br />Science Topic</h2>
            </div>
            <div class="inner-content">
                <div class="shape" style="background-image: url(front/images/shape/shape-64.png);"></div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 research-block">
                        <div class="research-block-two wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset("front/images/resource/research-1.png") }}" alt="">
                                    <h5>01</h5>
                                </figure>
                                <div class="text">
                                    <h4>Contact To <br />Test</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 research-block">
                        <div class="research-block-two wow fadeInUp animated" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset("front/images/resource/research-2.png") }}" alt="">
                                    <h5>02</h5>
                                </figure>
                                <div class="text">
                                    <h4>Lab Generates <br />Proposal</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 research-block">
                        <div class="research-block-two wow fadeInUp animated" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset("front/images/resource/research-3.png") }}" alt="">
                                    <h5>03</h5>
                                </figure>
                                <div class="text">
                                    <h4>Get Clean & <br />Fresh</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 research-block">
                        <div class="research-block-two wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset("front/images/resource/research-4.png") }}" alt="">
                                    <h5>04</h5>
                                </figure>
                                <div class="text">
                                    <h4>Enjoy Our <br />Service</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- research-style-two end -->



    <!-- funfact-style-two -->
    <section class="funfact-style-two" style="background-image: url(front/images/background/funfact-1.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-42"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="320">0</span><span>+</span>
                            </div>
                            <h5>Permanent Staff</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-43"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="10">0</span><span>k+</span>
                            </div>
                            <h5>Test Completed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-44"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="320">0</span><span>+</span>
                            </div>
                            <h5>Wining Awards</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-45"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="10">0</span><span>k+</span>
                            </div>
                            <h5>Years Of Exps.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-style-two end -->

    

@endsection
