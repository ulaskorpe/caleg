<!DOCTYPE html>
<html lang="tr" class="">
<?php echo $__env->make("marketpro.partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="assets/images/site_data/<?php echo e($data['preloader-gif']); ?>" alt="">
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
            <img src="assets/images/logo/logo.png" alt="Logo">
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


    <!-- ======================= Middle Top Start ========================= -->

<!-- ======================= Middle Top End ========================= -->
 
<?php echo $__env->make("marketpro.partials.middle_header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("marketpro.partials.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- ============================ Banner Section start =============================== -->
<?php echo $__env->yieldContent('content'); ?>
<!-- ============================ Banner Section End =============================== -->

 


@
<?php echo $__env->make("marketpro.partials.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







    


    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/phosphor-icon.js"></script>
    <!-- Select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/count-down.js"></script>
    <!-- jquery UI js -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- AOS Animation -->
    <script src="assets/js/aos.js"></script>
    <!-- marque -->
    <script src="assets/js/marque.min.js"></script>
    <!-- marque -->
    <script src="assets/js/vanilla-tilt.min.js"></script>
    <!-- main js -->
    <script src="http://ionden.com/a/plugins/ion.rangeSlider/static/js/ion-rangeSlider/ion.rangeSlider.js"></script>



    <script src="assets/js/main.js"></script>



    </body>
</html><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/main_layout.blade.php ENDPATH**/ ?>