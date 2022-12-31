@extends('layouts.app')

@section('content')


    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(front/images/background/testimonial-1.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <div class="title">
                        <h1>المكتبة الطبية</h1>
                    </div>
                    <p> أحدث المقالات والتقنيات الطبية المتخصصة بالعيون </p>
                </div>
            </div>
        </div>
    </section>



    <section class="sidebar-page-container sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">

                    <!----------------- If No Articles ------------------>
                    @if ($articles->isEmpty())

                        @if( preg_match('(search)', url()->current()) == 1 )  <!---- in search Page ---->
                            <h4 class="title"> <i class="fa-solid fa-magnifying-glass" style="color:#0d3050"></i> 0 نتائج البحث  "{{ Request::input('search') }}" </h4>
                        @else
                            <h4>  لا توجد مقالات! </h4>
                        @endif

                    <!----------------- If Exist Articles ------------------>
                    @else

                        <div class="blog-grid-content">
                            <div class="row clearfix">
                                @foreach ( $articles as $article )
                                    <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                        <div class="news-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                                    <img src="{{ asset("images/articles/".$article->img) }}" alt="">
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="shape" style="background-image: url(front/images/shape/shape-13.png);"></div>
                                                    <div class="post-date"><h3>14<span>MAR</span></h3></div>
                                                    <h4><a href="blog-details.html">{{ $article->title }}</a></h4>
                                                    <div class="post-info">
                                                        <p>بواسطه <a href="{{ route('article', $article->slug) }}" > {{ $article->author }} </p>
                                                    </div>
                                                    <p> {{ $article->summary }} </p>
                                                    <div class="btn-box"><a href="blog-details.html" class="theme-btn-two">قراءة المزيد</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    {{ $articles->links('pagination::bootstrap-4') }}
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget search-widget">
                            <div class="widget-title">
                                <h3>البحث</h3>
                            </div>
                            <form action="{{ route("blog.search") }}" method="post" class="search-form">
                                @csrf
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="ابحث هنا..."  autocomplete="nope" minlength="8" required/>
                                    <button type="submit"><i class="icon-1"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>الاقسام</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach ( $categories as $category )
                                        <li><a href="#"> {{ $category->title }} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
