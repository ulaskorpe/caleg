@extends('admin.layouts.master')
@section('title', __('Change Password'))
@section('content')
<div class="main-wrapper">
    @include('admin.partials.sidebar')
    
    <div class="page-wrapper">

        @include('admin.partials.topbar')      
          
        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">{{__('general.Account Settings')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('general.Change Password')}}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h6 class="card-title">{{__('general.Change Account Password')}}</h6>
                                </div>
                            </div>
                            <div class="row mb-3 mt-5 justify-content-center">
                                <div class="col-md-10 stretch-card">
                                    <div class="card">
                                        <div class="card-body border" style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                            <form class="forms-sample" action="{{route('admin.change.password.update')}}" method="POST" id="szform">
                                                @csrf
                                                <div class="row mt-5">
                                                    <label class="form-label">{{__('general.Current Password')}}*</label>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input class="form-control mb-4 mb-md-0 col-6" name="current_password" placeholder="{{__('general.Enter Current Password')}}" type="password" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <label class="form-label">{{__('general.New Password')}}*
                                                        <p style="font-size: 10px;">{{__('general.password must be At least 1 Capital character, 1 number, and symbol')}}</p></label>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input class="form-control mb-4 mb-md-0 col-6" name="new_password" placeholder="{{__('general.Enter New Password')}}" type="password" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <label class="form-label">{{__('general.Confirm Password')}}*</label>
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <input class="form-control mb-4 mb-md-0 col-6" name="confirm_password" placeholder="{{__('general.Enter Confirm Password')}}" type="password" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center mt-5" style="margin-top: 5% !important;">
                                                    <hr>
                                                    <button class="btn btn-outline-primary" type="submit">
                                                        {{__('general.Submit')}}
                                                    </button>
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
    </div>
</div>
@endsection