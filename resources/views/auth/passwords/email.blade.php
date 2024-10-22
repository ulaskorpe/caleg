@extends('layouts.master')
@section('title', __('Forgotten Password'))
@section('styles')
    <style>
        .swal2-popup {
            margin-top: 10% !important;
        }
    </style>
@endsection
@section('content')
    <main class="main-content">
        <div class="login-register-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <form action="{{ route('user.forget.password.post') }}" method="POST" id="forgetform">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">{{ __('Forgot Password') }}</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>{{ __('Email Address') }}*</label>
                                        <input type="email" name="email" placeholder="{{ __('Email Address') }}" required>
                                    </div>
                                    <div class="col-lg-12 pt-5 text-center">
                                        <button class="btn btn-custom-size lg-size btn-primary">{{ __('Send') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $(document).on('submit','#forgetform',function(e){
            e.preventDefault();
            $('.loader').show();
        
            var szform = $(this);
            $('button.submit').prop('disabled',true);
            $.ajax({
            method:"POST",
            url:$(this).prop('action'),
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
        
                $('.loader').hide();
                $('button.submit').prop('disabled',false);
                
                $(window).scrollTop(0);

                if(data.status){

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
                    location.replace(data.location)
                    
                }else{

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

                }
        
            },
            error: function(data) { 
                $('.loader').hide();
                $('button.submit').prop('disabled',false);
                
                $(window).scrollTop(0);

                if(!data.status){
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
                }else{
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
@endsection