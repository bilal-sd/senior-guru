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
        .error{
            margin: 0px !important;
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
                            @php
                                $bread = array_reverse($bread);
                            @endphp
                            <h5 id="Heading">
                                @if (count($bread)>0)
                                    {{end($bread)->name}}
                                @else
                                    {{"Home"}}
                                @endif
                            </h5>
                            <ol class="breadcrumb pt-3" id="bread">
                                <li class="breadcrumb-item"><a type="button" href="{{Route('admin.categories')}}">Home</a></li>
                                @foreach ($bread as $b)
                                <li class="breadcrumb-item"><a type="button" href="{{Route('admin.categories',$b->id)}}">{{$b->name}}</a></li>
                                @endforeach
                                {{-- <li class="breadcrumb-item active">Breadcrumb</li> --}}
                            </ol>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#CategoryForm" data-bs-original-title="" title="">Add Category</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <table class="display dataTable" id="basic-3">
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
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->subcount}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            @php
                                            if ($category->status==1){
                                                $html = "Active";
                                                $status = "checked";
                                            }else{
                                                $html = "Inactive";
                                                $status = "";
                                            }
                                            @endphp
                                            <div class="media-body text-center switch-sm">
                                                <span class="me-2">{{$html}}</span>
                                                <label class="switch">
                                                    <input type="checkbox" class="status" data-id="{{$category->id}}" {{$status}}>
                                                    <span class="switch-state"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between px-3">
                                                <a type="button" class="edit-cat" data-bs-toggle="modal" data-bs-target="#CategoryForm" data-id="{{$category->id}}"><i class="icon-pencil-alt"></i></a>
                                                @if ($category->subcount == 0)
                                                <a type="button" class="del-cat" data-id="{{$category->id}}"><i class="icon-trash text-danger"></i></a>
                                                @endif
                                                @if ($category->subcount > 0)
                                                    <a type="button" href="{{Route('admin.categories',$category->id)}}" class="view-sub"><i class="fa fa-eye"></i></a>                                                    
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach
                                </tbody>
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
                                <label class="col-form-label" for="recipient-name">Select Sub Category:</label>
                                <select name="parent_id" id="Inputparent_id" class="form-control">
                                    <option value="0">Parent</option>
                                    @foreach ($bread as $b)
                                    <option value="{{$b->id}}" @if (end($bread)->id==$b->id) selected @endif>- {{$b->name}}</option>
                                    @endforeach
                                    @foreach ($categories as $option)
                                    <option value="{{$option->id}}">{{$option->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">Slug:</label>
                                <input class="form-control" id="InputSlug" name="slug" type="text" value="">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" id="submit" type="submit">Save</button>
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
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script>
            $('#basic-3').DataTable({
                "paging":   true,
                "ordering": true,
                "info":     true
            });
            $(document).ready(function() {
                $(document).on('keyup', '#InputCat_name', function() {
                    var name = $(this).val();
                    var slug = name.toLowerCase().trim().replace(/ /g, '-');
                    $("#InputSlug").val(slug);
                });
                $(document).on('click', 'tbody .del-cat', function(e) {
                    e.preventDefault();
                    var $this =  $(this);
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
                                        $($this).parent().parent().parent().hide(1000);
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
                    let text = $(this).parent().prev();

                    if ($(text).html() == "Active") {
                        $(text).html("Inactive")
                    }else if ($(text).html() == "Inactive") {
                        $(text).html("Active");
                    }
                    $.ajax({
                        type: "GET",
                        url: "{{ URL::to('admin/categories/status') }}" + "/" + id,
                        dataType: "JSON",
                        success: function(response) {
                            if (response.status == 1) {
                            }
                        }
                    });
                });
                $('#SubmitForm').on('submit', function(e) {
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
                                $('#Inputparent_id').data('val', 0);
                            }
                            location.reload();
                            $("#SubmitForm")[0].reset();
                            $('#CategoryForm').modal('toggle');
                        }
                    });
                });
                var myModalEl = document.getElementById('CategoryForm')
                myModalEl.addEventListener('hidden.bs.modal', function(event) {
                    $(".modal-title").html("Add New Category");
                    $("#SubmitForm")[0].reset();
                    if ($('#id').length) {
                        $('#id').remove();
                    }
                    $("#Inputparent_id > option").removeAttr("disabled");
                });
                $(document).on('click', '.edit-cat', function(e) {
                    e.preventDefault();
                    $(".modal-title").html("Edit Category");
                    var pid = $(this).attr('data-pid');
                    var id = $(this).attr('data-id');
                    let ele = $(this).parent().parent().parent();
                    let name = $(ele).children()[1];
                    let slug = $(ele).children()[3];
                    $('#InputCat_name').val($(name).html());
                    $('#InputSlug').val($(slug).html());
                    $('#InputCat_name').after('<input type="hidden" id="id" value="' + id + '">');
                    $("#Inputparent_id").find('option[value="'+id+'"]').attr("disabled","disabled");
                });
            });
            jQuery(document).ready(function() {
                $("#SubmitForm").validate({
                    rules: {
                        slug: {
                            required: true,
                        }, 
                        cat_name: {
                            required: true,
                        },
                    },
                    messages: {
                        slug: {
                            required: "This slug field is required"
                       
                        },
                        cat_name: {
                            required: "This Category field is required"
                        },
                      
                    }
                })
            });
        </script>
    @endpush

@endsection
