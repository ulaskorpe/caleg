
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link   active  " id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Product Info</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" onclick="show_data('/admin/products/comments/'+0+'/{{$product['id']}}','comment_list')" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Product Comments</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" onclick="get_location(0,0)"  id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false">Product Locatdddions</a>
      </li>
  </ul>
  <div class="tab-content pt-5" id="tab-content">
    <div class="tab-pane active " id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">



            @include("admin.products.product_update")
    </div>
    <div class="tab-pane " id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
        <div id="comment_list"></div>
    </div>
    <div class="tab-pane " id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
        <div id="product_locations"></div>
    </div>
  </div>




















<div class="row mb-3"  >

    <div class="col-md-3 align-items-center justify-content-center">
        <label class="form-label">{{ __('Konum') }}  {{$selected_location}} </label>
        <select name="location" id="location" class="form-control" onchange="get_location(this.value)">
            <option value="none">Seçiniz</option>
            @foreach ($locations as  $value)
            <option valıue="{{$value}}" @if($selected_location==$value) selected @endif >  {{$value}}</option>
        @endforeach
        </select>



    </div>
    <div class="col-md-3 align-items-center justify-content-center">
        <label class="form-label">{{ __('Sıra') }}  </label>
        <select name="order" id="order" class="form-control" @if($count == 0) disabled @endif>

            @for( $i = $count ; $i>0;$i--)
            <option value="{{$i}}" @if($order==$i) selected @endif>{{$i}}</option>

            @endfor
        </select>



    </div>
</div>






@extends('admin.layouts.master')
@section('title', __('Edit Product'))
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">{{ __('Products') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Product') }}</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Edit Product') }}</h6>
                                <form class="forms-sample" action="{{ route('admin.product.update', $product->slug) }}"
                                    method="POST" enctype="multipart/form-data" id="szformupdate">
                                    @csrf
                                    <div class="row mb-3 mt-5 border justify-content-center"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Product Name') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                                        name="name"
                                                                        placeholder="{{ __('Enter Product Name') }}"
                                                                        value="{{ $product->name }}" autofocus required />
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Slug') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                                        name="slug"
                                                                        placeholder="{{ __('Product Slug') }}"
                                                                        value="{{ $product->slug }}" autofocus required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Title') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                                        name="title"
                                                                        placeholder="{{ __('Enter Product Title') }}"
                                                                        value="{{ $product->title }}" autofocus required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--
                                                            <div class="col-md-6 mt-3">
                                                                <label class="form-label">{{ __('Price') }}*</label>
                                                                <div class="row">
                                                                    <div class="col-10" style="height: 100% !important">
                                                                        <div>
                                                                            <input name="price"
                                                                                class="form-control mb-4 mb-md-0 col-6"
                                                                                placeholder="{{ __('Enter Product Price') }}"
                                                                                value="{{ $product->price }}" autofocus/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            -->
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-5">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label
                                                                        class="form-label row">&nbsp;&nbsp;{{ __('Thumbnail') }}*</label>
                                                                    <li><img src="{{ asset('assets/images/products/' . $product->thumbnail) }}"
                                                                            alt="{{ $product->thumbnail }}"
                                                                            id="banner_view"></li>
                                                                    <input type="file" name="thumbnail" class="mt-2"
                                                                        style="cursor: pointer !important;" />
                                                                </div>
                                                                <div class="col-12">
                                                                    <label
                                                                        class="form-label row mt-3">&nbsp;&nbsp;{{ __('Photo') }}*</label>
                                                                    <li>
                                                                        <img src="{{ asset('assets/images/products/' . $product->photo) }}"
                                                                            alt="{{ $product->photo }}" id="banner_view">
                                                                    </li>
                                                                    <input type="file" name="photo" class="mt-2"
                                                                        style="cursor: pointer !important;" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-3">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label class="form-label">{{ __('Types') }}*</label>
                                                                    <select class="js-example-basic-multiple form-select"
                                                                        name="type_id[]" multiple="multiple"
                                                                        data-width="100%" required>
                                                                        @foreach ($type_id as $type)
                                                                            <option value="{{ $type['id'] }}"
                                                                                {{ in_array($type['id'], json_decode($product->type_id)) ? 'selected' : '' }}>
                                                                                {{ $type['name'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label
                                                                        class="form-label">{{ __('Categories') }}*</label>
                                                                    <select class="js-example-basic-multiple form-select"
                                                                        name="category_id[]" multiple="multiple"
                                                                        data-width="100%" required>
                                                                        @foreach ($category_id as $category)
                                                                            <option value="{{ $category['id'] }}"
                                                                                {{ in_array($category['id'], json_decode($product->category_id)) ? 'selected' : '' }}>
                                                                                {{ $category['name'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-3">
                                                            <label class="form-label">{{ __('Description') }}</label>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <textarea class="form-control" name="description" id="tinymceExample" rows="10">
                                                                    {{ $product->description }}
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-outline-primary submit"
                                                type="submit">{{ __('Edit Product') }}</button>
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
        $(document).on('submit', '#szformupdate', function(e) {

            e.preventDefault();
            $('.loader').show();

            var szform = $(this);
            $('button.submit').prop('disabled', true);
            $.ajax({
                method: "POST",
                url: $(this).prop('action'),
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {

                    $('.loader').hide();
                    $('button.submit').prop('disabled', false);

                    $(window).scrollTop(0);

                    if (!data.status) {
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

                    } else if (data.status == 404) {
                        location.replace(data.location)
                    } else {

                        let banner_path = "{{ config('app.url') }}/assets/images/products/" + data
                            .banner;
                        $('#banner_view').replaceWith('<img src="' + banner_path +
                            '" alt="banner image" id="banner_view">');

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
                    $('button.submit').prop('disabled', false);

                    $(window).scrollTop(0);

                    if (!data.status) {
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
                    } else {
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

    <script src="{{ asset('assets/admin/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/select2/select2.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.js') }}"></script>
@endsection
