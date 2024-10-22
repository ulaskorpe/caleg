<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}} - @yield('title')</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="{{ $data ['General_Settings']->site_desciption}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if(isset($settings['settings']['Seo_Settings']->meta_tags) )

        <meta name="keywords" content="{{$data['settings']['Seo_Settings']->meta_tags }}">


    @endif
    @if(isset($data['Seo_Settings']->meta_description) )


    <meta name="description" content="{{ $data ['Seo_Settings']->meta_description }}">
    @endif
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/'.$data['General_Settings']->site_desciption)}}" />

    <!-- CSS
    ============================================ -->

    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/vendor/Pe-icon-7-stroke.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/ion.rangeSlider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/sweetalert2/sweetalert2.min.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    @yield('styles')
</head>
