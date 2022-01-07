@extends('layouts.admin.master')
@section('title')Listings
    {{ $title }}
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <style>
        tr.shown td.dt-control{
            background: url(https://www.datatables.net/examples/resources/details_close.png) no-repeat center center;
        }
        td.dt-control {
            background: url(https://www.datatables.net/examples/resources/details_open.png) no-repeat center center;
            cursor: pointer;
        }
    </style>
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
                        <div class="">
                            <table class="display" id="basic1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>S. No.</th>
                                        <th>Title</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Country</th>
                                        <th>Status</th>
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
        {{-- <script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script> --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function loadlist() {
                var html = "";
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.listing.show') }}",
                    dataType: "JSON",
                    success: function(response) {
                        let serial = 1;
                        $.each(response, function(index, val) {
                            response[index]["count"] = serial;
                            let status = "",
                                op = "",
                                text = "";
                            if (val["status"] == 1) {
                                status = "checked";
                                text = "Active";
                            } else {
                                status = "";
                                text = "Inactive";
                            }
                            response[index]["status"] =
                                '<div class="media-body text-center switch-sm"><span class="me-2">' + text +
                                '</span><label class="switch"><input type="checkbox" class="status" data-id="' +
                                val["id"] + '" ' + status + '><span class="switch-state"></span></label></div>';
                            response[index]["actions"] =
                                '<div class="d-flex justify-content-between px-3">' +
                                '<a class="edit-cat me-3" href="listing/edit/' + val['id'] +
                                '"><i class="icon-pencil-alt"></i></a>' +
                                '<a href="javascript:void(0)" type="button" class="del-cat" data-id=' + val[
                                    'id'] + '><i class="icon-trash text-danger"></i></a>' +
                                '</div>';
                            serial++;
                        });

                        function format(d) {
                            // `d` is the original data object for the row
                            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                                '<tr>' +
                                '<td>Type:</td>' +
                                '<td>' + d.cat_type + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Category:</td>' +
                                '<td>' + d.cat_sub + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Email:</td>' +
                                '<td>' + d.email + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Phone number:</td>' +
                                '<td>' + d.phone + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Website:</td>' +
                                '<td>' + d.website + '</td>' +
                                '</tr>' +
                                '<tr>' +
                                '<td>Slug:</td>' +
                                '<td>' + d.slug + '</td>' +
                                '</tr>' +
                                '</table>';
                        }
                        var table = $('#basic1').DataTable({
                            destroy: true,
                            responsive: true,
                            data: response,
                            columns: [{
                                "className": 'dt-control',
                                "orderable": false,
                                "data": null,
                                "defaultContent": ''
                            }, {
                                "data": "count"
                            }, {
                                "data": "title"
                            }, {
                                "data": "address"
                            }, {
                                "data": "city"
                            }, {
                                "data": "country"
                            }, {
                                "data": "status",
                                "width": "12%"
                            }, {
                                "data": "actions"
                            }]
                        });
                        $('#basic1 tbody').on('click', 'td.dt-control', function() {
                            var tr = $(this).closest('tr');
                            var row = table.row(tr);
                            if (row.child.isShown()) {
                                row.child.hide();
                                tr.removeClass('shown');
                            } else {
                                row.child(format(row.data())).show();
                                tr.addClass('shown');
                            }
                        });
                    }
                });
            }
            loadlist();
            $(document).ready(function() {
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
                $(document).on('click', ".status", function() {
                    let id = $(this).data("id");
                    let text = $(this).parent().prev();

                    if ($(text).html() == "Active") {
                        $(text).html("Inactive")
                    }else if ($(text).html() == "Inactive") {
                        $(text).html("Active");
                    }
                    $.ajax({
                        type: "GET",
                        url: "{{ URL::to('admin/listing/status') }}" + "/" + id,
                        dataType: "JSON",
                        success: function(response) {
                        }
                    });
                });
            });
        </script>
    @endpush

@endsection
