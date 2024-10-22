@extends('admin.layouts.master')
@section('title', __('Email SMTP'))
@section('content')
    <div class="main-wrapper">
        @include('admin.partials.sidebar')

        <div class="page-wrapper">

            @include('admin.partials.topbar')

            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">{{__('Email Settings')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('SMTP Information')}}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{__('Site SMTP Settings')}}</h6>
                                <div class="row mb-3 mt-5 justify-content-center">
                                    <div class="col-md-10 stretch-card">
                                        <div class="card">
                                            <div class="card-body border" style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                                <form class="forms-sample" action="{{route('admin.updateSMTP')}}" method="POST" id="szform">
                                                    @csrf
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="smtp_host" class="col-sm-2 col-form-label">{{__('Host')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="smtp_host" class="form-control" id="smtp_host" placeholder="mailpit.mail.net" value="{{$data['Mail_Settings']->smtp['smtp_host']}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="smtp_port" class="col-sm-2 col-form-label">{{__('Port')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="smtp_port" class="form-control" id="smtp_port" placeholder="587" value="{{$data['Mail_Settings']->smtp['smtp_port']}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="smtp_username" class="col-sm-2 col-form-label">{{__('Username')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="smtp_username" class="form-control" id="smtp_username" placeholder="E-Mail Username" value="{{$data['Mail_Settings']->smtp['smtp_username']}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="smtp_username" class="col-sm-2 col-form-label">{{__('Password')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="smtp_password" class="form-control" id="smtp_password" placeholder="E-Mail Password" value="{{$data['Mail_Settings']->smtp['smtp_password']}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="smtp_encryption" class="col-sm-2 col-form-label">{{__('Encryption')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="smtp_encryption" class="form-control" id="smtp_encryption" placeholder="TLS / SSL" value="{{$data['Mail_Settings']->smtp['smtp_encryption']}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="smtp_from_email" class="col-sm-2 col-form-label">{{__('Mail From Email')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="email" name="smtp_from_email" class="form-control" id="smtp_from_email" placeholder="From Email Address" value="{{$data['Mail_Settings']->smtp['smtp_from_email']}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="smtp_from_name" class="col-sm-2 col-form-label">{{__('Mail From Username')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="smtp_from_name" class="form-control" id="smtp_from_name" placeholder="From Username Address" value="{{$data['Mail_Settings']->smtp['smtp_from_name']}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-5">
                                                        <button class="btn btn-outline-primary submit" type="submit">{{__('Update SMTP Settings')}}</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
