@extends('admin.layouts.master')
@section('title', __('New Size'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <style>
        .tox-promotion,
        .tox-statusbar__branding {
            display: none !important;
        }
    </style>
@endsection
@section('content')
    <div class="main-wrapper">
        @include('admin.partials.sidebar')

        <div class="page-wrapper">

            @include('admin.partials.topbar')

            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.sizes.index') }}">{{ __('Sizes') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('New Size') }}</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Create New Size') }}</h6>
                                <form class="forms-sample" action="{{ route('admin.sizes.store') }}" method="POST"
                                    enctype="multipart/form-data" id="szform">
                                    @csrf

                                    <div class="row mb-3 mt-5 border justify-content-center"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Size Name') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                                        name="size"
                                                                        placeholder="{{ __('Enter Size Name') }}" autofocus
                                                                        required />
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Size Price') }} (₺)*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <input type="number"
                                                                        class="form-control mb-4 mb-md-0 col-6"
                                                                        name="price"
                                                                        placeholder="{{ __('Enter Size Price (1, 1.4, etc.)') }}"
                                                                        autofocus required />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-outline-primary submit"
                                                type="submit">{{ __('Create New Size') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')

    <script src="{{ asset('assets/admin/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tags-input.js') }}"></script>
@endsection
