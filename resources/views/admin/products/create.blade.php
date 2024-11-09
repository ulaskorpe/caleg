@extends('admin.layouts.master')
@section('title', __('New Product'))
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
                        <li class="breadcrumb-item active" aria-current="page">{{ __('New Product') }}</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Create New Product') }} </h6>

                                @if($submit_form)
                                <form class="forms-sample" action="{{ route('admin.products.store') }}" id="product-form-submit" method="POST"
                                    enctype="multipart/form-data" >

                                    @else
                                    <form class="forms-sample" action="#" id="product-form" method="POST" onsubmit="return false"
                                    enctype="multipart/form-data" >
                                    @endif


                                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

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
                                                                        name="name" id="name" onchange="make_slug()"
                                                                        placeholder="{{ __('Enter Product Name') }}"
                                                                           />
                                                                </div>
                                                            </div>

                                                        </div>



                                                        <div class="col-md-6 mt-3">
                                                            <label class="form-label">{{ __('Slug') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <span id="slug-span"></span>
                                                                    <input type="hidden" id="slug" name="slug" placeholder="Text"
                                                                    class="form-control">
                                                                    @if(false)
                                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                                        name="slug"
                                                                        placeholder="{{ __('Product Slug') }}"
                                                                        value="product-{{ Str::random(3) . substr(time(), 6, 8) . Str::random(3) }}"
                                                                          />
                                                                         @endif
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
                                                                        name="title" id="title"
                                                                        placeholder="{{ __('Enter Product Title') }}"
                                                                         />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3"  >
                                                            <label class="form-label">{{ __('Price') }}*</label>
                                                            <div class="row">
                                                                <div class="col-10" style="height: 100% !important">
                                                                    <div>
                                                                        <input name="price" id="price"
                                                                            class="form-control mb-4 mb-md-0 col-6"
                                                                            placeholder="{{ __('Enter Product Price') }}"
                                                                            value="0"
                                                                             />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-5">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label
                                                                    class="form-label row">&nbsp;&nbsp;{{ __('Photo') }}*</label>
                                                                <input type="file" name="photo" id="photo"
                                                                    style="cursor: pointer !important;"   />
                                                                </div>
                                                                <div class="col-6" id="preview_pic" style="display: none">
                                                                    <img id="previewImage" src="#" alt="Preview Image"
                                                                    style="max-width: 300px">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-5">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label class="form-label row">
                                                                        &nbsp;&nbsp;{{ __('Status') }}*
                                                                    </label>
                                                                    <div class="input-group form-check form-switch">
                                                                        <input name="status" type="checkbox"
                                                                            style="cursor: pointer" class="form-check-input"
                                                                            checked>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12 mt-5">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label class="form-label">{{ __('Types') }}*</label>
                                                                    <select class="js-example-basic-multiple form-select" id="type_id"
                                                                        name="type_id[]" multiple="multiple"
                                                                        data-width="100%"  >
                                                                        @foreach ($types as $type)
                                                                            <option value="{{ $type['id'] }}">
                                                                                {{ $type['name'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label
                                                                        class="form-label">{{ __('Categories') }}*</label>
                                                                    <select class="js-example-basic-multiple form-select" id="category_id"
                                                                        name="category_id[]" multiple="multiple"
                                                                        data-width="100%"  >
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category['id'] }}">
                                                                                {{ $category['name'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>


                                                                <div class="col-6">
                                                                    <label
                                                                        class="form-label">{{ __('Materials') }}*</label>
                                                                    <select class="js-example-basic-multiple form-select" id="material_id"
                                                                        name="material_id[]" multiple="multiple"
                                                                        data-width="100%"  >
                                                                        @foreach ($materials as $material)
                                                                            <option value="{{ $material['id'] }}">
                                                                                {{ $material['name'] }}
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
                                                                    <textarea class="form-control" name="description" id="tinymceExample" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-outline-primary submit"  @if(!$submit_form) onclick="formSubmit()" @endif id="submit_button"
                                            class="btn btn-primary"
                                                type="submit">{{ __('Create New Product') }}</button>
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
    <script src="{{ asset('assets/js/saveV3.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

function make_slug(){

    let slug = slugify( $('#name').val());
    $('#slug').val(slug);
    $('#slug-span').html(slug);
}

async function selectOrder(){


    ///admin/products/location/dsfa

$.get( "/admin/products/location/"+$('#location').val(), function( data ) {
  $( "#order_div" ).html( data );

});
}




function slugify(str) {
  return String(str)
      .normalize('NFKD') // split accented characters into their base characters and diacritical marks
      .replace(/[\u0300-\u036f]/g,
      '') // remove all the accents, which happen to be all in the \u03xx UNICODE block.
      .trim() // trim leading or trailing whitespace
      .toLowerCase() // convert to lowercase
      .replace(/[^a-z0-9 -]/g, '') // remove non-alphanumeric characters
      .replace(/\s+/g, '-') // replace spaces with hyphens
      .replace(/-+/g, '-'); // remove consecutive hyphens
}

document.getElementById('photo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('previewImage').src = e.target.result;
        $('#preview_pic').show();
    };

    reader.readAsDataURL(file);
});

// document.getElementById('name').addEventListener('input', function(event) {
//     // This function will be called whenever the text input changes
//     let slug = slugify(('#name').val());
//     $('#slug').val(slug);
//     $('#slug-span').html(slug);

// });

@if(!$submit_form)

async function formSubmit() {

let error = false;


if ($('#name').val() == '') {

$('#name').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün adı giriniz'
});

error = true;
return false;
}else {

const response = await fetch('/admin/products/check-slug/' + $('#slug').val());
const data = await response.json();
if (data !== 'ok') {
    $('#name').focus();
    $('#name').val('');
    Swal.fire({
        icon: 'error',
        text: data
    });

    error = true;
    return false;
}

}


if ($('#title').val() == '') {

    $('#title').focus();
    Swal.fire({
        icon: 'error',
        text: 'ürün başlığı giriniz'
    });

    error = true;
    return false;
}




if ($('#price').val() =='0') {

$('#price').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün fiyatı  giriniz'
});



error = true;
return false;
}


if ($('#type_id').val() === null || $('#type_id').val().length === 0) {

$('#type_id').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün tipi seçiniz'
});

error = true;
return false;
}

if ($('#category_id').val() === null || $('#category_id').val().length === 0)  {

$('#category_id').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün için kategori seçiniz'
});

error = true;
return false;
}

if ($('#material_id').val() === null || $('#material_id').val().length === 0)  {

$('#material_id').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün için material seçiniz'
});

error = true;
return false;
}

if ($('#tinymceExample').val() =='') {

$('#tinymceExample').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün fiyatı  giriniz'
});

error = true;
return false;
}




 var formData = new FormData(document.getElementById('product-form'));

  $('#submit_button').prop('disabled',true);
  //save(formData, '/admin-panel/products/store', '', '');
  save(formData, '/admin/products', '', '',"{{route('admin.products.index')}}");
//async function save(formData,route,formID,btn,reload) {


  }

@endif

    </script>
@endsection
