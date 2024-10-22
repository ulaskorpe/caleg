@extends('admin.layouts.master')
@section('title', __('Categories'))
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

    <script type="text/javascript">
$( document ).ready(function() {

    show_data(0)
});

async function delete_comment(comment_id,page){
    Swal.fire({
            title: 'yorum silinecek, eminmisiniz'+page,

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/products/comment/delete/'+comment_id,  // url

                    function (data) {  // success callback
                        Swal.fire({
                        icon: (data.status) ? 'success': 'error',
                        text: data.message
                    });
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                        show_data(page);
                }, 2000);
                   /// $('#logout-form').submit();
            }
        });
}

async function show_data(page=0 ){

    let txt ="/admin/products/comments/"+page ;

    console.log(txt);
$.get( txt, function( data ) {
   $('#comment_list').html(data);

});

}


    </script>
@endsection
