@extends('admin.layouts.master')
@section('title', __('Home Page Settings'))
@section('content')
<div class="main-wrapper">
    @include('admin.partials.sidebar')
    {{--  @include('admin.partials.themeChange')  --}}
    <div class="page-wrapper">

        @include('admin.partials.topbar')

        <div class="page-content">

            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">{{ __('Front Settings') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Sliders') }}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin">

                    <div class="card">
                        <div class="card-body">




                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link @if($selected==0) active @endif" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Top Slider</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link @if($selected==1) active @endif" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Bottom Slider</a>
                                </li>

                              </ul>
                              <div class="tab-content pt-5" id="tab-content">
                                <div class="tab-pane @if($selected==0) active @endif" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
                                    @include("admin.settings.top_slider")
                                </div>
                                <div class="tab-pane @if($selected==1) active @endif" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                                    @include("admin.settings.bottom_slider")
                                </div>

                              </div>

                            </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        @include('admin.partials.footer')

    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('assets/js/saveV3.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
document.getElementById('top_slider_image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('previewImage').src = e.target.result;
        $('#preview_pic').show();
    };

    reader.readAsDataURL(file);
});

document.getElementById('bottom_slider_image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('bttpreviewImage').src = e.target.result;
        $('#preview_pic_2').show();
    };

    reader.readAsDataURL(file);
});



function deleteSlide(slide_id) {


                Swal.fire({
                    text: 'Resim silinecek silinecek, emin misin?',
                    //text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet',
                    cancelButtonText: 'Hayır'
                }).then((result) => {

                    if (result.isConfirmed) {

                         $.get('/admin/settings/home-settings/delete-home-settings/slider/'+slide_id , function(data, status) {
                            if(data=="ok"){
                                Swal.fire({
                                    icon: 'success',
                                    text: "slide deleted"
                                });

                                setTimeout(() => {
                                        window.open('/admin/settings/front-settings/slider/{{$selected}}','_self');
                                }, 2000);
                            }

                        });
                    }
                });
            }

@if(!$submit_form)

async function bottomformSubmit() {
    let error = false;

    if ($('#bottom_slider_image').val() == '') {

        $('#bottom_slider_image').focus();

Swal.fire({
icon: 'error',
text: "select slide"
});

//top_slider_title
error = true;
return false;

}

if(!error){

var formData = new FormData(document.getElementById('bottom-slider-form'));

 $('#bottom_slider_btn').prop('disabled',true);
 //save(formData, '/admin-panel/products/store', '', '');
save(formData, '{{ route('admin.updatehomesettings.slider') }}', '', '',"/admin/settings/front-settings/slider/1");
//async function save(formData,route,formID,btn,reload) {

   }
}
async function topformSubmit() {

let error = false;
const fields = [
    {name: 'top_slider_subtitle', msg: 'enter subtitle'},

    {name: 'top_slider_title', msg: 'enter title'},
    {name: 'top_slider_image', msg: 'select image'}
];

fields.forEach(function(field, index) {
    //console.log(`Field ${index + 1}: Name = ${field.name}, Message = ${field.msg}`);
   // console.log(index + ': ' + field['name']+':'+field['msg']);

   if ($(`#${field.name}`).val() == '') {

    $(`#${field.name}`).focus();

Swal.fire({
    icon: 'error',
    text: field.msg
});

//top_slider_title
error = true;
return false;

}

});






if(!error){

 var formData = new FormData(document.getElementById('top-slider-form'));

  $('#top_slider_btn').prop('disabled',true);
  //save(formData, '/admin-panel/products/store', '', '');
save(formData, '{{ route('admin.updatehomesettings.slider') }}', '', '',"/admin/settings/front-settings/slider");
//async function save(formData,route,formID,btn,reload) {

    }
  }

@endif


</script>

@endsection
