<!DOCTYPE html>
<html lang="tr" class="">
<?php echo $__env->make("marketpro.partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="<?php echo e(url('assets/images/site_data/'.$data['preloader-gif'])); ?>" alt="">
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Search Box Start Here ==================== -->
 <form action="#" class="search-box">
  <button type="button" class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
    <i class="ph ph-x"></i>
  </button>
  <div class="container">
    <div class="position-relative">
      <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64" placeholder="Search for a product or brand">
      <button type="submit" class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
        <i class="ph ph-magnifying-glass"></i>
      </button>
    </div>
  </div>
 </form>
<!-- ==================== Search Box End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.html" class="mobile-menu__logo">
            
            <img src="<?php echo e(url('assets/images/logo/logo.png')); ?>" alt="logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="on-hover-item nav-menu__item has-submenu activePage">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item activePage">
                <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Grocery</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Electronics</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-three.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Fashion</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-list.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors List </a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.html" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->

 
<?php echo $__env->make("marketpro.partials.middle_top", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("marketpro.partials.middle_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("marketpro.partials.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- ============================ Banner Section start =============================== -->
<?php echo $__env->yieldContent('content'); ?>
<!-- ============================ Banner Section End =============================== -->

 


 
<?php echo $__env->make("marketpro.partials.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







    


    <!-- Jquery js -->
    <script src="<?php echo e(url('assets/js/jquery-3.7.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/boostrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/phosphor-icon.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/count-down.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/aos.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/marque.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/vanilla-tilt.min.js')); ?>"></script>
    
    <!-- Bootstrap Bundle Js -->
    
    <!-- main js -->
    <script src="http://ionden.com/a/plugins/ion.rangeSlider/static/js/ion-rangeSlider/ion.rangeSlider.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>

    <script>


function logoutfx(){
            Swal.fire({
            title: 'Çıkış yapılacak eminmisiniz',
         
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                    $('#logout-form').submit();
            }
        });
        }

        </script>

     <?php echo $__env->yieldContent('scripts'); ?>

    </body>
</html><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/main_layout.blade.php ENDPATH**/ ?>