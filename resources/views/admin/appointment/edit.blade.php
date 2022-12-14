@extends('layouts.admin')

@section('content')
    <div class="py-4 admin-page-info">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item " style="margin-top: -1px">
                    <a href="{{ route('home') }}">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.appointment.index') }}">Appointments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12 col-xl-7 col-xxl-8 mb-4">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card border-0 shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h2 class="fs-5 fw-bold mb-0"> <i class="fa-solid fa-pen-to-square text-primary"></i> Edit
                                            Appointment</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <form action="{{ route('admin.appointment.update' , $appointment->id) }}" class="edit-form" method="POST" enctype="multipart/form-data">

                                        @csrf

                                        @method('PUT')


                                        <!----------------- username -------------------->
                                        <div class="mb-4 input-content">
                                            <label for="username" class="capitalize"> <i class="fa-solid fa-file-signature"></i> Username </label>
                                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ $appointment->username }}" aria-describedby="emailHelp" placeholder="Type Uername..." autocomplete="nope" />
                                            @error('username')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <!----------------- phone -------------------->
                                        <div class="mb-4 input-content">
                                            <label for="phone" class="capitalize"> <i class="fa-solid fa-phone"></i> Phone </label>
                                            <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $appointment->phone }}" aria-describedby="emailHelp" placeholder="Type phone number..." autocomplete="nope" />
                                            @error('phone')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <!----------------- member_id -------------------->
                                        <div class="mb-4 input-content">
                                            <label for="member_id" class="capitalize"> <i class=" fa-solid fa-circle-user"></i> Doctor </label>
                                            <select class="form-select form-control @error('member_id') is-invalid @enderror" name="member_id" id="member_id"  aria-label="Default select example" >
                                                <option></option>
                                                @foreach ( $members as $member )
                                                    <option value="{{ $member->id }}"  {{ $appointment->member_id == $member->id ? "selected" : "" }} >{{ $member->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('member_id')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <!----------------- date -------------------->
                                        <div class="mb-4 input-content">
                                            <label for="date" class="capitalize"> <i class="fa-solid fa-calendar"></i> Date </label>
                                            <input class="form-control @error('date') is-invalid @enderror" type="text" onfocus="(this.type='date');this.showPicker()" onblur="(this.type='text')"  placeholder="Choose Appointment Date" value="{{ $appointment->date }}" name="date" id="date"  />
                                            @error('date')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <!----------------- time -------------------->
                                        <div class="mb-4 input-content">
                                            <label for="time" class="capitalize"> <i class="fa-solid fa-clock"></i> Time </label>
                                            <input class="form-control @error('time') is-invalid @enderror" type="text" onfocus="(this.type='time');this.showPicker()" onblur="(this.type='text')"  placeholder="Choose Appointment Time" value="{{ $appointment->time }}" name="time" id="time"  />
                                            @error('time')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                        <button type="submit" class="btn btn-primary float-right" > <i class="fa-solid fa-floppy-disk"></i> Save </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
