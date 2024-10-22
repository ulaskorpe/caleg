@extends('admin.layouts.master')
@section('title', __('Edit Page'))
@section('styles')
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
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.pages.index') }}">
                                {{ __('Pages') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Page') }}</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Edit Page') }}</h6>
                                <form class="forms-sample" action="{{ route('admin.page.update') }}"
                                    method="POST" enctype="multipart/form-data" id="szform">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$page->slug}}">
                                    <div class="row mb-3 mt-5 border justify-content-center"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Name') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                                        name="name"
                                                                        placeholder="{{ __('Enter Page Name') }}" 
                                                                        value="{{$page->name}}"
                                                                        autofocus
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Slug') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                                        name="slug"
                                                                        placeholder="{{ __('Enter Page Slug') }}"
                                                                        value="{{$page->slug}}"
                                                                        autofocus
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-3">
                                                            <label class="form-label">{{ __('Banner') }}*</label>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <img src="{{asset('assets/images/pages/banners/'.$page->banner)}}" class="card-img-top" alt="...">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                </div>
                                                                <div class="col-7">
                                                                    <input class="mt-5" type="file" name="banner" accept="image/*" style="cursor: pointer !important;"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-3">
                                                            <label class="form-label">{{ __('Content') }}*</label>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <textarea class="form-control" name="content" rows="2" id="tinymceExample">{{$page->content}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-outline-primary submit"
                                                type="submit">{{ __('Update Page') }}</button>
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
    <script src="{{ asset('assets/admin/vendors/select2/select2.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.js') }}"></script>
@endsection
