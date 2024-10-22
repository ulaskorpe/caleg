@extends('layouts.master')
@section('title', __('Homepage'))
@section('content')

    @if ($data['Home_Settings']->slider['status'] )
        <div class="slider-area">
            <div class="swiper-container main-slider swiper-arrow with-bg_white">
                <div class="swiper-wrapper">
                    @foreach ($data['Home_Settings']->slider['content']  as $slider)
                        <div class="swiper-slide animation-style-01">
                            <div class="slide-inner bg-height"
                                data-bg-image={{ asset('assets/images/slider/' . '/' . preg_replace('/"/', '', json_encode($slider['image'])))
                                    ? asset('assets/images/slider/' . '/' . preg_replace('/"/', '', json_encode($slider['image'])))
                                    : 'assets/images/slider/bg/1-1.jpg' }}>
                                <div class="container">
                                    <div class="slide-content text-white">
                                        <h3 class="sub-title">{{ $slider['subtitle'] }}</h3>
                                        <h2 class="title mb-3">{{ $slider['title'] }}</h2>
                                        <p class="short-desc different-width mb-10">{{ $slider['description'] }}</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary"
                                                href="{{ $slider['button_link'] }}">{{ $slider['button_text'] }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination with-bg d-md-none"></div>

                <!-- Custom Arrows -->
                <div class="custom-arrow-wrap d-none d-md-block">
                    <div class="custom-button-prev"></div>
                    <div class="custom-button-next"></div>
                </div>
            </div>
        </div>
    @endif

        <div class="background-img">


                <div class="banner-area section-space-top-100">
                    <div class="container">
                        <div class="row">
                            @foreach($products_top as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-item img-hover-effect">
                                    <h5 class="title mb-1" style="color:#3f3f3f ">
                                        {{ $product['name']}}
                                      </h5>
                                    <div class="banner-img img-zoom-effect" >
                                        <img class="img-full"
                                            src={{
                                                asset('assets/products/'.$product['slug'].'/'.$product['photo'])
                                            }}
                                            alt="Banner Image">
                                        <div class="inner-content text-white mb-5">

                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary"
                                                    href="#">İncele</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>


                <div class="shipping-area section-space-y-axis-100">
                    <div class="container">
                        <div class="shipping-bg">
                            <div class="row shipping-wrap py-5 py-xl-0">

                                @foreach($data['Home_Settings']->services['content'] as $content)
                                <div class="col-lg-4 pt-lg-0">
                                    <div class="shipping-item">
                                        <div class="shipping-img">
                                            <img src="assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-content">
                                            <h2 class="title">{{ $content['title'] }}</h2>
                                            <p class="short-desc mb-0">
                                                {{$content['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach


                            </div>
                        </div>
                    </div>
                </div>



        </div>

        @include("partials.index_middle")

        @if(false)


    @if ($homeset->cards['status'] || $homeset->services['status'])
        <div class="background-img">

            @if ($homeset->cards['status'] && count($products))
                <div class="banner-area section-space-top-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-item img-hover-effect">
                                    <div class="banner-img img-zoom-effect">
                                        <img class="img-full"
                                            src={{ $products->find($homeset->cards['content'][0]['product_id'])->photo
                                                ? asset('assets/images/products/' . $products->find($homeset->cards['content'][0]['product_id'])->photo)
                                                : 'assets/images/banner/1-1-400x250.jpg' }}
                                            alt="Banner Image">
                                        <div class="inner-content text-white">
                                            <h2 class="title mb-5">
                                              {{ $products->find($homeset->cards['content'][0]['product_id'])->name }}
                                            </h2>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary"
                                                    href="{{ $homeset->cards['content'][0]['button_link'] }}">{{ $homeset->cards['content'][0]['button_text'] }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                                <div class="banner-item img-hover-effect">
                                    <div class="banner-img img-zoom-effect">
                                        <img class="img-full"
                                            src={{ $products->find($homeset->cards['content'][1]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->cards['content'][1]['product_id'])->photo) : 'assets/images/banner/1-1-400x250.jpg' }}
                                            alt="Banner Image">
                                        <div class="inner-content text-white">
                                            <h2 class="title mb-5">
                                                {{ $products->find($homeset->cards['content'][1]['product_id'])->name }}
                                            </h2>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary"
                                                    href="{{ $homeset->cards['content'][1]['button_link'] }}">{{ $homeset->cards['content'][1]['button_text'] }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                                <div class="banner-item img-hover-effect">
                                    <div class="banner-img img-zoom-effect">
                                        <img class="img-full"
                                            src={{ $products->find($homeset->cards['content'][2]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->cards['content'][2]['product_id'])->photo) : 'assets/images/banner/1-1-400x250.jpg' }}
                                            alt="Banner Image">
                                        <div class="inner-content text-white">
                                            <h2 class="title mb-5">
                                                {{ $products->find($homeset->cards['content'][2]['product_id'])->name }}
                                            </h2>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-primary"
                                                    href="{{ $homeset->cards['content'][2]['button_link'] }}">{{ $homeset->cards['content'][2]['button_text'] }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($homeset->services['status'])
                <div class="shipping-area section-space-y-axis-100">
                    <div class="container">
                        <div class="shipping-bg">
                            <div class="row shipping-wrap py-5 py-xl-0">
                                <div class="col-lg-4">
                                    <div class="shipping-item">
                                        <div class="shipping-img">
                                            <img src="assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-content">
                                            <h2 class="title">{{ $homeset->services['content'][0]['title'] }}</h2>
                                            <p class="short-desc mb-0">
                                                {{ $homeset->services['content'][0]['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-4 pt-lg-0">
                                    <div class="shipping-item">
                                        <div class="shipping-img">
                                            <img src="assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-content">
                                            <h2 class="title">{{ $homeset->services['content'][1]['title'] }}</h2>
                                            <p class="short-desc mb-0">
                                                {{ $homeset->services['content'][1]['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-4 pt-lg-0">
                                    <div class="shipping-item">
                                        <div class="shipping-img">
                                            <img src="assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-content">
                                            <h2 class="title">{{ $homeset->services['content'][2]['title'] }}</h2>
                                            <p class="short-desc mb-0">
                                                {{ $homeset->services['content'][2]['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    @endif

    @if ($homeset->highlights['status'] && count($products))
        <div class="background-img">
            <div class="product-area section-space-y-axis-100">
                <div class="container">
                    <div class="section-title pb-55">
                        <h2 class="title mb-0">ÖZEL TEKLİFLER</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="product-item-wrap row">
                                <div class="col-lg-8 col-md-6">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{ route('shop') }}">
                                                <img class="img-full"
                                                    src={{ $products->find($homeset->highlights['content'][0]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->highlights['content'][0]['product_id'])->photo) : 'assets/images/product/medium-size/special-deals/1-1-620x350.jpg' }}
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1"
                                                href="{{ route('shop') }}">{{ $products->find($homeset->highlights['content'][0]['product_id'])->name }}</a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7 pt-md-0">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{ route('shop') }}">
                                                <img class="img-full"
                                                    src={{ $products->find($homeset->highlights['content'][1]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->highlights['content'][1]['product_id'])->photo) : 'assets/images/product/medium-size/special-deals/1-2-290x350.jpg' }}
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1"
                                                href="{{ route('shop') }}">{{ $products->find($homeset->highlights['content'][1]['product_id'])->name }}</a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{ route('shop') }}">
                                                <img class="img-full"
                                                    src={{ $products->find($homeset->highlights['content'][2]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->highlights['content'][2]['product_id'])->photo) : 'assets/images/product/medium-size/special-deals/1-3-290x350.jpg' }}
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1"
                                                href="{{ route('shop') }}">{{ $products->find($homeset->highlights['content'][2]['product_id'])->name }}</a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{ route('shop') }}">
                                                <img class="img-full"
                                                    src={{ $products->find($homeset->highlights['content'][3]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->highlights['content'][3]['product_id'])->photo) : 'assets/images/product/medium-size/special-deals/1-4-290x350.jpg' }}
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1"
                                                href="{{ route('shop') }}">{{ $products->find($homeset->highlights['content'][3]['product_id'])->name }}</a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 pt-7">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="{{ route('shop') }}">
                                                <img class="img-full"
                                                    src={{ $products->find($homeset->highlights['content'][4]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->highlights['content'][4]['product_id'])->photo) : 'assets/images/product/medium-size/special-deals/1-5-290x350.jpg' }}
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name pb-1"
                                                href="{{ route('shop') }}">{{ $products->find($homeset->highlights['content'][4]['product_id'])->name }}</a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html" data-tippy="Add to cart"
                                                            data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 pt-7 pt-lg-0">
                            <div class="product-banner img-hover-effect">
                                <div class="product-banner-img fixed-height img-zoom-effect">
                                    <a href="{{ route('shop') }}">
                                        <img class="img-full"
                                            src={{ $products->find($homeset->highlights['content'][5]['product_id'])->photo ? asset('assets/images/products/' . $products->find($homeset->highlights['content'][5]['product_id'])->photo) : 'assets/images/product/medium-size/special-deals/banner/1-1-290x748.jpg' }}
                                            alt="Product Banner">
                                    </a>
                                    <div class="product-banner-content text-white">
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size btn-primary" href="{{ route('shop') }}">Hemen
                                                al</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-55">
                            <div class="button-wrap">
                                <a class="btn btn-link text-danger with-underline p-0" href="{{ route('shop') }}">
                                    Mağazaya git</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($homeset->comments['status'])
        <div class="testimonial-area bg-white-smoke section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container testimonial-slider">

                            @foreach ($homeset->comments['content'] as $content)
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonial-item">
                                        <div class="user-info mb-3">
                                            <div class="user-shape-wrap">
                                                <div class="user-shape">
                                                    <img src="assets/images/testimonial/user/shape/1.png"
                                                        alt="User Image">
                                                </div>
                                                <div class="user-img">

                                                </div>
                                            </div>
                                            <div class="user-content">
                                                <h4 class="user-name mb-1">{{ $content['customer_name'] }}</h4>
                                                <span class="user-occupation">{{ $content['customer_title'] }}</span>
                                            </div>
                                        </div>
                                        <p class="user-comment mb-6">{{ $content['customer_comment'] }}
                                        </p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i
                                                        class="{{ $content['customer_rating'] >= 1 ? 'fa fa-star' : 'fa fa-star-o' }}"></i>
                                                </li>
                                                <li><i
                                                        class="{{ $content['customer_rating'] >= 2 ? 'fa fa-star' : 'fa fa-star-o' }}"></i>
                                                </li>
                                                <li><i
                                                        class="{{ $content['customer_rating'] >= 3 ? 'fa fa-star' : 'fa fa-star-o' }}"></i>
                                                </li>
                                                <li><i
                                                        class="{{ $content['customer_rating'] >= 4 ? 'fa fa-star' : 'fa fa-star-o' }}"></i>
                                                </li>
                                                <li><i
                                                        class="{{ $content['customer_rating'] >= 5 ? 'fa fa-star' : 'fa fa-star-o' }}"></i>
                                                </li>
                                            </ul>
                                            <span class="title">{{ (int) $content['customer_rating'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="testimonial-pagination with-bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($homeset->bottom_slider['status'])
        <div class="brand-area section-space-y-axis-100 white-smoke-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container brand-slider">
                            <div class="swiper-wrapper">
                                @foreach ($homeset->bottom_slider['content'] as $slider)
                                    <div class="swiper-slide">
                                        <a class="brand-item" href="#">
                                            <img src="{{ asset('assets/images/slider/' . $slider['image'])
                                                ? asset('assets/images/slider/' . $slider['image'])
                                                : 'assets/images/brand/1-1.png' }}"
                                                alt="Brand Image">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif
@endsection
@section('modals')
    <!-- Begin Modal Area -->
    <div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-wrap row">
                        <div class="col-lg-6">
                            <div class="modal-img">
                                <div class="swiper-container modal-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-1-618x578.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-2-618x578.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-3-618x578.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-4-618x578.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-5-618x578.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#" class="single-img">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-6-618x578.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbs-arrow-holder">
                                    <div class="swiper-container modal-thumbs">
                                        <div class="swiper-wrapper">
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-1-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-2-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-3-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-4-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-5-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full"
                                                    src="assets/images/product/large-size/2-6-618x578.jpg"
                                                    alt="Product Thumnail">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="thumbs-button-wrap d-none d-md-block">
                                        <div class="thumbs-button-prev">
                                            <i class="pe-7s-angle-left"></i>
                                        </div>
                                        <div class="thumbs-button-next">
                                            <i class="pe-7s-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-9 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title mb-3">Auto Clutch & Brake</h2>
                                <div class="rating-box-wrap pb-55">
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="review-status ps-4">
                                        <a href="#">( 5 Customer Review )</a>
                                    </div>
                                </div>
                                <div class="selector-wrap color-option">
                                    <span class="selector-title border-bottom-0">Color</span>
                                    <select class="nice-select wide border-bottom-0 rounded-0">
                                        <option value="default">Dark Black With Shadow</option>
                                        <option value="blue">Blue</option>
                                        <option value="green">Green</option>
                                        <option value="red">Red</option>
                                    </select>
                                </div>
                                <div class="selector-wrap pb-55">
                                    <span class="selector-title">Size</span>
                                    <select class="nice-select wide rounded-0">
                                        <option value="medium">Medium Size With Screw</option>
                                        <option value="large">Large Size With Screw</option>
                                        <option value="small">Small Size With Screw</option>
                                    </select>
                                </div>
                                <p class="short-desc mb-9">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute
                                    irure dolor in reprehend in voluptate velit esse cillum dolore</p>
                                <ul class="quantity-with-btn pb-9">
                                    <li class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                        </div>
                                    </li>
                                    <li class="add-to-cart">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="cart.html">Add to
                                            cart</a>
                                    </li>
                                </ul>
                                <div class="product-category pb-3">
                                    <span class="title">SKU:</span>
                                    <ul>
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category pb-3">
                                    <span class="title">Categories :</span>
                                    <ul>
                                        <li>
                                            <a href="#">Office,</a>
                                        </li>
                                        <li>
                                            <a href="#">Home</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category product-tags pb-3">
                                    <span class="title">Tags :</span>
                                    <ul>
                                        <li>
                                            <a href="#">Furniture</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category social-link align-items-center pb-lg-8">
                                    <span class="title pe-3">Share:</span>
                                    <ul>
                                        <li>
                                            <a href="#" data-tippy="Pinterest" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Twitter" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Tumblr" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Dribbble" data-tippy-inertia="true"
                                                data-tippy-animation="shift-away" data-tippy-delay="50"
                                                data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Area End Here -->
@endsection
