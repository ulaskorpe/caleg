@extends('admin.layouts.master')
@section('title',__('Login'))
@section('styles')
  <style>
    .auth-page .auth-side-wrapper {
      background-image: url('{{asset('assets/admin/images/others/admin_login.png')}}') ;
  }
  </style>
@endsection
@section('content')
<div class="main-wrapper">
  <div class="page-wrapper full-page">
    <div class="page-content d-flex align-items-center justify-content-center">

      <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
          <div class="card">
            <div class="row">
              <div class="col-md-4 pe-md-0">
                <div class="auth-side-wrapper">

                </div>
              </div>
              <div class="col-md-8 ps-md-0">
                <div class="auth-form-wrapper px-4 py-5">
                  <a href="#" class="noble-ui-logo d-block mb-2">{{explode(' ',config('app.name'))[0]}}<span>Nist</span></a>
                  <h5 class="text-muted fw-normal mb-4">{{__('Admin Login')}} {{(' =>')}} ( {{request()->ip()}} )</h5>
                  <form class="forms-sample" action="{{route('admin.post.login')}}" method="POST" id="loginForm">
                    @csrf
                    @include('alerts.admin.form-login')
                    <div class="mb-3">
                      <label for="userEmail" class="form-label">{{__('Email')}}</label>
                      <input class="form-control" name="email" type="email" placeholder="{{__('Enter Email Address')}}" autofocus required>
                    </div>
                    <div class="mb-3">
                      <label for="userPassword" class="form-label">Password</label>
                      <input class="form-control" id="userPassword" autocomplete="current-password" name="password" type="password" placeholder="{{__('Enter Your password')}}" autofocus required>
                    </div>
                    <div class="text-center mt-5">
                      <button class="btn btn-primary me-2 mb-2 mb-md-0 text-white" type="submit">{{__('Login')}}</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
{{--  @section('scripts')

  <script>
    $("#loginForm").on('submit', function(event){
      $('.btn').prop('disabled',true);
        event.preventDefault();

        var url = $(this).attr('data-action');
        $('.loader').show();

        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                if(response.errors){
                  $('.alert-info').hide();
                  $('.alert-success').hide();
                  $('.alert-danger').show();
                  $('.alert-danger p').html(response.errors);
                  $('.btn').prop('disabled',false);
                  $('.loader').hide();
                  
                }else{
                  $('.alert-info').hide();
                  $('.alert-danger').hide();
                  $('.alert-success').show();
                  $('.alert-success p').html("Logged in succesfully..");
                  $('.loader').hide();

                  location.reload();
                }
            },
            error: function(response) {
                  $('.alert-info').hide();
                  $('.alert-success').hide();
                  $('.alert-danger').show();
                  $('.alert-danger p').html("Somthing went wrong!");
                  $('.btn').prop('disabled',false);
                  $('.loader').hide();
            }
        });
    });
  </script>



  <script src="{{asset('assets/admin/vendors/core/core.js')}}"></script>

  <script src="{{asset('assets/admin/vendors/select2/select2.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/easymde/easymde.min.js')}}"></script>

  <script src="{{asset('assets/admin/vendors/feather-icons/feather.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/template.js')}}"></script>

  <script src="{{asset('assets/admin/js/email.js')}}"></script>
@endsection  --}}