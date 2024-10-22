@extends('layouts.master')
@section('title', __('Homepage'))
@section('content')

    <!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">BİZİMLE İLETİŞİME GEÇİN</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Anasayfa/</a>
                                </li>
                                <li>İletişim</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Shipping Area -->
        <div class="shipping-area shipping-style-2 section-space-y-axis-100">
            <div class="container">
                <div class="row shipping-wrap py-5 py-xl-0">
                    <div class="col-lg-4 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/phone.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Telefon</h2>
                                <p class="short-desc mb-0">{{ $generalset->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/message.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Email</h2>
                                <p class="short-desc mb-0">{{ $generalset->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="assets/images/shipping/icon/home.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h2 class="title">Adres:</h2>
                                <p class="short-desc mb-0">{{ $general_settings->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

        <div class="contact-form-area section-space-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form-wrap">
                            <div class="contact-img">
                                <img src="assets/images/contact/1-1-520x278.png" alt="Contact Images">
                            </div>
                            <form id="contact-form" class="contact-form"
                                action="https://whizthemes.com/mail-php/mamunur/tromic/tromic.php">
                                <h4 class="contact-form-title mb-7">Bize Yazın</h4>
                                <div class="group-input">
                                    <div class="form-field me-xl-6">
                                        <input type="text" name="name" id="con_name" placeholder="İsim*"
                                            class="input-field">
                                    </div>
                                    <div class="form-field mt-6 mt-xl-0">
                                        <input type="text" name="email" id="con_email" placeholder="Email*"
                                            class="input-field">
                                    </div>
                                </div>
                                <div class="form-field mt-6">
                                    <textarea name="msg" id="con_message" placeholder="Mesajınız*" class="textarea-field"></textarea>
                                </div>
                                <div class="button-wrap mt-8">
                                    <button type="submit" value="submit"
                                        class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0"
                                        name="submit">Gönder</button>
                                    <p class="form-message mt-3 mb-0"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="contact-with-map">
            <div class="contact-map">
                <iframe class="contact-map-size"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1613802584124!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        -->
    </main>
    <!-- Main Content Area End Here -->

@endsection
