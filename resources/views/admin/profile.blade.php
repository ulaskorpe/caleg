@extends('admin.layouts.master')
@section('title', __('Profile Settings'))
@section('content')
    <div class="main-wrapper">
        @include('admin.partials.sidebar')
        
        <div class="page-wrapper">

            @include('admin.partials.topbar')      
            
            <div class="page-content">
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">{{__('general.Account Settings')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('general.Profile')}}</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <h6 class="card-title">{{__('general.Profile Settings')}}</h6>
                                    </div>
                                </div>
                                <div class="row mb-3 mt-5 justify-content-center">
                                    <div class="col-md-10 stretch-card">
                                        <div class="card">
                                            <div class="card-body border" style="padding: 2%;">
                                                <form class="forms-sample" action="{{route('admin.profile.settings.update')}}" method="POST" id="szform">
                                                    @csrf
                                                    <div class="row mt-5">
                                                        <div class="col-5">
                                                            <label class="form-label">{{__('general.Username')}}*</label>
                                                            <div class="row">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="username" placeholder="{{__('general.Enter Username')}}" type="text" value="{{Auth::guard('admin')->user()->name}}" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-2"></div>
                                                        <div class="col-5">
                                                            <label class="form-label">{{__('general.Email')}}*</label>
                                                            <div class="row">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="email" placeholder="{{__('general.Enter Email')}}" type="email" value="{{Auth::guard('admin')->user()->email}}" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-5" style="margin-top: 5% !important;">
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input class="form-control col-6" name="password" placeholder="{{__('general.Enter Password')}}" type="password" required/>
                                                            </div>
                                                            <div class="col-6">
                                                                <button class="btn btn-outline-primary col-6" type="submit">
                                                                    {{__('general.Submit')}}
                                                                </button>
                                                            </div>
                                                        </div>
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