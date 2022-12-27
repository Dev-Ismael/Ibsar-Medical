@extends('layouts.app')

@section('content')
    <div id="login-page">
        <div class="auto-container">
            <div class="inner-box">
                <h2 class="text-center"> تسجيل الدخول </h1>
                <div class="row">
                    <div class="col-md-6 pull-md-3">
                        <form action="{{ route("login") }}" method="POST" class="text-right login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"> البريد الاليكتروني </label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="ادخل بريدك الاليكتروني..." autocomplete="nope" required/>
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong> البيانات التي ادخلتها لا تطابق سجلاتنا </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"> كلمة المرور </label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="ادخل كلمة المرور" autocomplete="new-password" required/>
                            </div>
                            <button type="submit" class="theme-btn-one">
                                ادخال
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
