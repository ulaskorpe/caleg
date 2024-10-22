@extends('layouts.master')
@section('title',$page->name)
@section('content')
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ $page->banner ? asset('assets/images/pages/banners/'.$page->banner) : asset('assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">{{$page->name}}</h2>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">{{__('Home')}} </a>/
                                </li>
                                <li>{{$page->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-banner different-bg-position section-space-y-axis-100">
            <div class="container">
                {!! $page->content !!}
            </div>
        </div>
    </main>
@endsection
