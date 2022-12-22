@extends('layouts.app')

@section('content')

    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(front/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <div class="title">
                        <h1>العروض</h1>
                    </div>
                    <p>نلتزم بالعمل بامتياز لتقديم خدماتنا للمرضى على أعلى معايير
                        الجودة و السلامة</p>
                </div>
            </div>
        </div>
    </section>

    <!-- offers-section -->
    <section class="service-custom-section section-padding">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($offers as $offer)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="{{ asset('images/offers/' . $offer->icon) }}" width="120"
                                        alt="offer-icon">
                                </div>
                                <h4><a href="{{ route('offer.show', $offer->slug) }}"> {{ $offer->title }} </a></h4>
                                <p> {{ $offer->summary }} </p>
                                <div class="btn-box mt-5"><a href="{{ route('offer.show', $offer->slug) }}"
                                        class="theme-btn-one">المزيد</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
