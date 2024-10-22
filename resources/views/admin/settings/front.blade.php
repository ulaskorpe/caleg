@extends('admin.layouts.master')
@section('title', __('Home Page Settings'))
@section('content')
    <div class="main-wrapper">
        @include('admin.partials.sidebar')
        {{--  @include('admin.partials.themeChange')  --}}
        <div class="page-wrapper">

            @include('admin.partials.topbar')

            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">{{ __('Front Settings') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Home Page') }}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Home Page') }}</h6>
                                <form class="forms-sample" action="{{ route('admin.updatehomesettings') }}" method="POST"
                                    enctype="multipart/form-data" id="szform">
                                    @csrf

                                    <!-- SLIDER -->
                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-6">
                                            <label class="form-label">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" style="cursor: pointer" name="slider_status"
                                                        class="form-check-input" id="slider_status"
                                                        {{  $data['Home_Settings']->slider['status'] ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="slider_status">{{ __('Slider Section') }}</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6" style="text-align: right">
                                            <a class="btn btn-primary" href="{{ route('admin.slidersettings') }}">Add
                                                Slider</a>
                                        </div>
                                    </div>

                                    <!-- CARDS -->
                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-12">
                                            <label class="form-label">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" style="cursor: pointer" name="cards_status"
                                                        class="form-check-input" id="cards_status"
                                                        {{ $data['Home_Settings']->cards['status'] ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="cards_status">{{ __('Cards') }}</label>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="col-md-12 mt-1">
                                            <label class="form-label">{{ __('Card 1') }}:</label>
                                            <select class="js-example-basic-multiple form-select" name="card1_product_id"
                                                style="width: 49%" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}" >
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Button Text') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="card1_button_text"
                                                value="{{$data['Home_Settings']->cards['content'][0]['button_text'] }}"
                                                placeholder="{{ __('Enter Button Text') }}" id="card1_button_text" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Button Link') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="card1_button_link"
                                                value="{{ $data['Home_Settings']->cards['content'][0]['button_link'] }}"
                                                placeholder="{{ __('Enter Button Link') }}" id="card1_button_link" />
                                        </div>
                                        <hr class="mt-3">

                                        <div class="col-md-12 mt-1">
                                            <label class="form-label">{{ __('Card 2') }}:</label>
                                            <select class="js-example-basic-multiple form-select" name="card2_product_id"
                                                style="width: 49%" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                        >
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Button Text') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="card2_button_text"
                                                value="{{ $data['Home_Settings']->cards['content'][1]['button_text'] }}"
                                                placeholder="{{ __('Enter Button Text') }}" id="card2_button_text" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Button Link') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="card2_button_link"
                                                value="{{ $data['Home_Settings']->cards['content'][1]['button_link'] }}"
                                                placeholder="{{ __('Enter Button Link') }}" id="card2_button_link" />
                                        </div>
                                        <hr class="mt-3">

                                        <div class="col-md-12 mt-1">
                                            <label class="form-label">{{ __('Card 3') }}:</label>
                                            <select class="js-example-basic-multiple form-select" name="card3_product_id"
                                                style="width: 49%" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                      >
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Button Text') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="card3_button_text"
                                                value="{{ $data['Home_Settings']->cards['content'][2]['button_text'] }}"
                                                placeholder="{{ __('Enter Button Text') }}" id="card3_button_text" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Button Link') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="card3_button_link"
                                                value="{{ $data['Home_Settings']->cards['content'][2]['button_link'] }}"
                                                placeholder="{{ __('Enter Button Link') }}" id="card3_button_link" />
                                        </div>
                                        <hr class="mt-3">

                                    </div>

                                    <!-- SERVICES -->
                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-12">
                                            <label class="form-label">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" style="cursor: pointer" name="service_status"
                                                        class="form-check-input" id="service_status"
                                                        {{ $data['Home_Settings']->services['status'] ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="service_status">{{ __('Services') }}</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Service 1') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="service1_title"
                                                value="{{ $data['Home_Settings']->services['content'][0]['title'] }}"
                                                placeholder="{{ __('Enter Service Title') }}" id="service1_title" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">*</label>
                                            <input class="form-control mb-4 mb-md-0" name="service1_description"
                                                value="{{ $data['Home_Settings']->services['content'][0]['description'] }}"
                                                placeholder="{{ __('Enter Service Description') }}"
                                                id="service1_description" />
                                        </div>
                                        <hr class="mt-3">
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Service 2') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="service2_title"
                                                value="{{ $data['Home_Settings']->services['content'][1]['title'] }}"
                                                placeholder="{{ __('Enter Service Title') }}" id="service2_title" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">*</label>
                                            <input class="form-control mb-4 mb-md-0" name="service2_description"
                                                value="{{ $data['Home_Settings']->services['content'][1]['description'] }}"
                                                placeholder="{{ __('Enter Service Description') }}"
                                                id="service2_description" />
                                        </div>
                                        <hr class="mt-3">
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Service 3') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="service3_title"
                                                value="{{ $data['Home_Settings']->services['content'][2]['title'] }}"
                                                placeholder="{{ __('Enter Service Title') }}" id="service3_title" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">*</label>
                                            <input class="form-control mb-4 mb-md-0" name="service3_description"
                                                value="{{ $data['Home_Settings']->services['content'][2]['description'] }}"
                                                placeholder="{{ __('Enter Service Description') }}"
                                                id="service3_description" />
                                        </div>
                                    </div>

                                    <!-- HIGHLIGHTS -->
                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-12">
                                            <label class="form-label">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" style="cursor: pointer"
                                                        name="highlights_status" class="form-check-input"
                                                        id="highlights_status"
                                                        {{ $data['Home_Settings']->highlights['status'] ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="highlights_status">{{ __('Highlights') }}</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Highlight 1') }}:</label>
                                            <select class="js-example-basic-multiple form-select"
                                                name="highlight1_product_id" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                        {{ $product['id'] ==$data['Home_Settings']->highlights['content'][0]['product_id'] ? 'selected' : '' }}>
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Highlight 2') }}:</label>
                                            <select class="js-example-basic-multiple form-select"
                                                name="highlight2_product_id" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                        {{ $product['id'] == $data['Home_Settings']->highlights['content'][1]['product_id'] ? 'selected' : '' }}>
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <hr class="mt-3">
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Highlight 3') }}:</label>
                                            <select class="js-example-basic-multiple form-select"
                                                name="highlight3_product_id" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                        {{ $product['id'] == $data['Home_Settings']->highlights['content'][2]['product_id'] ? 'selected' : '' }}>
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Highlight 4') }}:</label>
                                            <select class="js-example-basic-multiple form-select"
                                                name="highlight4_product_id" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                        {{ $product['id'] ==$data['Home_Settings']->highlights['content'][3]['product_id'] ? 'selected' : '' }}>
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <hr class="mt-3">
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Highlight 5') }}:</label>
                                            <select class="js-example-basic-multiple form-select"
                                                name="highlight5_product_id" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                        {{ $product['id'] == $data['Home_Settings']->highlights['content'][4]['product_id'] ? 'selected' : '' }}>
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Highlight 6') }}:</label>
                                            <select class="js-example-basic-multiple form-select"
                                                name="highlight6_product_id" data-width="100%" required>
                                                <option value="">{{ __('Select Product') }}</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product['id'] }}"
                                                        {{ $product['id'] == $data['Home_Settings']->highlights['content'][5]['product_id'] ? 'selected' : '' }}>
                                                        {{ $product['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- COMMENTS -->
                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-6">
                                            <label class="form-label">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" style="cursor: pointer" name="comments_status"
                                                        class="form-check-input" id="comments_status"
                                                        {{ $data['Home_Settings']->comments['status'] ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="comments_status">{{ __('Comments') }}</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6" style="text-align: right">
                                            <a class="btn btn-primary" href="{{ route('admin.slidersettings') }}">Add
                                                Customer Comment</a>
                                        </div>
                                    </div>

                                    <!-- BOTTOM SLIDER -->
                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-6">
                                            <label class="form-label">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" style="cursor: pointer"
                                                        name="bottom_slider_status" class="form-check-input"
                                                        id="bottom_slider_status"
                                                        {{$data['Home_Settings']->bottom_slider['status'] ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="bottom_slider_status">{{ __('Bottom Slider') }}</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6" style="text-align: right">
                                            <button class="btn btn-primary">Add Slider</button>
                                        </div>
                                    </div>

                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-primary"
                                            type="submit">{{ __('Update Home Page') }}</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.partials.footer')

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#video_status').click(function() {
            if (!this.checked) {
                $("#video_link").prop("disabled", true);
                $("#video_title").prop("disabled", true);
                $("#video_subtitle").prop("disabled", true);
            } else {
                $("#video_link").prop("disabled", false);
                $("#video_title").prop("disabled", false);
                $("#video_subtitle").prop("disabled", false);
            }
        });
        $('#see_current_video_link').click(function() {
            if (!this.checked) {
                document.getElementById("current_video_link").style.display = "none";
            } else {
                document.getElementById("current_video_link").style.display = "block";
            }
        });
    </script>

    <script>
        $('#suggested_posts_status').click(function() {
            if (!this.checked) {
                $("#suggested_posts_title").prop("disabled", true);
                $("#suggested_posts_subtitle").prop("disabled", true);
                $("#suggested_posts_quantity").prop("disabled", true);
            } else {
                $("#suggested_posts_title").prop("disabled", false);
                $("#suggested_posts_subtitle").prop("disabled", false);
                $("#suggested_posts_quantity").prop("disabled", false);
            }
        });
    </script>

    <script>
        $('#new_populer_posts_status').click(function() {
            if (!this.checked) {
                $("#new_populer_posts_quantity").prop("disabled", true);
            } else {
                $("#new_populer_posts_quantity").prop("disabled", false);
            }
        });


        $('#special_populer_posts_status').click(function() {
            if (!this.checked) {
                $("#special_populer_posts_quantity").prop("disabled", true);
            } else {
                $("#special_populer_posts_quantity").prop("disabled", false);
            }
        });

        $('#populer_posts_status').click(function() {
            if (!this.checked) {
                $("#populer_posts_title").prop("disabled", true);
                $("#populer_posts_subtitle").prop("disabled", true);
                $("#new_populer_posts_quantity").prop("disabled", true);
                $("#new_populer_posts_status").prop("disabled", true);
                $("#special_populer_posts_status").prop("disabled", true);
                $("#special_populer_posts_quantity").prop("disabled", true);
            } else {
                $("#populer_posts_title").prop("disabled", false);
                $("#populer_posts_subtitle").prop("disabled", false);
                $("#new_populer_posts_status").prop("disabled", false);
                $("#special_populer_posts_status").prop("disabled", false);

                if (!document.getElementById("new_populer_posts_status").checked) {
                    $("#new_populer_posts_quantity").prop("disabled", true);
                } else {
                    $("#new_populer_posts_quantity").prop("disabled", false);
                }

                if (!document.getElementById("special_populer_posts_status").checked) {
                    $("#special_populer_posts_quantity").prop("disabled", true);
                } else {
                    $("#special_populer_posts_quantity").prop("disabled", false);
                }
            }
        });
    </script>

    <script>
        $('#why_aboutsite_status').click(function() {
            if (!this.checked) {
                $("#why_aboutsite_title").prop("disabled", true);
                $("#why_aboutsite_subtitle").prop("disabled", true);
            } else {
                $("#why_aboutsite_title").prop("disabled", false);
                $("#why_aboutsite_subtitle").prop("disabled", false);
            }
        });
    </script>

    <script>
        $('#testimonial_status').click(function() {
            if (!this.checked) {
                $("#testimonial_title").prop("disabled", true);
                $("#testimonial_subtitle").prop("disabled", true);
                $("#testimonial_background").prop("disabled", true);
            } else {
                $("#testimonial_title").prop("disabled", false);
                $("#testimonial_subtitle").prop("disabled", false);
                $("#testimonial_background").prop("disabled", false);
            }
        });

        $('#see_current_testimonial_background').click(function() {
            if (!this.checked) {
                document.getElementById("current_testimonial_background").style.display = "none";
            } else {
                document.getElementById("current_testimonial_background").style.display = "block";
            }
        });
    </script>
@endsection
