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








    <!----- Offer Form ----->
    <div class="form-offer-container mb-5">
        <div class="auto-container">
            <button class="theme-btn-one offer-form-btn main">
                <i class="fa-solid fa-calendar"></i>
                &nbsp;
                احجز معنا
            </button>
            <div id="offer-form" class="d-none">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8 text-right">
                                احجز الان
                            </div>
                            <div class="col-4 text-left">
                                <button class="offer-form-btn">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="messege text-center">
                            اهلا بك انا المساعد الذكي لمساعدتك فالحجز
                        </div>
                        <div class="messege blue text-center">
                            <div class="rtl row align-items-center h-100">
                                <div class="col-6">
                                    مواعيد العمل :
                                </div>
                                <div class="col-6">
                                    <p> 9AM - 10AM </p>
                                    <p> السبت - الخميس </p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('store_appointment') }}" method="POST" class="offer-form">

                            <h5 class="mb-2"> الرجاء ادخال التالي: </h5>

                            @csrf

                            <!------- username -------->
                            <div class="input__box mb-2">
                                <i class="input__icon fa-solid fa-circle-user"></i>
                                <input type="text" class="w-100" placeholder="الاسم : *" name="username"
                                    autocomplete="nope" value="{{ old('username') }}" minlength="8" maxlength="100"
                                    required />
                            </div>

                            <!----- phone ----->
                            <div class="input__box mb-2">
                                <i class="input__icon fa-solid fa-phone"></i>
                                <input type="text" class="w-100" placeholder="رقم الجوال : *" name="phone"
                                    autocomplete="nope" value="{{ old('phone') }}" minlength="8" maxlength="100"
                                    required />
                            </div>

                            <!----- member ----->
                            <div class="input__box mb-2">
                                <select name="member_id" id="member" required>
                                    <option value="" disabled selected hidden>الحجز مع : *</option>
                                    @foreach ($all_members as $member)
                                        <option value="{{ $member->id }}"
                                            {{ old('member') == $member->id ? 'selected' : '' }}>
                                            {{ $member->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <!----- date ----->
                            <div class="mt-3 datepicker-box">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-calendar"></i>
                                    <input class="textbox-n" type="text" onfocus="(this.type='date');this.showPicker()"
                                        onblur="(this.type='text')" placeholder="تاريخ الحجز : *"
                                        value="{{ old('date') }}" name="date" id="date" required />
                                </div>
                            </div>

                            <!----- time ----->
                            <div class="mt-3 datepicker-box">
                                <div class="input__box">
                                    <i class="input__icon fa-solid fa-clock"></i>
                                    <input class="textbox-n" type="text" onfocus="(this.type='time');this.showPicker()"
                                        onblur="(this.type='text')" placeholder="وقت الحجز : *" value="{{ old('time') }}"
                                        name="time" id="time" required />
                                </div>
                            </div>


                            <!----- Submit Btn ----->
                            <button type="submit" class="theme-btn-one blue-opcity mt-3 w-100">احجز الان</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
