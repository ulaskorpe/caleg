@extends('layouts.master')
@section('title', __('Homepage'))
@section('content')

    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('assets/img/' . $front_settings->shopimg) }}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                        <div class="sidebar-area style-2">
                            <div class="widgets-area mb-9">
                                <h2 class="widgets-title mb-5">Ürün Kategorileri</h2>
                                <div class="widgets-item">
                                    <ul class="widgets-category">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('shop', $category->slug) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                        <div class="product-topbar">
                            <ul>
                                <li class="page-count">
                                    <span>{{ $products->count() }} </span> ürün bulundu
                                </li>
                                <li class="product-view-wrap">
                                    <ul class="nav" role="tablist">
                                        <li class="grid-view" role="presentation">
                                            <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view"
                                                role="tab" aria-selected="true">
                                                <i class="fa fa-th"></i>
                                            </a>
                                        </li>
                                        <li class="list-view" role="presentation">
                                            <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab"
                                                aria-selected="true">
                                                <i class="fa fa-th-list"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content text-charcoal pt-8">
                            <div class="tab-pane fade show active" id="grid-view" role="tabpanel"
                                aria-labelledby="grid-view-tab">
                                <div class="product-grid-view row">
                                    @foreach ($products as $product)
                                        @if ($product != null)
                                            <div class="col-xl-4 col-sm-6 pt-6">
                                                <div class="product-item">
                                                    <div class="product-img img-zoom-effect">
                                                        <a href="single-product-variable.html">
                                                            <img class="img-full"
                                                                src="{{ asset('assets/images/products/' . $product['photo'])
                                                                    ? asset('assets/images/products/' . $product['photo'])
                                                                    : 'assets/images/product/medium-size/shop/1-2-290x350.jpg' }}"
                                                                alt="Product Images">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <a class="product-name pb-1"
                                                            href="single-product-variable.html">{{ $product->name }}</a>
                                                        <div class="product-add-action">
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('product', [$product->slug, $slug]) }}"
                                                                        data-tippy="Add to cart" data-tippy-inertia="true"
                                                                        data-tippy-animation="shift-away"
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
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                                <div class="product-list-view row">
                                    @foreach ($products as $product)
                                        @if ($product != null)
                                            <div class="col-12 pt-8">
                                                <div class="product-list-item">
                                                    <div class="product-list-img img-zoom-effect">
                                                        <a href="single-product-variable.html">
                                                            <img class="img-full"
                                                                src="{{ asset('assets/images/products/' . $product['photo'])
                                                                    ? asset('assets/images/products/' . $product['photo'])
                                                                    : 'assets/images/product/medium-size/shop/1-2-290x350.jpg' }}"
                                                                alt="Product Images">
                                                        </a>
                                                    </div>
                                                    <div class="product-list-content" style="margin-left: 12px">
                                                        <a class="product-name pb-2"
                                                            href="single-product-variable.html">{{ $product->name }}</a>
                                                        <p class="short-desc mb-0">{!! $product->description !!}</p>
                                                        <div class="product-add-action">

                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('product', [$product->slug, $slug]) }}"
                                                                        data-tippy="Add to cart" data-tippy-inertia="true"
                                                                        data-tippy-animation="shift-away"
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
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
