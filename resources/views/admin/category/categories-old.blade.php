@extends('layouts.admin.master')

@section('title')Categories
    {{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <style>
        #select-list {
            font-size: 12px;
            max-height: 200px;
            overflow-y: scroll;
        }

        #select-list::-webkit-scrollbar {
            width: 5px !important;
        }

        #select-list::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        #select-list::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        #select-list::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

    </style>
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Categories</h3>
        @endslot
        <li class="breadcrumb-item active">Categories</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <div class="col-10">
                            <h5 id="Heading">Categories</h5>
                            <ol class="breadcrumb pt-3" id="bread">
                                <li class="breadcrumb-item" data-pId="0"><a type="button">Home</a></li>
                                {{-- <li class="breadcrumb-item active">Breadcrumb</li> --}}
                            </ol>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#CategoryForm" data-bs-original-title="" title="">Add Category</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive container-fluid">
                            <table class="display datatables" id="ajax-data-object">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Sub Count</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="CategoryForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Category</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="SubmitForm">
                            {{-- <input type="hidden" id="Inputparent_id" name="parent_id" value="0"> --}}
                            <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">Category Name:</label>
                                <input class="form-control" id="InputCat_name" name="cat_name" type="text" value="">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">Select Category:</label>
                                <input class="form-control" readonly id="Inputparent_id" name="parent_id" type="text"
                                    data-val="0" value="Parent">
                                {{-- <label class="col-form-label" for="recipient-name">Select Sub Category:</label>
                                <select name="parent_id" class="form-control" id="selectCat">
                                    <option value="0">Parent</option>
                                </select> --}}
                                <div id="select-list" class="">

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">Slug:</label>
                                <input class="form-control" id="InputSlug" name="slug" type="text" value="">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" id="submit" type="button">Save</button>
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
            // <li><a class="list-group-item list-group-item-action active" href="javascript:void(0)"><span class="icon-angle-left"></span> <span>Parent</span></a></li>
            // sessionStorage.setItem("parent_id",0)
            function loaddata() {
                let html = "";
                let status = "";
                if(sessionStorage.getItem("parent_id")==null){
                    sessionStorage.setItem("parent_id",0);
                }
                console.log(sessionStorage.getItem("parent_id"));
                console.log(typeof(Number(sessionStorage.getItem("parent_id"))));
                $.ajax({
                    type: "GET",
                    url: "{{ url('admin/categories/show/') }}/" + sessionStorage.getItem("parent_id"),
                    dataType: "JSON",
                    success: function(response) {
                        let serial = 1;
                        $.each(response, function(index, val) {
                            let valpush = {};
                            response[index]["count"] = serial;
                            if (val["status"] == 1) {
                                response[index]["status"] =
                                    '<div class="media-body text-center switch-sm"><span class="me-2">Active</span><label class="switch"><input type="checkbox" class="status" data-id="' +
                                    val["id"] +
                                    '" checked><span class="switch-state"></span></label></div>';
                            } else {
                                response[index]["status"] =
                                    '<div class="media-body text-center switch-sm"><span class="me-2">Inactive</span><label class="switch"> <input type="checkbox"class="status" data-id="' +
                                    val["id"] + '" ><span class="switch-state"></span></label></div>';
                            }
                            if (val["subcount"] > 0) {
                                response[index]["actions"] =
                                    '<div class="d-flex justify-content-between px-3">' +
                                    '<a type="button" class="edit-cat" data-bs-toggle="modal" data-bs-target="#CategoryForm" data-pid="' +
                                    val["parent_id"] + '" data-id="' + val["id"] +
                                    '"><i class="icon-pencil-alt"></i></a>' +
                                    '<a type="button" class="del-cat" data-id="' + val["id"] +
                                    '"><i class="icon-trash text-danger"></i></a>' +
                                    '<a type="button" data-pid="' + val["id"] + '" class="view-sub"><i class="fa fa-eye"></i></a>' +
                                    '</div>';
                            } else {
                                response[index]["actions"] =
                                    '<div class="d-flex justify-content-between px-3">' +
                                    '<a type="button" class="edit-cat" data-bs-toggle="modal" data-bs-target="#CategoryForm" data-pid="' +
                                    val["parent_id"] + '" data-id="' + val["id"] +
                                    '"><i class="icon-pencil-alt"></i></a>' +
                                    '<a type="button" class="del-cat" data-id="' + val["id"] +
                                    '"><i class="icon-trash text-danger"></i></a>' +
                                    '</div>';
                            }
                            serial++;
                        });
                        $('#ajax-data-object').DataTable({
                            destroy: true,
                            data: response,
                            "paging": true,
                            "columns": [{
                                "data": "count",
                                "width": "2%"
                            }, {
                                "data": "name"
                            }, {
                                "data": "subcount",
                                "width": "10%"
                            }, {
                                "data": "slug"
                            }, {
                                "data": "status"
                            }, {
                                "data": "actions",
                            }]
                        });
                    }
                });
            }
            loaddata();

            function breadMaker() {
                let find = sessionStorage.getItem("parent_id");
                let html = "";
                $.ajax({
                    type: "GET",
                    url: "{{ url('admin/categories/reverse/') }}/" + find,
                    dataType: "JSON",
                    success: function(response) {
                        html += '<li class="breadcrumb-item" data-jump="0"><a type="button">Home</a></li>';
                        $.each(response, function (index, val) { 
                            html +='<li class="breadcrumb-item"><a type="button" data-jump="' + val['id'] + '">' + val["name"] + '</a></li>';
                        });
                        if(response.length > 0){
                            $("#Heading").html(response[response.length-1]["name"]);
                        }else{
                            $("#Heading").html("Categories");
                        }
                        // $("#Heading").html(response[response.length-1]["name"]);
                        $("#bread").html(html);
                    }
                });
            }
            breadMaker();

            function selectmaker(arr, back, old) {
                let html = "";
                html += '<ul class="list-group" id="currentList">';
                // if (arr[0]['parent_id'] != 0) {
                    html += '<li><a class="list-group-item list-group-item-action active" data-pid="' + back +
                        '" id="current-heading" href="javascript:void(0)"><span>' + old +
                        '</span></a></li>';
                // }
                $.each(arr, function(index, val) {
                    if (val["subcount"] > 0) {
                        html +=
                            '<li class="d-flex justify-content-between align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.125);border-top:0;">' +
                            '<a href="javascript:void(0)" class="list-group-item border-0 list-group-item-action selected-val" data-pid="' +
                            val["id"] + '" style="width:90%">' + val["name"] + '</a>' +
                            '<a href="javascript:void(0)" data-pid="' + val["id"] + '" data-id="' + val["parent_id"] +
                            '" data-selecthead="' + val["name"] +
                            '" class="list-group-item border-0 list-group-item-action selectSub" style="width:10%"><span class="icon-angle-right"></span></a>' +
                            '</li>';
                    } else {
                        html +=
                            '<li class="d-flex justify-content-between align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.125);border-top:0;">' +
                            '<a href="javascript:void(0)" class="list-group-item border-0 list-group-item-action selected-val" data-pid="' +
                            val["id"] + '">' + val["name"] + '</a>' +
                            '</li>';
                    }
                });
                '</ul>';
                return html;
            }
            function loadselectCat(pId = 0, back = "", old = "Home") {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: "{{ url('admin/categories/show/') }}/" + sessionStorage.getItem("parent_id"),
                    dataType: "JSON",
                    success: function(response) {
                        html = selectmaker(response, back, old);
                        $('#select-list').html(html);
                        $('#Inputparent_id').data("val", sessionStorage.getItem("parent_id"));
                        $("#Inputparent_id").val($("#bread > li:last-child > a").html());
                    }
                });
            }
            loadselectCat();
            $("#select-list").hide();
            $("#Inputparent_id").on("dblclick", function() {
                $("#select-list").toggle(0500);
            });
            $(document).ready(function() {
                $(document).on('keyup', '#InputCat_name', function() {
                    var name = $(this).val();
                    var slug = name.toLowerCase().trim().replace(/ /g, '-');
                    $("#InputSlug").val(slug);
                });
                $(document).on('click', 'tbody .del-cat', function(e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this Data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{ url('/admin/categories/delete') }}" + '/' + id,
                                type: "GET",
                                success: function(data) {
                                    if (data.status == "success") {
                                        swal("Poof! Your Data has been deleted!", {
                                            icon: "success",
                                        });
                                        sessionStorage.setItem("parent_id", "0");
                                        breadMaker();
                                        loaddata();
                                    } else {
                                        swal("Oops", "ERROR : " + data.message,
                                            "error");
                                    }
                                }
                            });
                        }
                    });
                });
                $(document).on('click', ".status", function() {
                    let id = $(this).data("id");
                    $.ajax({
                        type: "GET",
                        url: "{{ URL::to('admin/categories/status') }}" + "/" + id,
                        dataType: "JSON",
                        success: function(response) {
                            if (response.status == 1) {
                                loaddata();
                            }
                        }
                    });
                });
                $('#submit').on('click', function(e) {
                    e.preventDefault();
                    let cat_name = $('#InputCat_name').val();
                    let slug = $('#InputSlug').val();
                    let parent_id = $('#Inputparent_id').data('val');
                    let id = $('#id').val();
                    let dataobj = {
                        "_token": "{{ csrf_token() }}",
                        name: cat_name,
                        slug: slug,
                        parent_id: parent_id,
                    };
                    if ($('#id').length) {
                        dataobj.id = id;
                    }
                    // console.log(dataobj);
                    $.ajax({
                        url: "{{ route('Submit-Categories') }}",
                        type: "POST",
                        data: dataobj,
                        success: function(response) {
                            if (response.status == 'success') {
                                swal({
                                    title: "error!",
                                    text: "You clicked the button!",
                                    icon: "error",
                                    button: "Ok!"
                                });
                            } else {
                                swal({
                                    title: "Good job!",
                                    text: "You clicked the button!",
                                    icon: "success",
                                    button: "Ok!"
                                });
                            }
                            if ($('#id').length) {
                                $('#id').remove();
                                $('#Inputparent_id').data('val',0);
                            }
                            loaddata();
                            $("#SubmitForm")[0].reset();
                            $('#CategoryForm').modal('toggle');
                        }
                    });
                });
                $(document).on("click", ".view-sub", function() {
                    let id = $(this).data('pid');
                    sessionStorage.setItem('parent_id', id);
                    breadMaker();
                    loaddata();
                    loadselectCat();
                });
                $(document).on("click", "#bread .breadcrumb-item", function() {
                    let pId = $(this).children()[0];
                    pId = $(pId).data("jump");
                    sessionStorage.setItem('parent_id', pId);
                    loaddata();
                    breadMaker();
                });
                var myModalEl = document.getElementById('CategoryForm')
                myModalEl.addEventListener('hidden.bs.modal', function(event) {
                    $("#SubmitForm")[0].reset();
                    if ($('#id').length) {
                        $('#id').remove();
                    }
                    $("#select-list").hide();
                });
                myModalEl.addEventListener('show.bs.modal', function(event) {
                    loadselectCat();
                });
                $(document).on('click', '.edit-cat', function(e) {
                    e.preventDefault();
                    var pid = $(this).attr('data-pid');
                    var id = $(this).attr('data-id');
                    let ele = $(this).parent().parent().parent();
                    let name = $(ele).children()[1];
                    let slug = $(ele).children()[3];
                    $('#InputCat_name').val($(name).html());
                    $('#InputSlug').val($(slug).html());
                    $('#InputCat_name').after('<input type="hidden" id="id" value="' + id + '">');
                    // $('#Inputparent_id').data("val", pid);
                    // $("#Inputparent_id").val($("#bread > li:last-child > a").html());
                    // loadselectCat(pid);
                    sessionStorage.setItem('parent_id', pid);
                    loadselectCat();
                });
                $(document).on("click", ".selectSub", function() {
                    let back = $(this).data('id');
                    let pId = $(this).data('pid');
                    sessionStorage.setItem("parent_id", pId);
                    loadselectCat();
                });
                $(document).on("click", "#current-heading", function() {
                    let back = $(this).data('pid');
                    sessionStorage.setItem("parent_id", back);
                    loadselectCat();
                });
                $(document).on("click", ".selected-val", function() {
                    let pId = $(this).data('pid');
                    $("#Inputparent_id").val($(this).html());
                    $("#Inputparent_id").data("val", pId);
                });
            });
        </script>
    @endpush

@endsection
