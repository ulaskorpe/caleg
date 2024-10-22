@extends('admin.layouts.master')
@section('title', __('Styles Settings'))
@section('styles')
	<link rel="stylesheet" href="{{asset('assets/admin/vendors/pickr/themes/classic.min.css')}}">
@endsection
@section('content')
<div class="main-wrapper">
    @include('admin.partials.sidebar')

    <div class="page-wrapper">

        @include('admin.partials.topbar')

        <div class="page-content">

            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">{{__('Front Settings')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('Styles')}}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">{{__('Front Style')}}</h6>
                            <form class="forms-sample" action="{{route('admin.updatefrontstyle')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3 mt-5 border justify-content-center" style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                                    <div class="col-md-10 stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">{{__('Main Color')}}:</label>
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <div class="me-2">
                                                                    <div id="main_color"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="main_color" id="main_color_value" placeholder="{{__('Select Site Main Color')}}" value="{{$data['Front_Settings']->main_color}}" readonly/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">{{__('Second Color')}}:</label>
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <div class="me-2">
                                                                    <div id="second_main_color"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="second_main_color" id="second_main_color_value" placeholder="{{__('Select Site Second Color')}}" value="{{$data['Front_Settings']->second_main_color}}" readonly/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">{{__('Footer Contact Info Color')}}:</label>
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <div class="me-2">
                                                                    <div id="footer_contact_info_color"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="footer_contact_info_color" id="footer_contact_info_color_value" placeholder="{{__('Select Site Footer Contact Info Color')}}" value="{{$data['Front_Settings']->footer_contact_info_color}}" readonly/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">{{__('Footer Contact Info Hover Color')}}:</label>
                                                        <div class="row">
                                                            <div class="col-1">
                                                                <div class="me-2">
                                                                    <div id="footer_contact_info_hover_color"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <input class="form-control mb-4 mb-md-0 col-6" name="footer_contact_info_hover_color" id="footer_contact_info_hover_color_value" placeholder="{{__('Select Site Footer Contact Info Hover Color')}}" value="{{$data['Front_Settings']->footer_contact_info_hover_color}}" readonly/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-5">
                                    <button class="btn btn-outline-primary" type="submit">{{__('Update Front Style')}}</button>
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
    <script src="{{asset('assets/admin/vendors/pickr/pickr.min.js')}}"></script>
    <script>
        $(function() {
            'use strict';

            const main_color = Pickr.create({
              el: '#main_color',
              theme: 'classic', // or 'monolith', or 'nano',
              default: '{{$data["Front_Settings"]->main_color}}',

              swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 0.95)',
                'rgba(156, 39, 176, 0.9)',
                'rgba(103, 58, 183, 0.85)',
                'rgba(63, 81, 181, 0.8)',
                'rgba(33, 150, 243, 0.75)',
                'rgba(3, 169, 244, 0.7)',
                'rgba(0, 188, 212, 0.7)',
                'rgba(0, 150, 136, 0.75)',
                'rgba(76, 175, 80, 0.8)',
                'rgba(139, 195, 74, 0.85)',
                'rgba(205, 220, 57, 0.9)',
                'rgba(255, 235, 59, 0.95)',
                'rgba(255, 193, 7, 1)'
              ],

              components: {

                // Main components
                preview: true,
                opacity: true,
                hue: true,

                // Input / output Options
                interaction: {
                    hex: true,
                    rgba: false,
                    hsla: false,
                    hsva: false,
                    cmyk: false,
                    input: true,
                    clear: true,
                    save: true
                }
              }
            });

            main_color.on('save', (color, instance) => {
                document.getElementById("main_color_value").value = main_color.getColor().toHEXA().toString();
            });

            main_color.on('clear', (color, instance) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                  });

                  Toast.fire({
                    icon: 'warning',
                    title: "Site Color Should be Selected, Don't Forget."
                })
            });


            const second_main_color = Pickr.create({
                el: '#second_main_color',
                theme: 'classic',
                default: '{{$data["Front_Settings"]->second_main_color}}',

                swatches: [
                  'rgba(244, 67, 54, 1)',
                  'rgba(233, 30, 99, 0.95)',
                  'rgba(156, 39, 176, 0.9)'
                ],

                components: {
                  preview: true,
                  opacity: true,
                  hue: true,
                  interaction: {
                    hex: true,
                    rgba: true,
                    input: true,
                    clear: true,
                    save: true
                  }
                }
            });

            second_main_color.on('save', (color, instance) => {
                document.getElementById("second_main_color_value").value = second_main_color.getColor().toHEXA().toString();
            });

            second_main_color.on('clear', (color, instance) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                  });

                  Toast.fire({
                    icon: 'warning',
                    title: "Site Second Color Should be Selected, Don't Forget."
                })
            });

            const footer_contact_info_color = Pickr.create({
                el: '#footer_contact_info_color',
                theme: 'classic',
                default: '{{$data["Front_Settings"]->footer_contact_info_color}}',

                swatches: [
                  'rgba(244, 67, 54, 1)',
                  'rgba(233, 30, 99, 0.95)',
                  'rgba(156, 39, 176, 0.9)'
                ],

                components: {
                  preview: true,
                  opacity: true,
                  hue: true,
                  interaction: {
                    hex: true,
                    rgba: true,
                    input: true,
                    clear: true,
                    save: true
                  }
                }
            });

            footer_contact_info_color.on('save', (color, instance) => {
                document.getElementById("footer_contact_info_color_value").value = footer_contact_info_color.getColor().toHEXA().toString();
            });

            footer_contact_info_color.on('clear', (color, instance) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                  });

                  Toast.fire({
                    icon: 'warning',
                    title: "Site Footer Contact Color Should be Selected, Don't Forget."
                })
            });

            const footer_contact_info_hover_color = Pickr.create({
                el: '#footer_contact_info_hover_color',
                theme: 'classic',
                default: '{{$data["Front_Settings"]->footer_contact_info_hover_color}}',

                swatches: [
                  'rgba(244, 67, 54, 1)',
                  'rgba(233, 30, 99, 0.95)',
                  'rgba(156, 39, 176, 0.9)'
                ],

                components: {
                  preview: true,
                  opacity: true,
                  hue: true,
                  interaction: {
                    hex: true,
                    rgba: true,
                    input: true,
                    clear: true,
                    save: true
                  }
                }
            });

            footer_contact_info_hover_color.on('save', (color, instance) => {
                document.getElementById("footer_contact_info_hover_color_value").value = footer_contact_info_hover_color.getColor().toHEXA().toString();
            });

            footer_contact_info_hover_color.on('clear', (color, instance) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                  });

                  Toast.fire({
                    icon: 'warning',
                    title: "Site Contact Hover Color Should be Selected, Don't Forget."
                })
            });

          });
    </script>
@endsection
