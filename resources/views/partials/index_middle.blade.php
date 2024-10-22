
@if(!empty($products_middle))
<div class="background-img">
    <div class="product-area section-space-y-axis-100">
        <div class="container">
            <div class="section-title pb-55">
                <h2 class="title mb-0">ÖZEL TEKLİFLER</h2>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="product-item-wrap row">



                        @if(!empty($products_middle[1]))
                        <div class="col-lg-8 col-md-6">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="{{ route('shop') }}">
                                        <img class="img-full"
                                            src={{ url('assets/products/'.$products_middle[1]['slug'].'/'.$products_middle[1]['photo'])}}
                                            alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name pb-1"
                                        href="{{ route('shop') }}">{{ $products_middle[1]['title'] }}</a>
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
                         @endif


                         @for($i=2;$i<7;$i++)

                         @if(!empty($products_middle[$i]))
                        <div class="col-lg-4 col-md-6 pt-7 pt-md-0">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="{{ route('shop') }}">
                                        <img class="img-full"
                                        src={{ url('assets/products/'.$products_middle[$i]['slug'].'/'.$products_middle[$i]['photo'])}}
                                        alt="Product Images">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a class="product-name pb-1"
                                        href="{{ route('shop') }}">{{ $products_middle[$i]['title'] }}</a>
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
                            <div class="col-12 pt-55">
                                <div class="button-wrap">
                                    <a class="btn btn-link text-danger with-underline p-0" href="{{ route('shop') }}">
                                        Mağazaya git</a>
                                </div>
                            </div>
                        </div>

                        @endif

                        @endfor





            </div>
        </div>
    </div>
</div>
@endif
