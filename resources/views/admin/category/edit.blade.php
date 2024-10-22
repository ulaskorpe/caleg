@extends('admin.layouts.master')
@section('title', __('Edit Category'))
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
                    <li class="breadcrumb-item active" aria-current="page">{{__('Edit Category')}}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">{{__('Edit Category')}}</h6>
                            <form class="forms-sample" action="{{route('admin.category.update',$category->slug)}}" method="POST" enctype="multipart/form-data" id="szformupdate">
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
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="name" placeholder="{{__('Enter Category Name')}}" value="{{$category->name}}" autofocus required/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">{{__('Slug')}}*</label>
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="slug" placeholder="{{__('Category Slug')}}" value="{{$category->slug}}" autofocus required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12 mt-3">
                                                        <label class="form-label">{{__('Brief')}}*</label>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="brief" placeholder="{{__('Write a brief about the new category to display on category box shadow')}}" value="{{$category->brief}}" autofocus required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12 mt-5">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label class="form-label row">&nbsp;&nbsp;{{__('Banner')}}*</label>
                                                                <li><img src="{{asset('assets/images/categories/'.$category->banner)}}" alt="banner image" id="banner_view"></li>
                                                                <input type="file" name="banner" style="cursor: pointer !important;"/>
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label">{{__('Sizes')}}*</label>
                                                                <select class="js-example-basic-multiple form-select" name="sizes[]" multiple="multiple" data-width="100%" required>
                                                                    @foreach ($sizes as $size)
                                                                        <option value="{{$size['id']}}" {{in_array($size['id'], $sizes_array) ? 'selected' : ''}}>
                                                                            {{$size['name']}}
                                                                        </option>
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
                                                                    <input name="meta_tag" id="tags" value="{{$category->meta_tag}}"/>
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
                                                                <textarea class="form-control" name="meta_description" id="tinymceExample" rows="10">
                                                                    {{ $category->meta_description }}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-primary submit" type="submit">{{__('Edit Category')}}</button>
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

    <script>

        $(document).on('submit','#szformupdate',function(e){
            e.preventDefault();
            $('.loader').show();

            var szform = $(this);
            $('button.submit').prop('disabled',true);
            $.ajax({
            method:"POST",
            url:$(this).prop('action'),
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){

                $('.loader').hide();
                $('button.submit').prop('disabled',false);

                $(window).scrollTop(0);

                if(!data.status){
                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 7000,
                        timerProgressBar: true,
                        }).fire({
                        icon: 'error',
                        title: data.message
                    });

                }else if(data.status == 404){
                    location.replace(data.location)
                }else{

                    let banner_path = "{{config('app.url')}}/assets/images/categories/"+data.banner;
                    $('#banner_view').replaceWith('<img src="'+banner_path+'" alt="banner image" id="banner_view">');

                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 7000,
                        timerProgressBar: true,
                    }).fire({
                        icon: 'success',
                        title: data.message
                    });
                }



            },
            error: function(data) {
                $('.loader').hide();
                $('button.submit').prop('disabled',false);

                $(window).scrollTop(0);

                if(!data.status){
                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 7000,
                        timerProgressBar: true,
                        }).fire({
                        icon: 'error',
                        title: data.message
                    });
                }else{
                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 7000,
                        timerProgressBar: true,
                    }).fire({
                        icon: 'error',
                        title: 'Somthing Went Wrong'
                    });
                }
            }
            });

        });
    </script>

	<script src="{{asset('assets/admin/vendors/tinymce/tinymce.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendors/select2/select2.min.js')}}"></script>

	<script src="{{asset('assets/admin/js/tinymce.js')}}"></script>
	<script src="{{asset('assets/admin/js/tags-input.js')}}"></script>
	<script src="{{asset('assets/admin/js/select2.js')}}"></script>
@endsection
