@extends('admin.layouts.master')
@section('title', __('settings'))
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
                        <li class="breadcrumb-item"><a href="#">{{ __('Site Locations') }}</a></li>
                       
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                       
                                    </div>

<div class="col-7 d-flex justify-content-end align-items-center"> <!-- Use Flexbox and right alignment -->
    <!-- First Select Element -->
 

    <!-- Second Select Element -->
    

    <!-- Input Element with Search Icon -->
    <div class="input-group ml-2" style="width: 200px;">
        
    </div>
</div>
<div class="col-2 text-center justify-content-center mt-5">
    


</div>
</div>

                                <div class="btn-area text-right justify-center"> </div>
                                <div class="table-responsive" id="location_list" name="location_list">

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

    show_data()
});

let time_wait = 1000;


async function change_show(location_id){
    Swal.fire({
        title: 'visibility will change,are you sure ',


            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/settings/web-settings/locations/show/'+location_id,  // url

                    function (data) {  // success callback
                    //     Swal.fire({
                    //     icon: (data.status) ? 'success': 'error',
                    //     text: data.message
                    // });
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                    show_data();
                }, time_wait);
                   /// $('#logout-form').submit();
            }else{
                show_data();
            }
        });
}


    async function updateTitle(id){
         
        
if($('#title'+id).val() ==''){
        $('#title'+id).focus();
Swal.fire({
    icon: 'error',
    text: 'enter title'
});

error = true;
return false;
}else{
    $.get('/admin/settings/web-settings/locations/title/'+id+'/'+$('#title'+id).val(),  // url

function (data) {  // success callback
    Swal.fire({
    icon: (data.status) ? 'success': 'error',
    text: data.message
});
// alert('status: ' + textStatus + ', data:' + data);
});

setTimeout(() => {
    show_data();
}, time_wait);
}
    }


async function change_has_products(location_id){
    Swal.fire({
            title: 'has products will change,are you sure ',

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/settings/web-settings/locations/has_products/'+location_id,  // url

                    function (data) {  // success callback
                    //     Swal.fire({
                    //     icon: (data.status) ? 'success': 'error',
                    //     text: data.message
                    // });
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                        show_data();
                }, time_wait);
                   /// $('#logout-form').submit();
            }else{
                show_data();
            }
        });
}



 

async function change_rank(id,rank ){

let txt ="/admin/settings/web-settings/locations/rank/"+id+"/"+rank ;
console.log(txt);



$.get( txt, function( data ) {

//$('#location_list').html(data);
    //alert(data);
    setTimeout(() => {
                        show_data();
                }, 1000);

});

}

 


async function show_data(page=0 ){

    let txt ="/admin/settings/web-settings/locations-list/" ;
    console.log(txt);
 
    
 
$.get( txt, function( data ) {

   $('#location_list').html(data);

});

}


  


    </script>
@endsection
