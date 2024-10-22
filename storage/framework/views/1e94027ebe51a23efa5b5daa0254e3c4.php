<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php echo e($data ['General_Settings']->site_desciption); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if(isset($settings['settings']['Seo_Settings']->meta_tags) ): ?>

        <meta name="keywords" content="<?php echo e($data['settings']['Seo_Settings']->meta_tags); ?>">


    <?php endif; ?>
    <?php if(isset($data['Seo_Settings']->meta_description) ): ?>


    <meta name="description" content="<?php echo e($data ['Seo_Settings']->meta_description); ?>">
    <?php endif; ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/'.$data['General_Settings']->site_desciption)); ?>" />

    <!-- CSS
    ============================================ -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/Pe-icon-7-stroke.css')); ?>" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/magnific-popup.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/ion.rangeSlider.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/sweetalert2/sweetalert2.min.css')); ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<?php /**PATH /home/vagrant/code/caleg/resources/views/partials/head.blade.php ENDPATH**/ ?>