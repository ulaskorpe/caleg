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
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Sliders') }}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin">

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Top Slider') }}</h6>

                                <form class="forms-sample" action="{{ route('admin.updatehomesettings.slider') }}"
                                    method="POST" enctype="multipart/form-data" id="szform">
                                    @csrf

                                    <div class="row mb-3 mt-5 border justify-content-center"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-6 stretch-card text-center">
                                            <div class="card">
                                                <div class="card-body">
                                                    <input class="mt-5" type="file" name="slider_image"
                                                        id="slider_image" accept="image/*"
                                                        style="cursor: pointer !important;" />
                                                </div>

                                                <div class="col-6" id="preview_pic" style="display: none">
                                                    <img id="previewImage" src="#" alt="Preview Image"
                                                    style="max-width: 300px">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Subtitle') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="slider_subtitle"
                                                placeholder="{{ __('Enter Subtitle') }}" id="slider_subtitle" />

                                            <label class="form-label mt-3">{{ __('Title') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="slider_title"
                                                placeholder="{{ __('Enter Title') }}" id="slider_title" />

                                            <label class="form-label mt-3">{{ __('Description') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="slider_description"
                                                placeholder="{{ __('Enter Description') }}" id="slider_description" />


                                            <label class="form-label mt-3">{{ __('Button Text') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="slider_button_text"
                                                placeholder="{{ __('Enter Button Text') }}" id="slider_button_text" />


                                            <label class="form-label mt-3">{{ __('Button Link') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="slider_button_link"
                                                placeholder="{{ __('Enter Button Link') }}" id="slider_button_link" />
                                        </div>

                                        <div class="text-center mt-5">
                                            <button class="btn btn-outline-primary"
                                                type="submit">{{ __('Add Top Slider') }}</button>
                                        </div>
                                    </div>

                                </form>
                                <hr class="mt-5">
                                <label for="" class="form-label" style="font-weight: 600;">
                                    CURRENT SLIDERS
                                </label>
                                <div class="col-md-12">
                                    @foreach ($data['Home_Settings']->slider['content'] as $key => $slider)
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src=" {{ asset('assets/images/slider/') . '/' . preg_replace('/"/', '', json_encode($slider['image'])) }} "
                                                    alt="slider_image" style="width: 80%; background: #fff !important;">
                                            </div>
                                            <div class="col-md-2">
                                                <p>{{ $slider['title'] }}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <p>{{ $slider['description'] }}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ route('admin.deletehomesettings.slider', $key) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Bottom Slider') }}</h6>

                                <form class="forms-sample" action="{{ route('admin.updatehomesettings.bottom_slider') }}"
                                    method="POST" enctype="multipart/form-data" id="szform">
                                    @csrf

                                    <div class="row mb-3 mt-5 border justify-content-center"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-6 stretch-card text-center">
                                            <div class="card">
                                                <div class="card-body">
                                                    <input class="mt-5" type="file" name="bottom_slider_image" id="bottom_slider_image"
                                                        accept="image/*" style="cursor: pointer !important;" />
                                                </div>

                                                <div class="col-6" id="preview_pic_2" style="display: none">
                                                    <img id="bttpreviewImage" src="#" alt="Preview Image"
                                                    style="max-width: 300px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-primary"
                                            type="submit">{{ __('Add Bottom Slider') }}</button>
                                    </div>

                                </form>

                                <hr class="mt-5">
                                <label for="" class="form-label" style="font-weight: 600;">
                                    CURRENT BOTTOM SLIDERS
                                </label>
                                <div class="col-md-12">
                                    @foreach ($data['Home_Settings']->bottom_slider['content'] as $key => $slider)
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src=" {{ asset('assets/images/slider/') . '/' . preg_replace('/"/', '', json_encode($slider['image'])) }} "
                                                    alt="bottom_slider_image"
                                                    style="width: 80%; background: #fff !important;">
                                            </div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <a href="{{ route('admin.deletehomesettings.slider_bottom', $key) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('Customer Comments') }}</h6>

                                <form class="forms-sample" action="{{ route('admin.updatehomesettings.comment') }}"
                                    method="POST" enctype="multipart/form-data" id="szform">
                                    @csrf

                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-6">
                                            <label class="form-label">{{ __('Customer Name') }}:</label>
                                            <input class="form-control" name="comments_customer_name"
                                                placeholder="{{ __('Enter Customer Name') }}"
                                                id="comments_customer_name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">{{ __('Customer Title') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="comments_customer_title"
                                                placeholder="{{ __('Enter Customer Title') }}"
                                                id="comments_customer_title" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Customer Comment') }}:</label>
                                            <input class="form-control mb-4 mb-md-0" name="comments_customer_comment"
                                                placeholder="{{ __('Enter Customer Comment') }}"
                                                id="comments_customer_comment" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Customer Rate') }}:</label>
                                            <select class="js-example-basic-multiple form-select"
                                                name="comments_customer_rate" data-width="100%" required>
                                                <option value="">{{ __('Select Rate') }}</option>
                                                @for ($i = 0; $i < 5; $i++)
                                                    <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="text-center mt-5">
                                        <button class="btn btn-outline-primary"
                                            type="submit">{{ __('Add Customer Comment') }}</button>
                                    </div>

                                </form>

                                <hr class="mt-5">
                                <label for="" class="form-label" style="font-weight: 600;">
                                    CURRENT CUSTOMER COMMENTS
                                </label>
                                <div class="col-md-12">
                                    @foreach ($data['Home_Settings']->comments['content'] as $key => $comment)
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p>{{ $comment['customer_name'] }}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <p>{{ $comment['customer_title'] }}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <p>{{ $comment['customer_comment'] }}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <p>{{ $comment['customer_rating'] }}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ route('admin.deletehomesettings.comment', $key) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
document.getElementById('slider_image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('previewImage').src = e.target.result;
        $('#preview_pic').show();
    };

    reader.readAsDataURL(file);
});

document.getElementById('bottom_slider_image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('bttpreviewImage').src = e.target.result;
        $('#preview_pic_2').show();
    };

    reader.readAsDataURL(file);
});


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

        $('#why_aboutsite_status').click(function() {
            if (!this.checked) {
                $("#why_aboutsite_title").prop("disabled", true);
                $("#why_aboutsite_subtitle").prop("disabled", true);
            } else {
                $("#why_aboutsite_title").prop("disabled", false);
                $("#why_aboutsite_subtitle").prop("disabled", false);
            }
        });

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
