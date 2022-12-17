@extends('layouts.app')

@section('content')

    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(front/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <div class="title">
                        <h1>خدماتنا</h1>
                    </div>
                    <p>نلتزم بالعمل بامتياز لتقديم خدماتنا للمرضى على أعلى معايير
                        الجودة و السلامة</p>
                </div>
            </div>
        </div>
    </section>

    <!-- services-section -->
    <section class="service-custom-section section-padding">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="{{ asset('images/services/' . $service->icon) }}" width="120"
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
        </div>
    </section>


@endsection
