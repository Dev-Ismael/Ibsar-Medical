@extends('layouts.app')

@section('content')

    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(front/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <div class="title">
                        <h1>الطاقم الطبي</h1>
                    </div>
                    <p>لدينا أطباء ذو كفاءة عالية في خدمتك</p>
                </div>
            </div>
        </div>
    </section>


    <!-- team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="row clearfix">

                @foreach ( $members as $member )
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                            >
                            <div class="inner-box text-center">
                                <figure class="image-box">
                                    <img src="{{ asset('images/members/'. $member->img) }}" alt="">
                                </figure>
                                <div class="lower-content">
                                    <h4>{{ $member->name }}</h4>
                                    <span class="designation">{{ $member->job_title }}</span>
                                </div>
                                <div class="social-icons">
                                    <ul class="social-style-one clearfix">
                                        <li><a href="{{ $member->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
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

@endsection
