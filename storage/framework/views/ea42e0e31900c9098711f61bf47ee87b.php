          <!-- Register Card Start -->
          <form class="form" id="register-form" name="register-form" action='<?php echo e(route('register_user')); ?>'
        method="post" enctype="multipart/form-data" >
        <input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
       
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
                        <img src="<?php echo e(url('files/captha/'.$img)); ?>" style="padding-bottom: 20px">
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
                    <button type="submit" onclick="registerFormSubmit()" class="btn btn-main py-18 px-40">Kayıt Ol</button>
                </div>
            </div>
        </div>
          </form>
        <!-- Register Card End --><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/partials/login/register_form.blade.php ENDPATH**/ ?>