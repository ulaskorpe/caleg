    <!-- ========================= Recommended Start ================================ -->
    <section class="recommended overflow-hidden" style="margin-top: 10px">
        <div class="container container-lg">
            <div class="section-heading flex-between flex-wrap gap-16">
                <h5 class="mb-0 wow bounceInLeft">{{$location['title']}}</h5>
             
            </div>
            
    <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row g-12">
                        @php  
                        $t= 200;
                    @endphp 
                @foreach($location->products()->get() as $product)
        <div class="col-xxl-2 col-lg-3 col-sm-4 col-6" data-aos="fade-up" data-aos-duration="{{$t}}">
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="product-details.html" class="product-card__thumb flex-center">
                    <img  src="{{url('assets/products/'.$product["slug"].'/'.$product["photo"])}}" alt="{{$product['name']}}"
                    style="width: 149px;height:160x">
                </a>
                <div class="product-card__content p-sm-2">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="{{route('product-detail',[$product['slug'],$product['id']])}}" class="link text-line-2">{{$product['name']}}</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">       
                      @foreach($product->categories()->get() as $cat)
                            {{$cat->name}}
                        @endforeach
                    </span>
                    </div>
    
                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">{{$product['price']}} TL <span class="text-gray-500 fw-normal"></span> </span>
                            {{-- <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span> --}}
                        </div>
                        <div class="flex-align gap-6">
                            {{-- <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span> --}}
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Sepete Ekle <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @php  
        $t+= 200;
    @endphp 

        @endforeach
        </div>
    </div>
     
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Recommended End ================================ -->
    