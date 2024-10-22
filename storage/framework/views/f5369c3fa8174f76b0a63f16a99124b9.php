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
            
 <div class="col-md-3"></div>
 <div class="col-md-6">
             <!-- Register Card Start -->
                      <!-- Register Card Start -->
             <!-- Login Card Start -->

   <form class="form" id="login-form" name="login-form" action='<?php echo e(route('login_user')); ?>'
   method="post" enctype="multipart/form-data" onsubmit="return false" >
   <input type="hidden" name="_token" id="_token_" value="<?php echo e(csrf_token()); ?>">
      
<div class="col-xl-12 pe-xl-5">
<div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
   <h6 class="text-xl mb-32">Üye Giriş</h6>
   <div class="mb-24">
       <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Eposta Adresiniz <span class="text-danger">*</span> </label>
       <input type="text" class="common-input" id="email_login" name="email_login">
   </div>
   <div class="mb-24">
       <label for="password" class="text-neutral-900 text-lg mb-8 fw-medium">Şifreniz</label>
       <div class="position-relative">
           <input type="password" class="common-input" id="password_login" name="password_login" placeholder="Enter Password" >
           <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#password"></span>
       </div>
   </div>

   <div class="mb-24">
    <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Ben İnsanım :<span class="text-danger">*</span></label>
    <div class="position-relative">
        <img src="<?php echo e(url('files/captha/'.$img)); ?>" style="padding-bottom: 20px">
        <input type="text" class="common-input"  name="captha" id="captha" placeholder="">
        <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#enter-password"></span>
    </div>
</div>
   <div class="mb-24 mt-48">
       <div class="flex-align gap-48 flex-wrap">
           <button type="submit"  id="submit_button"  onclick="loginFormSubmit()" class="btn btn-main py-18 px-40">Giriş</button>
           <div class="form-check common-check">
               <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember_me">
               <label class="form-check-label flex-grow-1" for="remember">Beni Hatırla</label>
           </div>
       </div>
   </div>
   <div class="mt-48">
    
</div>
   <div class="mt-48">
       <a href="<?php echo e(route('user-forget-pw')); ?>" class="text-danger-600 text-sm fw-semibold hover-text-decoration-underline">Şifremi Unuttum</a>
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

<?php echo $__env->make('marketpro.partials.login.shipping', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
 <?php $__env->stopSection(); ?>


 <?php $__env->startSection('scripts'); ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 <script src="<?php echo e(url('assets/js/saveV3.js')); ?>"></script>
 <script>
 
 
 
 async function loginFormSubmit() {
    
    let error = false;
    if ($('#email_login').val() == '') {
        $('#email_login').focus();
        Swal.fire({
            icon: 'error',
            text: 'Kayıt olduğunuz eposta adresini giriniz'
        });
        error = true;
        return false;
     }
     if ($('#password_login').val() == '') {
        $('#password_login').focus();
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
  
 // setTimeout(() => {
 //       window.open('<?php echo e(url('/')); ?>','_self');
 // }, 2000);
 
 
 
  
  
 </script>
 
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('marketpro.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/front/login.blade.php ENDPATH**/ ?>