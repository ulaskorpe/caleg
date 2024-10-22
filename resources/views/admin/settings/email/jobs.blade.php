@extends('admin.layouts.master')
@section('title', __('Email Pending'))
@section('styles')
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
@endsection
@section('content')
<div class="main-wrapper">
    @include('admin.partials.sidebar')
    
    <div class="page-wrapper">

        @include('admin.partials.topbar')      
          
        <div class="page-content">

            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">{{__('Email Settings')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('Emails On Pending')}}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <h6 class="card-title">{{__('Emails On Pending')}}</h6>
                                </div>
                                <div class="col-2 text-center justify-content-center">
                                    <a class="btn btn-outline-warning me-2 mb-2 mb-md-5" href="{{route('admin.startqueues')}}">{{__('Start Queues')}}</a>
                                </div>
                            </div>
                            <div class="btn-area text-right justify-center"> </div>
                            <div class="table-responsive">
                                <table id="sztable" class="table">
                                    <thead>
                                    <tr>
                                        <th>{{__('ID')}}</th>
                                        <th>{{__('Queue')}}</th>
                                        <th>{{__('Created At')}}</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('assets/admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script type="text/javascript">

        (function($) {
            "use strict";

            var table = $('#sztable').DataTable({
                ordering: false,
                processing: true,
                serverSide: true,
                ajax: '{{route('admin.getemailjobs')}}',
                columns: [
                            { data: 'uuid', name: 'uuid' },
                            { data: 'queue', name: 'queue' },
                            { data: 'created_at', name: 'created_at' },

                        ]
                });										
        })(jQuery);

    </script>
@endsection