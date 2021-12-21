@extends('admin.layouts.main')

@section('main-section')
    <div id="main-wrapper">
        @include('admin.layouts.top-nav')
        @include('admin.layouts.side-bar')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Listings</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Profile Datatable</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Type</th>
                                                    <th>Category</th>
                                                    <th>Address</th>
                                                    <th>City</th>
                                                    <th>Package</th>
                                                    <th>Description</th>
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
            </div>
            @include('admin.layouts.bottom-footer')
        </div>
    @endsection
    @section('section-script')
        <script>
            function loadlist() {
                var html = "";
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.listing.show') }}",
                    dataType: "JSON",
                    success: function(response) {
                        $.each(response, function(index, value) {
                            html += '<tr>' +
                                '<td>' + value['id'] + '</td>' +
                                '<td>' + value['title'] + '</td>' +
                                '<td>' + value['type'] + '</td>' +
                                '<td>' + value['category'] + '</td>' +
                                '<td>' + value['address'] + '</td>' +
                                '<td>' + value['city'] + '</td>' +
                                '<td>' + value['package'] + '</td>' +
                                '<td>' + value['description'].substring(0, 50).concat('...') + '...</td>' +
                                '<td>' + value['slug'] + '</td>' +
                                '<td>' +
                                '<div class="dropdown"><a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"> </circle><circle fill="#000000" cx="19" cy="12" r="2"> </circle></g></svg></a><ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;"><li class="dropdown-item edit-cat" style="cursor:pointer;" for="#edit" ><a href="listing/edit/'+value['id']+'" class="d-block" id="edit"><i class="fa fa-plus text-primary me-2"></i>Edit</a></li><li class="dropdown-item del-cat" data-id="' +
                                value['id'] +
                                '" data-p-id="0"style="cursor:pointer;"><a href="javascript:void(0)"><i class="fa fa-ban text-primary me-2"></i>Delete</a></li></ul></div>' +
                                '</td>' + ' </tr>';
                        });
                        $("#list-body").html(html);
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
    @endsection
