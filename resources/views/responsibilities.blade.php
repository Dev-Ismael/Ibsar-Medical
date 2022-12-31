@extends('layouts.app')

@section('content')

    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(front/images/background/testimonial-1.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <div class="title">
                        <h1>المسؤولية الاجتماعية</h1>
                    </div>
                    <p>نلتزم بالعمل بامتياز لتقديم خدماتنا للمرضى على أعلى مع
                        نسعى دائماً أنّ نضع بصمة ذو تأثير إيجابي على مجتمعنا ، ومن هذا المنطلق تقوم شركة الإبصار الطبية بالمشاركة في العديد من الأنشطة الاجتماعية لنضع بصمتنا المتفردة في كل مكان.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- responsibilities-section -->
    <section class="responsibility-custom-section section-padding">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($responsibilities as $responsibility)
                    <div class="col-lg-4 col-md-6 col-sm-12 responsibility-block mt-5">
                        <div class="responsibility-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <img src="{{ asset('images/responsibilities/' . $responsibility->img) }}" height="320" class="rounded"
                                        alt="responsibility-img">
                                </div>
                                <h4 class="mt-2"><a href="{{ route('responsibility.show', $responsibility->slug) }}"> {{ $responsibility->title }} </a></h4>
                                <p> {{ $responsibility->summary }} </p>
                                <div class="btn-box mt-5"><a href="{{ route('responsibility.show', $responsibility->slug) }}"
                                        class="theme-btn-one">المزيد</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
