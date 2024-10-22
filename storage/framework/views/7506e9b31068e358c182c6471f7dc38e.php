   <!-- Login Card Start -->
   <div class="col-xl-12 pe-xl-5">
    <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
        <h6 class="text-xl mb-32">Üye Giriş</h6>
        <div class="mb-24">
            <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Eposta Adresiniz <span class="text-danger">*</span> </label>
            <input type="text" class="common-input" id="email_login">
        </div>
        <div class="mb-24">
            <label for="password" class="text-neutral-900 text-lg mb-8 fw-medium">Şifreniz</label>
            <div class="position-relative">
                <input type="password" class="common-input" id="password_login" name="password_login" placeholder="Enter Password" >
                <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#password"></span>
            </div>
        </div>
        <div class="mb-24 mt-48">
            <div class="flex-align gap-48 flex-wrap">
                <button type="submit" class="btn btn-main py-18 px-40">Giriş</button>
                <div class="form-check common-check">
                    <input class="form-check-input" type="checkbox" value="" id="remember">
                    <label class="form-check-label flex-grow-1" for="remember">Beni Hatırla</label>
                </div>
            </div>
        </div>
        <div class="mt-48">
            <a href="#" class="text-danger-600 text-sm fw-semibold hover-text-decoration-underline">Şifremi Unuttum</a>
        </div>
    </div>
</div>
<!-- Login Card End -->
<?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/partials/login/login_form.blade.php ENDPATH**/ ?>