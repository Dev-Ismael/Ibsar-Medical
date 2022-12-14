@extends('layouts.app')

@section('content')
    <div id="submission-page">

        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h1> <i class="fa-solid fa-circle-check"></i> </h1>
                    <h2> {{ $messege }} </h2>
                    <a href="{{ route($link) }}" class="theme-btn-one">الذهاب للرئيسية</a>
                </div>
            </div>
        </section>

    </div>
@endsection
