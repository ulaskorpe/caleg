@extends('admin.layouts.master')
@section('title', __('Categories'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
@endsection
@section('content')

    <div class="main-wrapper">
        @include('admin.partials.sidebar')
        <div class="page-wrapper">
            @include('admin.partials.topbar')
            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">{{ __('Types') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('List') }}</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h6 class="card-title">{{ __('Types List') }}</h6>
                                    </div>
                                    <div class="col-2 text-center justify-content-center">
                                    </div>
                                </div>
                                <div class="btn-area text-right justify-center"> </div>
                                <div class="table-responsive">
                                    <table id="typtable" class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Price') }}</th>
                                                <th>{{ __('Created') }}</th>
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
    <script src="{{ asset('assets/admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";

            var table = $('#typtable').DataTable({
                ordering: false,
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.types.datatables') }}',
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'created',
                        name: 'created'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },

                ]
            });
        })(jQuery);
    </script>
    <script type="text/javascript">
        $(function() {
            deleteType = function(type) {
                let url = "{{ route('admin.types.destroy', ':type') }}";
                url = url.replace(':type', type);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger me-2'
                    },
                    buttonsStyling: false,
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You want to delete ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'me-2',
                    confirmButtonText: 'Delete',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            dataType: 'json',
                            data: {
                                _token: "{{ csrf_token() }}",
                                slug: type
                            },
                            success: function(data) {

                                if (!data.status) {

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

                                } else {
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
                            'Selected Tour in safe.',
                            'error'
                        )
                    }
                })
            }
        });
    </script>
@endsection
