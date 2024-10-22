<!-- Begin Main Header Area -->
<header class="main-header-area">
    <div class="header-top border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="header-top-left">
                        <ul class="dropdown-wrap text-matterhorn">
                            <li class="dropdown">
                                <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButton"
                                    data-bs-toggle="dropdown" aria-label="language" aria-expanded="false">
                                    Türkçe
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="languageButton">
                                    <li><a class="dropdown-item" href="#">Türkçe</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="currencyButton"
                                    data-bs-toggle="dropdown" aria-label="currency" aria-expanded="false">
                                    TRY
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="currencyButton">
                                    <li><a class="dropdown-item" href="#">TRY</a></li>
                                </ul>
                            </li>
                            <li>
                                Bize Ulaşın:
                                <a href="#">{{ $data['General_Settings']->phone}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-top-right text-matterhorn">
                        <p class="shipping mb-0"><span>{{  $data['General_Settings']->shipping_price  }} TL</span> üzerine
                            ücretsiz kargo </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-sticky py-6 py-lg-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-middle-wrap position-relative">

                        <a href="{{ route('home') }}" class="header-logo">
                            <img src="{{ asset('assets/img/' . $data['Front_Settings']->header_logo ) }}" alt="Header Logo"
                                style="max-width: 200px">
                        </a>

                        <div class="main-menu d-none d-lg-block">
                            <nav class="main-nav">
                                <ul>
                                    <li class="drop-holder">
                                        <a href="{{ route('home') }}">Anasayfa</a>
                                    </li>
                                    <li class="megamenu-holder">
                                        <a href="{{ route('shop') }}">Mağaza
                                            <i class="pe-7s-angle-down"></i>
                                        </a>
                                        <ul class="drop-menu megamenu">
                                            <li>
                                                <span class="title">KATEGORİLER</span>
                                                <ul style="max-height: 314px; overflow-y: auto">
                                                    @foreach ( $data['Categories'] as $category)
                                                        <li><a
                                                                href="{{ route('shop', $category->slug) }}">{{ $category->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="title">ÜRÜNLERİM</span>
                                                <ul>
                                                <!--
                                                    <li>
                                                        <a href="{{ route('user.dashboard') }}">Hesabım</a>
                                                    </li>
                                                -->
                                                    <li>
                                                        <a href="{{ route('cart') }}">Alışveriş Sepeti</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('checkout') }}">Ödeme</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="width: 50%">
                                                <div class="banner">
                                                    <img src="{{ asset('assets/img/' .$data['Front_Settings']->shopimg) }}"
                                                        alt="Menu Banner">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    @if (isset($data['Pages']))
                                        <li class="drop-holder">
                                            <a href="#">
                                                {{ __('SAYFALAR') }}
                                                <i class="pe-7s-angle-down"></i>
                                            </a>
                                            <ul class="drop-menu">
                                                @foreach ($data['Pages'] as $page)
                                                    <li>
                                                        <a href="{{ route('page', $page->slug) }}">
                                                            {{ json_decode($page->content, true)['name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">İLETİŞİM</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul>
                                <li class="dropdown d-none d-lg-block">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                        id="settingButton" data-bs-toggle="dropdown" aria-label="setting"
                                        aria-expanded="false">
                                        <i class="pe-7s-user"></i>
                                    </button>
                                    <ul class="dropdown-menu right-side" aria-labelledby="settingButton">
                                        @auth

                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.dashboard') }}">{{ __('My account') }}</a>
                                            </li>

                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.logout') }}">{{ __('Logout') }}</a></li>
                                        @else
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.login') }}"> {{ __('Login') }}</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('user.register') }}">
                                                    {{ __('Register') }}
                                                </a>
                                            </li>
                                        @endauth
                                    </ul>
                                </li>
                                <li>
                                    <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                </li>
                                <li class="minicart-wrap me-3 me-lg-0">
                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                        <i class="pe-7s-shopbag"></i>
                                        @if (Session::get('shoppingCart'))
                                            <span
                                                class="quantity">{{ sizeof(Session::get('shoppingCart')['data']) }}</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="mobile-menu_wrap d-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                        <i class="pe-7s-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="tromic-offcanvas-body">
            <div class="inner-body">
                <div class="tromic-offcanvas-top">
                    <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                </div>
                <div class="offcanvas-user-info text-center px-6 pb-5">
                    <div class=" text-silver">
                        <p class="shipping mb-0">Free delivery on order over <span class="text-primary">$200</span>
                        </p>
                    </div>
                    <ul class="dropdown-wrap justify-content-center text-silver">
                        <li class="dropdown dropup">
                            <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                <li><a class="dropdown-item" href="#">French</a></li>
                                <li><a class="dropdown-item" href="#">Italian</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropup">
                            <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button"
                                id="currencyButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                USD
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                                <li><a class="dropdown-item" href="#">GBP</a></li>
                                <li><a class="dropdown-item" href="#">ISO</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropup">
                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="pe-7s-users"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                @auth
                                    <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">My account</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('user.logout') }}">{{ __('Logout') }}</a></li>
                                @else
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('user.login') }}">{{ __('Login') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('user.register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </li>
                        <li>
                            <a href="wishlist.html">
                                <i class="pe-7s-like"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-menu_area">
                    <nav class="offcanvas-navigation">
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span class="mm-text">About Us</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Shop
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop Layout
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop.html">
                                                    <span class="mm-text">Shop Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-fullwidth.html">
                                                    <span class="mm-text">Shop Grid Fullwidth</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-right-sidebar.html">
                                                    <span class="mm-text">Shop Right Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-fullwidth.html">
                                                    <span class="mm-text">Shop List Fullwidth</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-left-sidebar.html">
                                                    <span class="mm-text">Shop List Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-right-sidebar.html">
                                                    <span class="mm-text">Shop List Right Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Product Style
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="single-product.html">
                                                    <span class="mm-text">Single Product Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-group.html">
                                                    <span class="mm-text">Single Product Group</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-variable.html">
                                                    <span class="mm-text">Single Product Variable</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-sale.html">
                                                    <span class="mm-text">Single Product Sale</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-sticky.html">
                                                    <span class="mm-text">Single Product Sticky</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-affiliate.html">
                                                    <span class="mm-text">Single Product Affiliate</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Product Related
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            @auth
                                                <li>
                                                    <a href="{{ route('user.dashboard') }}">
                                                        <span class="mm-text">{{ __('My Account') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.logout') }}">
                                                        <span class="mm-text">{{ __('Logout') }}</span>
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('user.login') }}">
                                                        <span class="mm-text">{{ __('Login') }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.register') }}">
                                                        <span class="mm-text">{{ __('Register') }}</span>
                                                    </a>
                                                </li>
                                            @endauth
                                            <li>
                                                <a href="cart.html">
                                                    <span class="mm-text">Shopping Cart</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <span class="mm-text">Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <span class="mm-text">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">
                                                    <span class="mm-text">Checkout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Pages
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="faq.html">
                                            <span class="mm-text">Frequently Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            <span class="mm-text">Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Blog
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Blog Holder
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog.html">
                                                    <span class="mm-text">Blog Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-listview.html">Blog List View</a>
                                            </li>
                                            <li>
                                                <a href="blog-detail.html">Blog Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <span class="mm-text">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away"
                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-search">
                        <span class="searchbox-info">Start typing and press Enter to search or ESC to close</span>
                        <form action="#" class="hm-searchbox">
                            <input type="text" name="Search entire store here..."
                                value="Search entire store here..."
                                onblur="if(this.value==''){this.value='Search entire store here...'}"
                                onfocus="if(this.value=='Search entire store here...'){this.value=''}">
                            <button class="search-btn" type="submit" aria-label="searchbtn"><i
                                    class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="tromic-offcanvas-body">
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4 class="mb-0">Alışveriş Sepeti</h4>
                    <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close"
                            data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                            data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                </div>
                <ul class="minicart-list">
                    @if (Session::get('shoppingCart'))
                        @foreach (Session::get('shoppingCart')['data'] as $item)
                            <li class="minicart-product">
                                <a class="product-item_remove"
                                    href="{{ route('remove-shopping-cart', [$item['product']->slug, $item['type']->id, $item['size']->id]) }}"><i
                                        class="pe-7s-trash" data-tippy="Bu ürünü kaldırın?" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                                <a href="#" class="product-item_img">
                                    <img class="img-full"
                                        src="{{ asset('assets/images/products/' . $item['product']->thumbnail) }}"
                                        alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="#">{{ $item['product']->name }}</a>
                                    <span class="product-item_quantity">{{ $item['quantity'] }} x
                                        {{ number_format($item['price'], 2, '.', ',') }} TL</span>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="minicart-item_total">
                <span>Toplam</span>
                <span class="ammount">{{ Session::get('shoppingCart') ? number_format($item['price'], 2, '.', ',') : 0 }}
                    TL (+ KDV)</span>
            </div>
            <div class="group-btn_wrap d-grid gap-2">
                <a href="{{ route('checkout') }}" class="btn btn-dark btn-primary-hover">Ödemeye Geç</a>
            </div>
        </div>
    </div>
    <div class="global-overlay"></div>
</header>
<!-- Main Header Area End Here -->
