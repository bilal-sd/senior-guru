@extends('layouts.admin.master')
@section('title')Listings
    {{ $title }}
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush
@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Listing Show</h3>
        @endslot
        <li class="breadcrumb-item">Listing</li>
        <li class="breadcrumb-item active">Listing Show</li>
    @endcomponent
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Package</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="list-body">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
        <script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function loadlist() {
                var html = "";
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.listing.show') }}",
                    dataType: "JSON",
                    success: function(response) {
                        $.each(response, function(index, val) {
                            response[index]["actions"] =
                                "<div class='row'><div class='col-md-4'><div class=' edit-cat' style='cursor:pointer;' for='#edit' ><a href='listing/edit/" +
                                val['id'] +
                                "' class='d-block' id='edit'><i class='fa fa-pencil-square-o text-primary me-2'></i></a></div></div><div class='col-md-3'><div class=' del-cat' data-id=" +
                                val['id'] +
                                " data-p-id='0'style='cursor:pointer;'><a href='javascript:void(0)'><i class='fa fa-trash-o text-danger me-2'></i></a></div></div></div>";
                        });
                        $('#basic1').DataTable({
                            destroy: true,
                            responsive: true,
                            data: response,
                            columns: [{
                                data: "id"
                            }, {
                                data: "title"
                            }, {
                                data: "type"
                            }, {
                                data: "category"
                            }, {
                                data: "address"
                            }, {
                                data: "city"
                            }, {
                                data: "package"
                            }, {
                                data: "slug"
                            }, {
                                data: "actions"
                            }]
                        });
                    }
                });
            }
            loadlist();
            $(document).on('click', '.del-cat', function(e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ url('/admin/listing/delete') }}" + '/' + id,
                            type: "GET",
                            success: function(data) {
                                swal("Poof! Your Data has been deleted!", {
                                    icon: "success",
                                });
                                loadlist();
                            },
                            error: function(data) {
                                swal("Oops", "We couldn't connect to the server!",
                                    "error");
                            }

                        });
                    }
                });
            });
        </script>
    @endpush

@endsection
