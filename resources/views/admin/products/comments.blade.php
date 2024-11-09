@extends('admin.layouts.master')
@section('title', __('Product Comments'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <style>
        .center-flex {
  display: flex; /* Enables Flexbox */
  justify-content: center; /* Centers items horizontally */
  align-items: center; /* Centers items vertically */
   /* Full viewport height for demonstration */
   padding-top: 20px
}
    </style>
@endsection
@section('content')
    <div class="main-wrapper">
        @include('admin.partials.sidebar')

        <div class="page-wrapper">

            @include('admin.partials.topbar')
            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">{{ __('comments') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <h6 class="card-title">{{ __('comment Comments List') }}</h6>
                                    </div>

<div class="col-7 d-flex justify-content-end align-items-center"> <!-- Use Flexbox and right alignment -->
    <!-- First Select Element -->




</div>
                                    <div class="col-2 text-center justify-content-center">

                                    </div>
                                </div>
                                <div class="btn-area text-right justify-center"> </div>
                                
                                <div class="table-responsive" id="comment_list" name="comment_list"> </div>



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
@section('scripts')
<script src="{{ asset('assets/js/saveV3.js') }}"></script>
<script src="{{ asset('assets/js/product_comments.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
$( document ).ready(function() {

   show_data('/admin/products/comments/0/0','comment_list');
});



 
    </script>
@endsection
