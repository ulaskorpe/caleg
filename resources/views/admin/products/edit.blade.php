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
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Product') }}  </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Info</button>
                                    </li>
                                    <li class="nav-item" role="presentation"> 
                                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" onclick="show_comments()" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Comments</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="contact-tab" onclick="get_location(0,0)" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Locations</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">@include("admin.products.product_update")</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><div id="product_locations"></div></div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><div id="comment_list"></div></div>

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


$(function() {
    
  
});

function show_comments(){
    $('#product_locations').hide();
    $('#comment_list').show();
    show_data('/admin/products/comments/{{$product['id']}}/0','comment_list');
}

function delete_from_location(location_id){
            Swal.fire({
            title: 'Remove product from location ?',

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
               
                get_location(location_id,0 )
            }
        });
        }


function delete_img(img){
            Swal.fire({
            title: 'Dosya silinecek, eminmisiniz',

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/products/images/{{$product["slug"]}}/'+img,  // url
                    function (data) {  // success callback
                    $('#product_images').html(data);
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                        location.reload();
                }, 2000);
                   /// $('#logout-form').submit();
            }
        });
        }

function get_images(){
    $.get('/admin/products/images/{{$product["slug"]}}',  // url
      function (data) {  // success callback
        $('#product_images').html(data);
         // alert('status: ' + textStatus + ', data:' + data);
    });
}


function get_location(location_id=0,order=0 ){
    $('#product_locations').show();
    $('#comment_list').hide();
    ///console.log('/admin/products/locations/{{$product["id"]}}/'+location_id+'/'+order );
    $.get('/admin/products/locations/{{$product["id"]}}/'+location_id+'/'+order ,  // url
      function (data) {  // success callback
        $('#product_locations').html(data);
         // alert('status: ' + textStatus + ', data:' + data);
    });
}


function make_slug(){

    let slug = slugify( $('#name').val());
    $('#slug').val(slug);
    $('#slug-span').html(slug);
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

const response = await fetch('/admin/products/check-slug/' + $('#slug').val()+'/{{$product['id']}}');
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
  save(formData, '{{route('admin.product.update')}}', '', '',"/admin/products/"+$('#slug').val()+"/edit");
//async function save(formData,route,formID,btn,reload) {


  }

@endif


    </script>
@endsection
