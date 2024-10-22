<!-- Begin Footer Area -->
<div class="footer-area">
    <div class="footer-top section-space-y-axis-100 text-lavender"
        data-bg-image="{{ asset('assets/images/background-img/1-4-1920x419.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="widget-item">
                        <div class="footer-logo pb-4">
                            <a href="index.html">
                                <img src="{{ asset('assets/img/' . $data['Front_Settings']->header_logo) }}" alt="Logo"
                                    style="width: 200px;">
                            </a>
                        </div>
                        <p class="short-desc mb-2">{!! $data['Footer_Settings']->footer_text !!}</p>
                        <div class="social-link pt-2">
                            <ul>
                                @if ($data['Footer_Settings']->twitter_link)
                                    <li>
                                        <a href="#" data-tippy="Twitter" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($data['Footer_Settings']->pinterest_link)
                                    <li>
                                        <a href="#" data-tippy="Pinterest" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($data['Footer_Settings']->facebook_link)
                                    <li>
                                        <a href="#" data-tippy="Facebook" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($data['Footer_Settings']->instagram_link)
                                    <li>
                                        <a href="#" data-tippy="Instagram" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($data['Footer_Settings']->youtube_link)
                                    <li>
                                        <a href="#" data-tippy="Youtube" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($data['Footer_Settings']->linkedin_link)
                                    <li>
                                        <a href="#" data-tippy="Linkedin" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($data['Footer_Settings']->whatsapp_link)
                                    <li>
                                        <a href="#" data-tippy="Whatsapp" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($data['Footer_Settings']->telegram_link)
                                    <li>
                                        <a href="#" data-tippy="Telegram" data-tippy-inertia="true"
                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-8 pt-lg-0">
                    <div class="widget-item">
                        <h3 class="widget-title mb-5">İletişim Bilgileri</h3>
                    </div>
                    <div class="widget-contact-info pb-2">
                        <ul>
                            <li>
                                {{ $data['General_Settings']->address }}
                            </li>
                            <li>
                                <a href="mailto://info@example.com">{{  $data['General_Settings']->email }}</a>
                            </li>
                            <li>
                                <a href="tel://+68-120034509">{{  $data['General_Settings']->phone }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End Here -->
