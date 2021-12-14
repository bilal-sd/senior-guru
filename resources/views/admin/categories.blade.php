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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Categories</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <div class="">
                                    <h4 class="card-title">Categories</h4>
                                    </p>
                                </div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendMessageModal"
                                    onclick="setVal(0)" id="parent">Add Parent Category</button>
                            </div>
                            <div class="card-body">
                                <div class="accordion accordion-header-shadow" id="accordion-two">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="sendMessageModal" aria-modal="false" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form class="comment-form" id="SubmitForm">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="hidden" id="Inputparent_id" name="parent_id" value="0">
                                    <div class="mb-3">
                                        <label class="text-black font-w600 form-label">Category Name <span
                                                class="required">*</span></label>
                                        <input type="text" class="form-control" id="InputCat_name" name="cat_name"
                                            placeholder="Name">
                                        <span class="text-danger" id="CategoryErrorMsg"></span>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="text-black font-w600 form-label">Category Slug <span
                                                class="required">*</span></label>
                                        <input type="text" class="form-control" id="InputSlug" name="slug"
                                            placeholder="Slug">
                                        <span class="text-danger" id="slugErrorMsg"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3 mb-0">
                                        <input type="submit" id="submit" value="Save" class="submit btn btn-primary"
                                            name="submit">
                                        <button class="btn btn-light" data-bs-dismiss="modal" type="button">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.bottom-footer')
    </div>
@endsection
@section('section-script')
<script>
    function setVal(pId) {
        $("#Inputparent_id").val(pId);
    }
    function childmaker(child, html = "", status = "") {
        child = child.original;
        if (child.length > 0) {
            $.each(child, function(index, value) {
                if (value['status'] == 1) {
                    status = '<span class="badge light badge-success status" data-id="' + value['id'] + '">Active</span>';
                } else {
                    status = '<span class="badge light badge-danger status" data-id="' + value['id'] + '">Inactive</span>';
                }
                html += '<div class="accordion-item">' +
                    '<div class="accordion-header rounded-lg collapsed row">' +
                    '<div class="col-md-1">' +
                    '<button class="accordion-header-indicator btn btn-danger ms-3 start-0" id="accord-2' +
                    value['id'] + '" data-bs-toggle="collapse" data-bs-target="#collapse2' +
                    value['id'] +
                    '" aria-controls="collapse2One" aria-expanded="false" role="button"></button>' +
                    '</div>' +
                    '<div class="col-md-11">' +
                    '<div class="d-flex justify-content-between align-items-center">' +
                    '<div class="col-1"><strong>' + value['id'] + '</strong></div>' +
                    '<div class="col fw-bold">' + value['name'] + '</div>' +
                    '<div class="col">' + value['slug'] + '</div>' +
                    '<div class="col">' + status + '</div>' +
                    '<div class="col">' +
                    '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendMessageModal" onclick="setVal(' +
                    value['id'] + ')">Add</button>' +
                    '</div>' +
                    '<div class="col-1">' +
                    '<div class="dropdown">' +
                    '<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">' +
                    '<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">' +
                    '<rect x="0" y="0" width="24" height="24"></rect>' +
                    '<circle fill="#000000" cx="5" cy="12" r="2"></circle>' +
                    '<circle fill="#000000" cx="12" cy="12" r="2"> </circle>' +
                    '<circle fill="#000000" cx="19" cy="12" r="2"> </circle>' +
                    '</g>' +
                    '</svg>' +
                    '</a>' +
                    '<ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">' +
                    '<li class="dropdown-item edit-cat" data-bs-toggle="modal" data-bs-target="#sendMessageModal" data-id="' +
                    value['id'] +
                    '"><i class="fa fa-plus text-primary me-2"></i>Edit</li>' +
                    '<li class="dropdown-item del-cat" data-id="' + value['id'] +
                    '" data-p-id="' + value['parent_id'] +
                    '"><i class="fa fa-ban text-primary me-2"></i>Delete</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div id="collapse2' + value['id'] +
                    '" class="accordion__body collapse" aria-labelledby="accord-2' + value[
                        'id'] + '">' +
                    '<div class="accordion-body-text">' +
                    childmaker(value['children']) +
                    '</div>' +
                    '</div>' +
                    '</div>';
            });
        }
        return html;
    }
    function loaddata() {
        let html = "";
        let status = "";
        $.ajax({
            type: "GET",
            url: "{{ Route('admin.categories.show') }}",
            dataType: "JSON",
            success: function(response) {
                $.each(response, function(index, value) {
                    if (value['parent_id'] == 0) {
                        if (value['status'] == 1) {
                            status =
                                '<span class="badge light badge-success status" data-id="' +
                                value['id'] + '">Active</span>';
                        } else {
                            status =
                                '<span class="badge light badge-danger status" data-id="' +
                                value['id'] + '">Inactive</span>';
                        }
                        html += '<div class="accordion-item">' +
                            '<div class="accordion-header rounded-lg collapsed row">' +
                            '<div class="col-md-1">' +
                            '<button class="accordion-header-indicator btn btn-danger ms-3 start-0" id="accord-2' +
                            value['id'] + '" data-bs-toggle="collapse" data-bs-target="#collapse2' +
                            value['id'] +
                            '" aria-controls="collapse2One" aria-expanded="false" role="button"></button>' +
                            '</div>' +
                            '<div class="col-md-11">' +
                            '<div class="d-flex justify-content-between align-items-center">' +
                            '<div class="col-1"><strong>' + value['id'] + '</strong></div>' +
                            '<div class="col fw-bold">' + value['name'] + '</div>' +
                            '<div class="col">' + value['slug'] + '</div>' +
                            '<div class="col">' + status + '</div>' +
                            '<div class="col">' +
                            '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendMessageModal" onclick="setVal(' +
                            value['id'] + ')">Add</button>' +
                            '</div>' +
                            '<div class="col-1">' +
                            '<div class="dropdown">' +
                            '<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">' +
                            '<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">' +
                            '<rect x="0" y="0" width="24" height="24"></rect>' +
                            '<circle fill="#000000" cx="5" cy="12" r="2"></circle>' +
                            '<circle fill="#000000" cx="12" cy="12" r="2"> </circle>' +
                            '<circle fill="#000000" cx="19" cy="12" r="2"> </circle>' +
                            '</g>' +
                            '</svg>' +
                            '</a>' +
                            '<ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">' +
                            '<li class="dropdown-item edit-cat" data-bs-toggle="modal" data-bs-target="#sendMessageModal" data-id="' +
                            value['id'] +
                            '"><i class="fa fa-plus text-primary me-2"></i>Edit</li>' +
                            '<li class="dropdown-item del-cat" data-id="' + value['id'] +
                            '" data-p-id="' + value['parent_id'] +
                            '"><i class="fa fa-ban text-primary me-2"></i>Delete</li>' +
                            '</ul>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div id="collapse2' + value['id'] +
                            '" class="accordion__body collapse" aria-labelledby="accord-2' + value[
                                'id'] + '">' +
                            '<div class="accordion-body-text">' +
                            childmaker(value['children']) +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    }
                });
                $("#accordion-two").html(html);
            }
        });
    }
    loaddata();

    $(document).ready(function() {
        $(document).on('click', ".status", function() {
            let id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: "{{ URL::to('admin/categories/status') }}" + "/" + id,
                dataType: "JSON",
                success: function(response) {
                    if (response.status == 1) {
                        $(".status[data-id='" + id + "']").removeClass("badge-danger");
                        $(".status[data-id='" + id + "']").addClass("badge-success");
                        $(".status[data-id='" + id + "']").html("Active");
                    } else {
                        $(".status[data-id='" + id + "']").removeClass("badge-success");
                        $(".status[data-id='" + id + "']").addClass("badge-danger");
                        $(".status[data-id='" + id + "']").html("Inactive");
                    }
                    loaddata();
                }
            });
        });

        $(document).on('keyup', '#InputCat_name', function() {
            var name = $(this).val();
            var slug = name.toLowerCase().trim().replace(/ /g, '-');
            $("#InputSlug").val(slug);
        });

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
                        url: "{{ url('/admin/categories/delete') }}" + '/' + id,
                        type: "GET",
                        success: function(data) {
                            if(data.status == "success"){
                                swal("Poof! Your Data has been deleted!", {
                                    icon: "success",
                                });
                                loaddata();
                            }else{
                                swal("Oops", "ERROR : "+data.message,
                                    "error");
                            }
                        }
                    });
                }
            });
        });

        $(document).on('click', '.edit-cat', function(e) {
            e.preventDefault();
            var pid = $(this).attr('data-p-id');
            var id = $(this).attr('data-id');
            let ele = $(this).parent().parent().parent().parent();
            let name = $(ele).children()[1];
            let slug = $(ele).children()[2];
            $('#InputCat_name').val($(name).html());
            $('#InputSlug').val($(slug).html());
            $('#Inputparent_id').after('<input type="hidden" id="id" value="' + id + '">');
            if (pid == 0) {
                $('#Inputparent_id').val(0);
                $('#Inputparent_id').attr('disabled', true);
            } else {
                $('#Inputparent_id').val(pid);
            }
        });

        $('#submit').on('click', function(e) {
            e.preventDefault();
            let cat_name = $('#InputCat_name').val();
            let slug = $('#InputSlug').val();
            let parent_id = $('#Inputparent_id').val();
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
                    }
                    loaddata();
                    $("#SubmitForm")[0].reset();
                    $('#sendMessageModal').modal('toggle');
                }
            });
        });
        var myModalEl = document.getElementById('sendMessageModal')
        myModalEl.addEventListener('hidden.bs.modal', function(event) {
            $("#SubmitForm")[0].reset();
            if ($('#id').length) {
                $('#id').remove();
            }
        })
    });
</script>
@endsection
