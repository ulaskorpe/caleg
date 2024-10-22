@extends('layouts.master')
@section('title', __('Homepage'))
@section('content')

    <main class="main-content">
        <div class="checkout-area section-space-y-axis-100">
            <div class="container">
                <form action="{{ route('payment') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="checkbox-form">
                                <h3>Fatura Detayları</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Ad <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Soyad <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="lastname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>TC Kimlik No (isteğe bağlı)</label>
                                            <input placeholder="" type="text" name="tc" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Adres <span class="required">*</span></label>
                                            <input placeholder="Cadde, sokak ve mahalle bilgisi" type="text" name="address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="Site, apartman ve daire bilgisi" type="text" name="building" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>İlçe / Şehir <span class="required">*</span></label>
                                            <input type="text" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Ülke <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="country" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Posta Kodu <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="postal_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Adresi <span class="required">*</span></label>
                                            <input placeholder="" type="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Telefon <span class="required">*</span></label>
                                            <input placeholder="" type="text" name="phone" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Şirket Adı (isteğe bağlı)</label>
                                            <input placeholder="" type="text" name="company">
                                        </div>
                                    </div>

                                    <!--
                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc">
                                            <input id="cbox" type="checkbox">
                                            <label for="cbox">Create an account?</label>
                                        </div>
                                        <div id="cbox-info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a returning
                                                customer please login at the top of the page.</p>
                                            <label>Account password <span class="required">*</span></label>
                                            <input placeholder="password" type="password">
                                        </div>
                                    </div>
                                    -->

                                </div>
                                <!--
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>BAŞKA BİR ADRESE GÖNDERİN</label>
                                            <input id="ship-box" type="checkbox">
                                        </h3>
                                    </div>
                                    <div id="ship-box-info" class="row">
                                        <div class="col-md-12">
                                            <div class="myniceselect country-select clearfix">
                                                <label>Country <span class="required">*</span></label>
                                                <select class="myniceselect nice-select wide">
                                                    <option data-display="Bangladesh">Bangladesh</option>
                                                    <option value="uk">London</option>
                                                    <option value="rou">Romania</option>
                                                    <option value="fr">French</option>
                                                    <option value="de">Germany</option>
                                                    <option value="aus">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input placeholder="Street address" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input placeholder="Apartment, suite, unit etc. (optional)"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input placeholder="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input placeholder="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list checkout-form-list-2">
                                            <label>Mesajınız:</label>
                                            <textarea id="checkout-mess" cols="30" rows="10"
                                                placeholder="Siparişinizle ilgili belirtmek istediğiniz diğer şeyleri buraya yazınız"></textarea>
                                        </div>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>SİPARİŞ ÖZETİNİZ</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Ürün Adı</th>
                                                <th class="cart-product-total">Toplam Fiyatı</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (Session::get('shoppingCart'))
                                                @foreach (Session::get('shoppingCart')['data'] as $item)
                                                    <tr class="cart_item">
                                                        <td class="cart-product-name"> {{ $item['product']->name }} -
                                                            <strong class="product-quantity">
                                                                (x{{ $item['quantity'] }})
                                                            </strong></td>
                                                        <td class="cart-product-total" style="text-align: center">
                                                            <span class="amount">
                                                                {{ number_format($item['price'] * $item['quantity'], 2, '.', ',') }} TL
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <td>KDV <strong>(20%)</strong></td>
                                                <td style="text-align: center">
                                                    <span class="amount">
                                                        @if (Session::get('shoppingCart'))
                                                            {{ number_format(Session::get('shoppingCart')['total'] / 5, 2, '.', ',') }} TL
                                                        @endif
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Ödenecek Tutar: </th>
                                                <td style="text-align: center">
                                                    <strong>
                                                        <span class="amount">
                                                            @if (Session::get('shoppingCart'))
                                                                {{ number_format((Session::get('shoppingCart')['total'] * 6) / 5, 2, '.', ',') }} TL
                                                            @endif
                                                        </span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="#payment-1">
                                                    <h5 class="panel-title">
                                                        <a href="#" class="" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true">
                                                            Onaylamadan Önce Okuyunuz
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <p>
                                                            Ödemeyi tamamlamadan önce ürünlerinizi, adetlerini ve fiyatlarını
                                                            kontrol etmeyi unutmayınız. Hata olduğunu düşündüğünüz konuları
                                                            bize <a href="{{ route('contact') }}"><strong>iletişim</strong></a> 
                                                            sayfamız üzerinden bildirebilirsiniz.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-2">
                                                    <h5 class="panel-title">
                                                        <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false">
                                                            Cheque Payment
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <p>Make your payment directly into our bank account. Please use your
                                                            Order
                                                            ID as the payment
                                                            reference. Your order won’t be shipped until the funds have
                                                            cleared
                                                            in
                                                            our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="#payment-3">
                                                    <h5 class="panel-title">
                                                        <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false">
                                                            PayPal
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                    <div class="card-body">
                                                        <p>Make your payment directly into our bank account. Please use your
                                                            Order
                                                            ID as the payment
                                                            reference. Your order won’t be shipped until the funds have
                                                            cleared
                                                            in
                                                            our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input value="ÖDEMEYİ TAMAMLA" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
