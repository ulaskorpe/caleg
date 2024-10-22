@extends('admin.layouts.master')
@section('title', __('New Category'))
@section('styles')
    <style>
        .tox-promotion, .tox-statusbar__branding{
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
                    <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">{{__('Categories')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('New Category')}}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">{{__('Create New Category')}}</h6>
                            <form class="forms-sample" action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data" id="szform">
                                @csrf

                                <div class="row mb-3 mt-5 border justify-content-center" style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                    <div class="col-md-10">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">{{__('Category Name')}}*</label>
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="name" placeholder="{{__('Enter Category Name')}}" autofocus required/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">{{__('Slug')}}*</label>
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="slug" placeholder="{{__('Category Slug')}}" value="category-{{Str::random(3).substr(time(), 6,8).Str::random(3)}}" autofocus required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12 mt-3">
                                                        <label class="form-label">{{__('Brief')}}*</label>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="brief" placeholder="{{__('Write a brief about the new category to display on category box shadow')}}" autofocus required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12 mt-5">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label class="form-label row">&nbsp;&nbsp;{{__('Banner')}}*</label>
                                                                <input type="file" name="banner" style="cursor: pointer !important;" required/>
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label">{{__('Sizes')}}*</label>
                                                                <select class="js-example-basic-multiple form-select" name="sizes[]" multiple="multiple" data-width="100%" required>
                                                                    @foreach ($sizes as $size)
                                                                        <option value="{{$size['id']}}">{{$size['name']}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                  
                                                <div class="row mb-3">
                                                    <div class="col-md-12 mt-3">
                                                        <label class="form-label">{{__('Meta Tags')}}</label>
                                                        <div class="row">
                                                            <div class="col-12" style="height: 100% !important">
                                                                <div>
                                                                    <input name="meta_tag" id="tags" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12 mt-3">
                                                        <label class="form-label">{{__('Meta Description')}}</label>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <textarea class="form-control" name="meta_description" id="tinymceExample" rows="10"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-primary submit" type="submit">{{__('Create New Category')}}</button>
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
    
	<script src="{{asset('assets/admin/vendors/tinymce/tinymce.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/select2/select2.min.js')}}"></script>

	<script src="{{asset('assets/admin/js/tinymce.js')}}"></script>
	<script src="{{asset('assets/admin/js/tags-input.js')}}"></script>
	<script src="{{asset('assets/admin/js/select2.js')}}"></script>
@endsection