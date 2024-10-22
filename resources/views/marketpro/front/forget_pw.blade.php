
@extends('marketpro.main_layout')

@section('content')
    <!-- ========================= Breadcrumb Start =============================== -->
<div class="breadcrumb py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Hesabım</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="index.html" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                        <i class="ph ph-house"></i>
                        Anasayfa
                    </a>
                </li>
                <li class="flex-align">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-main-600"> Hesap </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->

<!-- =============================== Account Section Start =========================== -->
 <section class="account py-80">
    <div class="container container-lg">
        
            <div class="row gy-4">
            
 <div class="col-md-3"></div>
 <div class="col-md-6">
             <!-- Register Card Start -->
                      <!-- Register Card Start -->
             <!-- Login Card Start -->

   <form class="form" id="forget-form" name="forget-form" action='{{route('login_user')}}'
   method="post" enctype="multipart/form-data" onsubmit="return false" >
   <input type="hidden" name="_token" id="_token_" value="{{ csrf_token() }}">
      
<div class="col-xl-12 pe-xl-5">
<div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
   <h6 class="text-xl mb-32">Şifremi Unuttum</h6>
   <div class="mb-24">
       <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Eposta Adresiniz <span class="text-danger">*</span> </label>
       <input type="text" class="common-input" id="email" name="email">
   </div>
 
   <div class="mb-24">
    <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Ben İnsanım :<span class="text-danger">*</span></label>
    <div class="position-relative">
        <img src="{{url('files/captha/'.$img)}}" style="padding-bottom: 20px">
        <input type="text" class="common-input"  name="captha" id="captha" placeholder="">
        <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#enter-password"></span>
    </div>
</div>
 
   <div class="mt-48">
    
</div>
<div class="mb-24 mt-48">
    <div class="flex-align gap-48 flex-wrap">
        <button type="submit"  onclick="forgetFormSubmit()" id="submit_button" class="btn btn-main py-18 px-40">Giriş</button>
        <div class="form-check common-check">
           
        </div>
    </div>
</div>
   <div class="mt-48">
       <a href="{{route('user-login')}}" class="text-danger-600 text-sm fw-semibold hover-text-decoration-underline">Üye Giriş</a>
   </div>
</div>
</div>
</form>
<!-- Login Card End -->
          <!-- Register Card End -->
             <!-- Register Card End -->
 </div>

 <div class="col-md-6">
    
 </div>
   

      

            </div>
       
    </div>
 </section>
<!-- =============================== Account Section End =========================== -->

@include('marketpro.partials.login.shipping')
    
 @endsection


 @section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 <script src="{{ url('assets/js/saveV3.js') }}"></script>
 <script>
 
 
 
 
 
 async function forgetFormSubmit() {
 
 let error = false;
 
 if ($('#email').val() == '') {
     $('#email').focus();
     Swal.fire({
         icon: 'error',
         text: 'Kayıt olduğunuz eposta adresini giriniz'
     });
     error = true;
     return false;
  }else{

    const response = await fetch('/email-exists/' + $('#email').val());
     const data = await response.json();
     if (data !== 'ok') {
         $('#email').val('');
         $('#email').focus();
         Swal.fire({
             icon: 'error',
             text: data
         });
 
         error = true;
         return false;
     }
  }
 
 
 if ($('#captha').val() == '') {
                
                $('#captha').focus();
                Swal.fire({
                    icon: 'error',
                    text: 'Lütfen resimdeki yazıyı doğrulayınız'
                });
             
                error = true;
                return false;
            }else if(($('#captha').val() != '{{$text}}') ){
 
             $('#captha').focus();
             $('#captha').val('');
                Swal.fire({
                    icon: 'error',
                    text: 'Lütfen resimdeki yazıyı yanlış girdiniz'
                });
             
                error = true;
                return false;
            }
 
 
 
 var formData = new FormData(document.getElementById('forget-form'));
 $('#submit_button').prop('disabled',true);
   await save(formData, '/forget-pw-post', '', '','{{url('/')}}');
  
 }
 // setTimeout(() => {
 //       window.open('{{url('/')}}','_self');
 // }, 2000);
 
 
 
  
  
 </script>
 
 @endsection
 
    
  