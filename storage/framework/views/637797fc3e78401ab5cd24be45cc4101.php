<?php $__env->startSection('title', __('Login')); ?>
<?php $__env->startSection('styles'); ?>
    <style>
        .swal2-popup {
            margin-top: 10% !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">
        <div class="login-register-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <form action="<?php echo e(route('user.login.post')); ?>" method="POST" id="szform">
                            <?php echo csrf_field(); ?>
                            <div class="login-form">
                                <h4 class="login-title"><?php echo e(__('Login')); ?></h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label><?php echo e(__('Email Address')); ?>*</label>
                                        <input type="email" name="email" placeholder="<?php echo e(__('Email Address')); ?>"
                                            required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label><?php echo e(__('Password')); ?></label>
                                        <input type="password" name="password" placeholder="<?php echo e(__('Password')); ?>"
                                            id="userPassword" required>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me"><?php echo e(__('Remember me')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-1 mt-md-0">
                                        <div class="forgotton-password_info">
                                            <a href="<?php echo e(route('user.forget.password')); ?>"> <?php echo e(__('Forgotten pasward')); ?>?</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pt-5">
                                        <button class="btn btn-custom-size lg-size btn-primary"><?php echo e(__('Login')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/caleg/resources/views/auth/login.blade.php ENDPATH**/ ?>