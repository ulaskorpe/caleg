@extends('layouts.master')
@section('title', __('Login'))
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
                        <form action="{{ route('user.login.post') }}" method="POST" id="szform">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">{{ __('Login') }}</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>{{ __('Email Address') }}*</label>
                                        <input type="email" name="email" placeholder="{{ __('Email Address') }}"
                                            required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>{{ __('Password') }}</label>
                                        <input type="password" name="password" placeholder="{{ __('Password') }}"
                                            id="userPassword" required>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">{{ __('Remember me') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-1 mt-md-0">
                                        <div class="forgotton-password_info">
                                            <a href="{{route('user.forget.password')}}"> {{ __('Forgotten pasward') }}?</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pt-5">
                                        <button class="btn btn-custom-size lg-size btn-primary">{{ __('Login') }}</button>
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

