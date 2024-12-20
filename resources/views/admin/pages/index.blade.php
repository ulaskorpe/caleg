@extends('admin.layouts.master')
@section('title', __('Pages'))
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
                        <li class="breadcrumb-item"><a href="">{{__('Pages')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('List')}}</li>
                    </ol>
                </nav>
    
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h6 class="card-title">{{__('Pages List')}}</h6>
                                    </div>
                                    <div class="col-2 text-center justify-content-center">
                                        <a class="btn btn-outline-success me-2 mb-2 mb-md-5" href="{{route('admin.page.create')}}">
                                            {{__('Add New Page')}}
                                        </a>
                                    </div>
                                </div>
                                <div class="btn-area text-right justify-center"> </div>
                                <div class="table-responsive">
                                    <table id="sztable" class="table">
                                        <thead>
                                        <tr>
                                            <th>{{__('Slug')}}</th>
                                            <th>{{__('Name')}}</th>
                                            <th>{{__('Status')}}</th>
                                            <th>{{__('Created')}}</th>
                                            <th></th>
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
                ajax: '{{route('admin.pages.list.datatables')}}',
                columns: [
                            { data: 'slug', name: 'slug' },
                            { data: 'name', name: 'name' },
                            { data: 'status', name: 'status' },
                            { data: 'created', name: 'created' },
                            { data: 'action', name: 'action' },

                        ]
                });										
        })(jQuery);
    </script>
    <script>
        function ChangeStat(value){
            $.ajax({
                type:"post",
                url:"{{route('admin.page.status.update')}}",
                dataType:'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    slug: value
                },
                success:function(data){
  
                  if(!data.status){

                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 7000,
                        timerProgressBar: true,
                        }).fire({
                        icon: 'error',
                        title: 'Something Went Wrong!'
                    });

                  }else{
                      Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 7000,
                        timerProgressBar: true,
                        }).fire({
                        icon: 'success',
                        title: data.message
                    });
                }
            
                }
            });
        }
    </script>
    <script type="text/javascript">
        $(function() {
            deleteSize = function(size){
                let url = "{{ route('admin.page.destroy', ":size") }}";
                url = url.replace(':size', size);
                const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger me-2'
                },
                buttonsStyling: false,
                })
                
                swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You want to delete this page",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'me-2',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type:"POST",
                        url:url,
                        dataType:'json',
                        data: {
                            _token: "{{ csrf_token() }}",
                            slug: size
                        },
                        success:function(data){
                
                            if(!data.status){
                
                                Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 7000,
                                    timerProgressBar: true,
                                    }).fire({
                                    icon: 'error',
                                    title: data.message
                                });
                
                            }else{
                                $('#sztable').DataTable().ajax.reload();
                                Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 7000,
                                    timerProgressBar: true,
                                    }).fire({
                                    icon: 'success',
                                    title: data.message
                                });
                            }
                        }
                    });
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Selected Page in safe.',
                    'error'
                    )
                }
                })
            }
        });
    </script>
@endsection