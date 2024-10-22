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
                        <li class="breadcrumb-item"><a href="">{{ __('Footer Settings') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Footer') }}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">{{ __('FOOTER') }}</h6>
                                <form class="forms-sample" action="{{ route('admin.settings.footer.update') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3 mt-5 border"
                                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                        <div class="col-md-12">
                                            <label class="form-label">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" style="cursor: pointer" name="footer_status"
                                                        class="form-check-input" id="footer_status"
                                                        {{ $data['Footer_Settings']->status ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="footer_status">{{ __('Footer') }}</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Twitter') }}
                                                <i data-feather="twitter" style="width: 15px; margin-left:4px"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="twitter_link" id="twitter_link"
                                                placeholder="{{ __('Enter Twitter Link') }}"
                                                value="{{  $data['Footer_Settings']->twitter_link }}" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Instagram') }}
                                                <i data-feather="instagram" style="width: 15px; margin-left:4px"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="instagram_link"
                                                id="instagram_link" placeholder="{{ __('Enter Instagram Link') }}"
                                                value="{{  $data['Footer_Settings']->instagram_link }}" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Facebook') }}
                                                <i data-feather="facebook" style="width: 15px;"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="facebook_link" id="facebook_link"
                                                placeholder="{{ __('Enter Facebook Link') }}"
                                                value="{{  $data['Footer_Settings']->facebook_link }}" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Youtube') }}
                                                <i data-feather="youtube" style="width: 15px; margin-left:4px"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="youtube_link" id="youtube_link"
                                                placeholder="{{ __('Enter Youtube Link') }}"
                                                value="{{  $data['Footer_Settings']->youtube_link }}" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Linkedin') }}
                                                <i data-feather="linkedin" style="width: 15px;"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="linkedin_link" id="linkedin_link"
                                                placeholder="{{ __('Enter Linkedin Link') }}"
                                                value="{{  $data['Footer_Settings']->linkedin_link }}" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Whatsapp') }}
                                                <i data-feather="message-circle" style="width: 15px; margin-left:4px"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="whatsapp_link" id="whatsapp_link"
                                                placeholder="{{ __('Enter Whatsapp Link') }}"
                                                value="{{  $data['Footer_Settings']->whatsapp_link }}" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Telegram') }}
                                                <i data-feather="type" style="width: 15px;"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="telegram_link" id="telegram_link"
                                                placeholder="{{ __('Enter Telegram Link') }}"
                                                value="{{ $data['Footer_Settings']->telegram_link }}" />
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Pinterest') }}
                                                <i data-feather="crop" style="width: 15px; margin-left:4px"></i>
                                            </label>
                                            <input class="form-control mb-4 mb-md-0" name="pinterest_link"
                                                id="pinterest_link" placeholder="{{ __('Enter Pinterest Link') }}"
                                                value="{{ $data['Footer_Settings']->pinterest_link }}" />
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12 mt-3">
                                                <label class="form-label">{{ __('Footer Text') }}</label>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea class="form-control" name="footer_text" id="tinymceExample" rows="10">
                                                            {{  $data['Footer_Settings']->footer_text }}
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
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
        $(document).on('submit', '#szformupdate', function(e) {
            e.preventDefault();
            $('.loader').show();

            var szform = $(this);
            $('button.submit').prop('disabled', true);
            $.ajax({
                method: "POST",
                url: $(this).prop('action'),
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {

                    $('.loader').hide();
                    $('button.submit').prop('disabled', false);

                    $(window).scrollTop(0);

                    if (!data.status) {
                        Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 7000,
                            timerProgressBar: true,
                        }).fire({
                            icon: 'error',
                            title: data.message
                        });

                    } else if (data.status == 404) {
                        location.replace(data.location)
                    } else {

                        let banner_path = "{{ config('app.url') }}/assets/images/categories/" + data
                            .banner;
                        $('#banner_view').replaceWith('<img src="' + banner_path +
                            '" alt="banner image" id="banner_view">');

                        Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 7000,
                            timerProgressBar: true,
                        }).fire({
                            icon: 'success',
                            title: data.message
                        });
                    }



                },
                error: function(data) {
                    $('.loader').hide();
                    $('button.submit').prop('disabled', false);

                    $(window).scrollTop(0);

                    if (!data.status) {
                        Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 7000,
                            timerProgressBar: true,
                        }).fire({
                            icon: 'error',
                            title: data.message
                        });
                    } else {
                        Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 7000,
                            timerProgressBar: true,
                        }).fire({
                            icon: 'error',
                            title: 'Somthing Went Wrong'
                        });
                    }
                }
            });

        });
    </script>

    <script src="{{ asset('assets/admin/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/select2/select2.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.js') }}"></script>
@endsection
