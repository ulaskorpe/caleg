<?php $__env->startSection('content'); ?>
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
            
 <div class="col-md-6">
    <?php echo $__env->make('marketpro.partials.login.login_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>

 <div class="col-md-6">
    <?php echo $__env->make('marketpro.partials.login.register_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div>
   

      

            </div>
       
    </div>
 </section>
<!-- =============================== Account Section End =========================== -->

<?php echo $__env->make('marketpro.partials.login.shipping', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
 <?php $__env->stopSection(); ?>


 <?php $__env->startSection('scripts'); ?>
 
 <script src="<?php echo e(url('assets/js/saveV3.js')); ?>"></script>
 <script>
 
 $('#forget-form').submit(function(e) {
     e.preventDefault();
     var error = false;
     var formData = new FormData(this);
     formData.append('additionalData', 'value');
 });
 
 
 
 
 $('#login-form').submit(function(e) {
     e.preventDefault();
     var error = false;
     var formData = new FormData(this);
     formData.append('additionalData', 'value');
 });
 
 
 async function forgetFormSubmit() {
 
 let error = false;
 
 if ($('#username_or_email').val() == '') {
     $('#username_or_email').focus();
     Swal.fire({
         icon: 'error',
         text: 'Kayıt olduğunuz eposta adresini giriniz'
     });
     error = true;
     return false;
  }
 
 
 if ($('#captha').val() == '') {
                
                $('#captha').focus();
                Swal.fire({
                    icon: 'error',
                    text: 'Lütfen resimdeki yazıyı doğrulayınız'
                });
             
                error = true;
                return false;
            }else if(($('#captha').val() != '<?php echo e($text); ?>') ){
 
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
   await save(formData, '/forget-pw-post', '', '','<?php echo e(url('/')); ?>');
  
 }
 
 async function loginFormSubmit() {
 
 let error = false;
 if ($('#username_or_email').val() == '') {
     $('#username_or_email').focus();
     Swal.fire({
         icon: 'error',
         text: 'Kullanıcı adınızı ya da kayıt olduğunuz eposta adresini giriniz'
     });
     error = true;
     return false;
  }
  if ($('#password').val() == '') {
     $('#password').focus();
     Swal.fire({
         icon: 'error',
         text: 'Şifrenizi giriniz'
     });
     error = true;
     return false;
  }
 
 if ($('#captha').val() == '') {
                
                $('#captha').focus();
                Swal.fire({
                    icon: 'error',
                    text: 'Lütfen resimdeki yazıyı doğrulayınız'
                });
             
                error = true;
                return false;
            }else if(($('#captha').val() != '<?php echo e($text); ?>') ){
 
             $('#captha').focus();
             $('#captha').val('');
                Swal.fire({
                    icon: 'error',
                    text: 'Lütfen resimdeki yazıyı yanlış girdiniz'
                });
             
                error = true;
                return false;
            }
            var formData = new FormData(document.getElementById('login-form'));
 $('#submit_button').prop('disabled',true);
   
   <?php if(empty(session('return_link'))): ?>
 await save(formData, '/login_user', '', '','<?php echo e(url('/')); ?>');
 <?php else: ?>
 await save(formData, '/login_user', '', '','<?php echo e(session('return_link')); ?>');
 <?php endif; ?> 
 }////
 
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
            }else if(($('#captha').val() != '<?php echo e($text); ?>') ){
 
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
 <?php if(empty(session('return_link'))): ?>
 await save(formData, '/register_user', '', '','<?php echo e(url('/')); ?>');
 <?php else: ?>
 await save(formData, '/register_user', '', '','<?php echo e(session('return_link')); ?>');
 <?php endif; ?> 
   
  
 // setTimeout(() => {
 //       window.open('<?php echo e(url('/')); ?>','_self');
 // }, 2000);
 
 }
 
 
  
  
 </script>
 
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('marketpro.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/front/login_register.blade.php ENDPATH**/ ?>