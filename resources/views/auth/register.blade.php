@extends('layouts.master')
@section('title', __('Register'))
@section('styles')
    <style>
        .swal2-popup {
            margin-top: 10% !important;
        }
    </style>
@endsection
@section('content')
    <main class="main-content">
        <div class="login-register-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <form action="{{ route('user.register.post') }}" method="POST" id="szform">
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">{{__('Register')}}</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <label>{{__('First Name')}}</label>
                                            <input name="first_name" type="text" placeholder="{{__('First Name')}}" required autofocus>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label>{{__('Last Name')}}</label>
                                            <input name="last_name" type="text" placeholder="{{__('Last Name')}}" required autofocus>
                                        </div>
                                        <div class="col-md-12">
                                            <label>{{__('Email Address')}}*</label>
                                            <input name="email" type="email" placeholder="{{__('Email Address')}}" required autofocus>
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{__('Password')}}</label>
                                            <input name="password" type="password" placeholder="{{__('Password')}}" required autofocus>
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{__('Confirm Password')}}</label>
                                            <input name="password_confirmation" type="password" placeholder="{{__('Confirm Password')}}" required autofocus>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">{{__('Register')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
