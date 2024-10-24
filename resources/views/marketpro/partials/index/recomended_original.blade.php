    <!-- ========================= Recommended Start ================================ -->
    <section class="recommended overflow-hidden" style="margin-top: 100px">
        <div class="container container-lg">
            <div class="section-heading flex-between flex-wrap gap-16">
                <h5 class="mb-0 wow bounceInLeft">{{$location['title']}}</h5>
                @if(false)
                <ul class="nav common-tab nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-grocery-tab" data-bs-toggle="pill" data-bs-target="#pills-grocery" type="button" role="tab" aria-controls="pills-grocery" aria-selected="false">Grocery</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-fruits-tab" data-bs-toggle="pill" data-bs-target="#pills-fruits" type="button" role="tab" aria-controls="pills-fruits" aria-selected="false">Fruits</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-juices-tab" data-bs-toggle="pill" data-bs-target="#pills-juices" type="button" role="tab" aria-controls="pills-juices" aria-selected="false">Juices</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-vegetables-tab" data-bs-toggle="pill" data-bs-target="#pills-vegetables" type="button" role="tab" aria-controls="pills-vegetables" aria-selected="false">Vegetables</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-snacks-tab" data-bs-toggle="pill" data-bs-target="#pills-snacks" type="button" role="tab" aria-controls="pills-snacks" aria-selected="false">Snacks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-organic-tab" data-bs-toggle="pill" data-bs-target="#pills-organic" type="button" role="tab" aria-controls="pills-organic" aria-selected="false">Organic Foods</button>
                    </li>
                </ul>
                @endif
            </div>
            
    <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row g-12">
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img7.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img8.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img9.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img10.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img11.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img12.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img13.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img14.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img15.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img16.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img17.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img18.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-grocery" role="tabpanel" aria-labelledby="pills-grocery-tab" tabindex="0">
                     <div class="row g-12">
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img7.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img8.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img9.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img10.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img11.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img12.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img13.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img14.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img15.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img16.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img17.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img18.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
    <div class="tab-pane fade" id="pills-fruits" role="tabpanel" aria-labelledby="pills-fruits-tab" tabindex="0">
                     <div class="row g-12">
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img7.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img8.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img9.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img10.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img11.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img12.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img13.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img14.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img15.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img16.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img17.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img18.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
    <div class="tab-pane fade" id="pills-juices" role="tabpanel" aria-labelledby="pills-juices-tab" tabindex="0">
                     <div class="row g-12">
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img7.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img8.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img9.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img10.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img11.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img12.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img13.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img14.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img15.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img16.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img17.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img18.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
    <div class="tab-pane fade" id="pills-vegetables" role="tabpanel" aria-labelledby="pills-vegetables-tab" tabindex="0">
                     <div class="row g-12">
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img7.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img8.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img9.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img10.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img11.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img12.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img13.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img14.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img15.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img16.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img17.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img18.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
    <div class="tab-pane fade" id="pills-snacks" role="tabpanel" aria-labelledby="pills-snacks-tab" tabindex="0">
                     <div class="row g-12">
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img7.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img8.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img9.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img10.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img11.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img12.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img13.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img14.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img15.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img16.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img17.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img18.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
    <div class="tab-pane fade" id="pills-organic" role="tabpanel" aria-labelledby="pills-organic-tab" tabindex="0">
                     <div class="row g-12">
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img7.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img8.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img9.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img10.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img11.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img12.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and Honey Protein</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img13.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="400">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img14.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="600">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img15.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary Supplement</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="800">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img16.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed Atlantic Salmon</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1000">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img17.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img src="assets/images/thumbs/product-img18.png" alt="">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice, Orange, No Pulp</a>
                    </h6>
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Recommended End ================================ -->
    