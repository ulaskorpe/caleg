@extends('layouts.master')
@section('title', __('Reset Password'))
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
                        <form action="{{ route('user.forget.password.reset.post') }}" method="POST" id="szform">
                            @csrf
                            <input type="hidden" name="serial" value="{{ $serial }}">
                            <div class="login-form">
                                <h4 class="login-title">{{ __('Reset Account Password') }}</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>{{__('Password')}}*</label>
                                        <input name="password" type="password" placeholder="{{__('Password')}}" required autofocus>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{__('Confirm Password')}}*</label>
                                        <input name="password_confirmation" type="password" placeholder="{{__('Confirm Password')}}" required autofocus>
                                    </div>
                                    <div class="col-lg-12 pt-5 text-center">
                                        <button class="btn btn-custom-size lg-size btn-primary">{{ __('Reset') }}</button>
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