@extends('admin.layouts.master')
@section('title', __('General Settings'))
@section('content')
    <div class="main-wrapper">
        @include('admin.partials.sidebar')

        <div class="page-wrapper">

            @include('admin.partials.topbar')

            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">{{ __('Web Settings') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('General Information') }}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Site General Settings') }}</h6>
                                <div class="row mb-3 mt-5 justify-content-center">
                                    <div class="col-md-10 stretch-card">
                                        <div class="card">
                                            <div class="card-body border"
                                                style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                                <form class="forms-sample"
                                                    action="{{ route('admin.updateGeneralSettings') }}" method="POST"
                                                    id="szform">
                                                    @csrf
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="site_name"
                                                            class="col-sm-2 col-form-label">{{ __('Site Name') }}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="site_name" class="form-control"
                                                                id="site_name" value="{{ $data['General_Settings']->site_name }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label for="site_link"
                                                            class="col-sm-2 col-form-label">{{ __('Site Link') }}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="site_link" class="form-control"
                                                                id="site_link" value="{{ $data['General_Settings']->site_link }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label class="col-sm-2 col-form-label"
                                                            for="site_https">{{ __('Site Https') }}</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-check form-switch mt-2">
                                                                <input type="checkbox" style="cursor: pointer"
                                                                    name="site_https" class="form-check-input"
                                                                    id="site_https"
                                                                    {{ $data['General_Settings']->site_https ? 'checked' : '' }}>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label class="col-sm-2 col-form-label"
                                                            for="email">{{ __('Site Email') }}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="email" class="form-control"
                                                                id="email" value="{{$data['General_Settings']->email }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label class="col-sm-2 col-form-label"
                                                            for="phone">{{ __('Site Phone') }}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="phone" class="form-control"
                                                                id="phone" value="{{ $data['General_Settings']->phone }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label class="col-sm-2 col-form-label"
                                                            for="phone">{{ __('Shipping Price') }}</label>
                                                        <div class="col-sm-3">
                                                            <input type="number" name="shipping_price" class="form-control"
                                                                id="shipping_price"
                                                                value="{{ $data['General_Settings']->shipping_price }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 justify-content-center">
                                                        <label class="col-sm-2 col-form-label"
                                                            for="phone">{{ __('Address') }}</label>
                                                        <div class="col-sm-3">
                                                            <textarea name="address" class="form-control" id="address" required>{{ $data['General_Settings']->address }}</textarea>
                                                        </div>
                                                    </div>

                                                    {{--  <div class="row mb-3 justify-content-center">
                                                        <label class="col-sm-2 col-form-label" for="google_location">{{__('Site Google Location')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="google_location" class="form-control" id="google_location" value="{{$generalset->google_location}}" required>
                                                        </div>
                                                    </div>  --}}
                                                    {{--  <div class="row mb-3 justify-content-center">
                                                        <label class="col-sm-2 col-form-label" for="contact_email">{{__('Site C')}}</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="contact_email" class="form-control" id="contact_email" value="{{$generalset->contact_email}}" required>
                                                        </div>
                                                    </div>  --}}
                                                    <div class="text-center mt-5">
                                                        <button class="btn btn-outline-primary submit"
                                                            type="submit">{{ __('Update General Settings') }}</button>
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
