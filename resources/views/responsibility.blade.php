@extends('layouts.app')

@section('content')

    <section class="event-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="event-details-content">
                        <div class="content-one">
                            <figure class="image"><img src="{{ asset('images/responsibilities/'.$responsibility->img) }}"  alt="responsibility-img" class="img-fluid"></figure>
                            <div class="text">
                                <h3>{{ $responsibility->title }}</h3>
                                <p>
                                    {!! $responsibility->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
