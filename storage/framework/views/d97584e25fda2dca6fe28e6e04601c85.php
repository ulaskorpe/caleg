<?php $__env->startSection('title',__('Login')); ?>
<?php $__env->startSection('styles'); ?>
  <style>
    .auth-page .auth-side-wrapper {
      background-image: url('<?php echo e(asset('assets/admin/images/others/admin_login.png')); ?>') ;
  }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="main-wrapper">
  <div class="page-wrapper full-page">
    <div class="page-content d-flex align-items-center justify-content-center">

      <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
          <div class="card">
            <div class="row">
              <div class="col-md-4 pe-md-0">
                <div class="auth-side-wrapper">

                </div>
              </div>
              <div class="col-md-8 ps-md-0">
                <div class="auth-form-wrapper px-4 py-5">
                  <a href="#" class="noble-ui-logo d-block mb-2"><?php echo e(explode(' ',config('app.name'))[0]); ?><span>Nist</span></a>
                  <h5 class="text-muted fw-normal mb-4"><?php echo e(__('Admin Login')); ?> <?php echo e((' =>')); ?> ( <?php echo e(request()->ip()); ?> )</h5>
                  <form class="forms-sample" action="<?php echo e(route('admin.post.login')); ?>" method="POST" id="loginForm">
                    <?php echo csrf_field(); ?>
                    <?php echo $__env->make('alerts.admin.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="mb-3">
                      <label for="userEmail" class="form-label"><?php echo e(__('Email')); ?></label>
                      <input class="form-control" name="email" type="email" placeholder="<?php echo e(__('Enter Email Address')); ?>" autofocus required>
                    </div>
                    <div class="mb-3">
                      <label for="userPassword" class="form-label">Password</label>
                      <input class="form-control" id="userPassword" autocomplete="current-password" name="password" type="password" placeholder="<?php echo e(__('Enter Your password')); ?>" autofocus required>
                    </div>
                    <div class="text-center mt-5">
                      <button class="btn btn-primary me-2 mb-2 mb-md-0 text-white" type="submit"><?php echo e(__('Login')); ?></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/caleg/resources/views/admin/login.blade.php ENDPATH**/ ?>