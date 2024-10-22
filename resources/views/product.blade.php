@extends('layouts.master')
@section('title', __('Homepage'))
@section('content')

    <main class="main-content">
        <div class="single-product-area section-space-top-100">
            <div class="container">
                <form action="{{ route('put-shopping-cart', $product->slug) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-product-img">
                                <div class="swiper-container single-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="assets/images/product/large-size/2-1-618x578.jpg"
                                                class="single-img gallery-popup">
                                                <img class="img-full"
                                                    src="{{ asset('assets/images/products/' . $product['photo']) }}"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbs-arrow-holder">
                                    <div class="swiper-container single-product-thumbs">
                                        <div class="swiper-wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-9 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title mb-3"> {{ $product->name }} </h2>
                                <div class="price-box pb-3">
                                    <span class="new-price text-danger">0 TL</span>
                                </div>
                                <div class="selector-wrap color-option">
                                    <span class="selector-title border-bottom-0"><strong>Tür
                                            *</strong></span>
                                    <select class="nice-select wide border-bottom-0 rounded-0" name="type_id" required>
                                        <option value="" selected disabled>Ürün türü seçiniz</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="selector-wrap pb-55">
                                    <span class="selector-title"><strong>Boyut
                                            *</strong></span>
                                    <select class="nice-select wide rounded-0" name="size_id" required>
                                        <option value="" selected disabled>Ürün boyutu seçiniz</option>
                                        @foreach ($sizes as $size)
                                            <option value="{{ $size->id }}">
                                                {{ $size->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <span class="short-desc mb-9"> {!! $product->description !!} </span>

                                <span style="font-size: 12px; color: red; font-weight: bold;">
                                    - Lütfen ürünün türünü ve boyutunu seçtiğinizden emin olunuz.
                                </span>

                                <ul class="quantity-with-btn pb-9" style="margin-top: 5px;">
                                    <li class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text"
                                                name="quantity">
                                        </div>
                                    </li>
                                    <li class="add-to-cart">
                                        <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                            Sepete ekle
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>

@endsection
