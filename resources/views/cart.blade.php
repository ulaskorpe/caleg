@extends('layouts.master')
@section('title', __('Homepage'))
@section('content')

    <main class="main-content">

        <div class="cart-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Sil</th>
                                            <th class="product-thumbnail">Resim</th>
                                            <th class="cart-product-name">Ürün</th>
                                            <th class="product-price">Birim Fiyat</th>
                                            <th class="product-quantity">Adet</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (Session::get('shoppingCart'))
                                            @foreach (Session::get('shoppingCart')['data'] as $item)
                                                <tr>
                                                    <td class="product_remove">
                                                        <a href="#">
                                                            <i class="pe-7s-trash" data-tippy="Sil"
                                                                data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                                data-tippy-delay="50" data-tippy-arrow="true"
                                                                data-tippy-theme="sharpborder"></i>
                                                        </a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img class="img-full"
                                                                src="{{ asset('assets/images/products/' . $item['product']->thumbnail) }}"
                                                                alt="Product Image" style="max-width: 100px">
                                                        </a>
                                                    </td>
                                                    <td class="product-name"><a
                                                            href="#">{{ $item['product']->name }}</a>
                                                    </td>
                                                    <td class="product-price"><span class="amount">{{ number_format($item['price'], 2, '.', ',') }}
                                                            TL</span>
                                                    </td>
                                                    <td class="quantity">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box"
                                                                value="{{ $item['quantity'] }}" type="text" disabled>
                                                            <a href="{{ route('update-shopping-cart', [
                                                                $item['product']->slug,
                                                                $item['type']->id,
                                                                $item['size']->id,
                                                                $item['quantity'] - 1,
                                                            ]) }}"
                                                                class="dec qtybutton" style="z-index: 100">
                                                                <i class="fa fa-minus"></i>
                                                            </a>
                                                            <a href="{{ route('update-shopping-cart', [
                                                                $item['product']->slug,
                                                                $item['type']->id,
                                                                $item['size']->id,
                                                                $item['quantity'] + 1,
                                                            ]) }}"
                                                                class="inc qtybutton" style="z-index: 100">
                                                                <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal"><span
                                                            class="amount">{{ number_format($item['price'] * $item['quantity'], 2, '.', ',') }}
                                                            TL</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Alt Toplam</h2>
                                        <ul>
                                            <li>KDV (20%) <span>{{ number_format(Session::get('shoppingCart')['total'] / 5, 2, '.', ',') }} TL</span>
                                            </li>
                                            <li>Toplam <span>{{ number_format(Session::get('shoppingCart')['total'] * (6 / 5), 2, '.', ',') }} TL</span>
                                            </li>
                                        </ul>
                                        <a href="{{ route('checkout') }}">Ödemeye Geç </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
