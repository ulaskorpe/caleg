@extends('admin.layouts.master')
@section('title', __('products'))
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
                        <li class="breadcrumb-item"><a href="">{{ __('Products') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <h6 class="card-title">{{ __('Product List') }}</h6>
                                    </div>

<div class="col-7 d-flex justify-content-end align-items-center"> <!-- Use Flexbox and right alignment -->
    <!-- First Select Element -->
    <select name="cat_id" id="cat_id" class="form-control ml-2  mr-2" style="width: 200px">
        <option value="0">Seçiniz</option>
        @foreach($categories as $cat)
        <option value="{{$cat['id']}}">{{$cat['name']}}</option>
        @endforeach
    </select>

    <!-- Second Select Element -->
    <select name="type_id" id="type_id" class="form-control ml-2 mr-2" style="width: 200px">
        <option value="0">Seçiniz</option>
        @foreach($types as $type)
        <option value="{{$type['id']}}">{{$type['name']}}</option>
        @endforeach
    </select>

    <!-- Input Element with Search Icon -->
    <div class="input-group ml-2" style="width: 200px;">
        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search...">
        <div class="input-group-append" style="pointer:cursor" onclick="show_data(0)">
            <span class="input-group-text">
                <i class="fas fa-search"></i> <!-- Search icon -->
            </span>
        </div>
    </div>
</div>
                                    <div class="col-2 text-center justify-content-center">
                                        <a class="btn btn-outline-success me-2 mb-2 mb-md-5"
                                            href="{{ route('admin.products.create') }}">{{ __('Add New Product') }}</a>
                                    </div>
                                </div>
                                <div class="btn-area text-right justify-center"> </div>
                                <div class="table-responsive" id="product_list" name="product_list">

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
@section('scripts')

    <script type="text/javascript">
$( document ).ready(function() {

    show_data(0)
});

async function delete_product(product_id,page){
    Swal.fire({
            title: 'Ürün silinecek, eminmisiniz'+page,

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/products/delete/'+product_id,  // url

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



    let keyword = $('#keyword').val();
    let cat_id = $('#cat_id').val();
    let type_id = $('#type_id').val();

    let txt ="/admin/products/list/"+page ;
    if(keyword !=''){
            txt+="/"+keyword;
    }else{
        txt+="/0";
    }
    if(cat_id !='0'){
            txt+="/"+cat_id;
        }else{
        txt+="/0";
    }

    if(type_id !='0'){
            txt+="/"+type_id;
        }else{
        txt+="/0";
    }


    console.log(txt);
$.get( txt, function( data ) {



   $('#product_list').html(data);

});

}


    </script>
@endsection
