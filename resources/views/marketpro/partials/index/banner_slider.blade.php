<div class="banner">
    <div class="container container-lg">
        <div class="banner-item rounded-24 overflow-hidden position-relative arrow-center">
            <a href="#featureSection" class="scroll-down w-84 h-84 text-center flex-center bg-main-600 rounded-circle border border-5 text-white border-white position-absolute start-50 translate-middle-x bottom-0 hover-bg-main-800">
                <span class="icon line-height-0"><i class="ph ph-caret-double-down"></i></span> 
            </a>
            
            <img src="assets/images/bg/banner-bg.png" alt="" class="banner-img position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1 object-fit-cover rounded-24">

            <div class="flex-align">
                <button type="button" id="banner-prev" class="slick-prev slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                    <i class="ph ph-caret-left"></i>
                </button>
                <button type="button" id="banner-next" class="slick-next slick-arrow flex-center rounded-circle bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                    <i class="ph ph-caret-right"></i>
                </button>
            </div>
           
            <div class="banner-slider">
                @foreach($sliders as $slider)
                <div class="banner-slider__item">   
                    <div class="banner-slider__inner flex-between position-relative">
                        <div class="banner-item__content">
                            <h1 class="banner-item__title wow bounceInDown"  data-wow-duration="1s">{{$slider['title']}}</h1>
                            <a href="shop.html" class="btn btn-main d-inline-flex align-items-center rounded-pill gap-8 wow bounceInUp"  data-wow-duration="1s">
                                Mağazayı Ziyaret Edin <span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>   </span> 
                            </a>
                        </div>
                        <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="assets/images/slider/{{$slider['image']}}" alt="" style="width:597px;height:354px">
                        </div>
                    </div>
                </div>

                @endforeach
                
            </div>  
        </div>
    </div>
</div>