@extends('admin.layouts.master')
@section('title', __('Email Failed'))
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
                    <li class="breadcrumb-item active" aria-current="page">{{__('Emails On Failed')}}</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">{{__('Emails On Failed')}}</h6>
                            <div class="table-responsive">
                                <table id="sztable" class="table">
                                    <thead>
                                    <tr>
                                        <th>{{__('ID')}}</th>
                                        <th>{{__('Connection')}}</th>
                                        <th>{{__('Queue')}}</th>
                                        {{--  <th>{{__('Exception')}}</th>  --}}
                                        <th>{{__('Failed at')}}</th>
                                        <th>{{__('Action')}}</th>
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
                ajax: '{{route('admin.getemailfailedjobs')}}',
                columns: [
                            { data: 'uuid', name: 'uuid' },
                            { data: 'connection', name: 'connection' },
                            { data: 'queue', name: 'queue' },
                            //{ data: 'exception', searchable: false, orderable: false},
                            { data: 'failed_at', name: 'failed_at' },
                            { data: 'resend', searchable: false, orderable: false}

                        ]
                });										

        })(jQuery);

    </script>
@endsection