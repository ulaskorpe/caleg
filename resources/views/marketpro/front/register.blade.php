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
          <form class="form" id="register-form" name="register-form" action='#'
          method="post" enctype="multipart/form-data" onsubmit="return false" >
          <input type="hidden" name="_token" id="_token_" value="{{ csrf_token() }}">
      
            <div class="col-xl-12">
              <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40">
                  <h6 class="text-xl mb-32">Üye Kayıt</h6>
                  <div class="mb-24">
                      <label for="usernameTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Adınız Soyadınız <span class="text-danger">*</span> </label>
                      <input type="text" class="common-input"  name="name" id="name" placeholder="">
                  </div>
                  <div class="mb-24">
                      <label for="emailTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Eposta Adresi<span class="text-danger">*</span> </label>
                      <input type="email" class="common-input"  name="email" id="email" placeholder="">
                  </div>
                  <div class="mb-24">
                      <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Şifre <span class="text-danger">*</span></label>
                      <div class="position-relative">
                          <input type="password" class="common-input"  name="password" id="password">
                          <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#enter-password"></span>
                      </div>
                  </div>
  
                  <div class="mb-24">
                      <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Şifre Yeniden<span class="text-danger">*</span></label>
                      <div class="position-relative">
                          <input type="password" class="common-input"  name="password_repeat" id="password_repeat"  placeholder="Şifre Yeniden Girin">
                          <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#enter-password"></span>
                      </div>
                  </div>
  
  
                  <div class="mb-24">
                      <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Ben İnsanım :<span class="text-danger">*</span></label>
                      <div class="position-relative">
                          <img src="{{url('files/captha/'.$img)}}" style="padding-bottom: 20px">
                          <input type="text" class="common-input"  name="captha" id="captha" placeholder="">
                          <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#enter-password"></span>
                      </div>
                  </div>
  
                  <div class="my-48">
                      <p class="text-gray-500">
                          <a href="#" class="text-main-600 text-decoration-underline">Kullanım Koşulları</a> okudum kabul ediyorum
                          <input type="checkbox" name="i_agree" id="i_agree" value="13" class="common-input">
                      .</p>
                  </div>
                  <div class="mt-48">
                      <button type="submit" onclick="registerFormSubmit()"  id="submit_button"  class="btn btn-main py-18 px-40">Kayıt Ol</button>
                  </div>
              </div>
          </div>
            </form>
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
 
 
 
 
 async function registerFormSubmit() {
 
 let error = false;
  
  
 
 if ($('#name').val() == '') {
     $('#name').focus();
     Swal.fire({
         icon: 'error',
         text: 'Adınız ve soyadınızı giriniz'
     });
     error = true;
     return false;
  }
 
 
 
 
 
  if ($('#email').val() == '') {
     $('#email').focus();
     Swal.fire({
         icon: 'error',
         text: 'Eposta adresi giriniz'
     });
     error = true;
     return false;
 
  }else{
     const response = await fetch('/check-email/' + $('#email').val());
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
 
  
         if ($('#password').val() == '') {
                
                $('#password').focus();
                Swal.fire({
                    icon: 'error',
                    text: 'Şifre giriniz'
                });
             
                error = true;
                return false;
            }else{
             const pw = $('#password').val();
 
                 if(pw.length <8 ){
                     $('#password').val('');
                     $('#password').focus();
                Swal.fire({
                    icon: 'error',
                    text: 'Şifreniz en az 8 karakter olmalıdır'
                });
             
                error = true;
                return false;
                 }else{
                     if ($('#password_repeat').val() != $('#password').val()) {
                
                             $('#password_repeat').val('');
                             $('#password_repeat').focus();
                             Swal.fire({
                                 icon: 'error',
                                 text: 'Lütfen şifrenizi tekrar giriniz' 
                             });
                             
                             error = true;
                             return false;
                      }
 
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
 
  if (!$('#i_agree').prop('checked')) {
     $('#i_agree').focus();
     Swal.fire({
         icon: 'error',
         text: 'Lütfen kullanım koşullarını okuyup onayladığınızı belirtiniz.'
     });
     error = true;
     return false;
 
  }
 
 var formData = new FormData(document.getElementById('register-form'));
 $('#submit_button').prop('disabled',true);
 @if(empty(session('return_link')))
 await save(formData, '/register_user', '', '','{{url('/')}}');
 @else
 await save(formData, '/register_user', '', '','{{session('return_link')}}');
 @endif 
   
  
 // setTimeout(() => {
 //       window.open('{{url('/')}}','_self');
 // }, 2000);
 
 }
 
 
  
  
 </script>
 
 @endsection
 