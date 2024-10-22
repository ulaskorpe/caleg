 <!-- ============================ top_slider 160x160 =============================== -->
 <div class="feature" id="featureSection">
    <div class="container container-lg">
        <div class="position-relative arrow-center">
            <div class="flex-align">
                <button type="button" id="feature-item-wrapper-prev" class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="feature-item-wrapper-next" class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1" >
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>
            <div class="feature-item-wrapper">
                <?php
                    $time = 400;
                ?>
                <?php for($i=0;$i<10;$i++): ?>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="<?php echo e($time); ?>">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img1.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Vegetables</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <?php
                    $time += 200;
                ?>
                <?php endfor; ?>


                <?php if(false): ?>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img2.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img3.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Desserts</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img4.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Drinks & Juice</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1200">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img5.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Animals Food</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img6.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fresh Fruits</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1600">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img7.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Yummy Candy</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1800">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img2.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2000">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img8.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Dairy & Eggs</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2200">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img9.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Snacks</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2400">
                    <div class="feature-item__thumb rounded-circle">
                        <a href="shop.html" class="w-100 h-100 flex-center">
                            <img src="assets/images/thumbs/feature-img10.png" alt="">
                        </a>
                    </div>
                    <div class="feature-item__content mt-16">
                        <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Frozen Foods</a></h6>
                        <span class="text-sm text-gray-400">125+ Products</span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- ============================ top_slider =============================== --><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/partials/index/top_slider.blade.php ENDPATH**/ ?>