@extends('admin.layouts.master')
@section('title', __('Favicon Settings'))
@section('content')
    <div class="main-wrapper">
        @include('admin.partials.sidebar')

        <div class="page-wrapper">

            @include('admin.partials.topbar')

            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">{{ __('Front Settings') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Favicon') }}</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Favicon') }}</h6>
                                <form class="forms-sample" action="{{ route('admin.updatefavicon') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3 mt-5 border justify-content-center"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-6 stretch-card text-center">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img src="{{  $data['Front_Settings']->favicon ? asset('assets/img/' .  $data['Front_Settings']->favicon) : asset('assets/defualt_favicon.png') }}"
                                                        alt="favicon" style="width: 100%; background: gray !important;">
                                                    <input class="mt-5" type="file" name="favicon" accept="image/*"
                                                        style="cursor: pointer !important;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-primary"
                                            type="submit">{{ __('Update Site Favicon') }}</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.partials.footer')

        </div>
    </div>
@endsection
