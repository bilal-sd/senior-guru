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
        @slot('right_button')
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#AminitiesForm"
                data-bs-original-title="" title="">Add Aminities</button>
        @endslot
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <div class="col-10">

                            </h5>
                            <ol class="breadcrumb pt-3" id="bread">
                                <li class="breadcrumb-item"><a type="button" href="">Home</a>
                                </li>

                                {{-- <li class="breadcrumb-item active">Breadcrumb</li> --}}
                            </ol>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="">
                            <table class="display dataTable" id="basic-3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Aminities</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ameniti as $kye => $amenitis)
                                        <tr>
                                            <td>{{ $kye + 1 }}</td>
                                            <td>{{ $amenitis->type }}</td>
                                            <td>{{ $amenitis->aminities }}</td>
                                            <td><a data-id="{{ $amenitis->id }}" class="editopenModal"
                                                    data-bs-toggle="modal" data-bs-target="#AminitiesForm"><i
                                                        class="icon-pencil-alt"></i></a>
                                                <a type="button" class="deleteRecord" data-id="{{ $amenitis->id }}"><i
                                                        class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AminitiesForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Aminities</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="AminityForm">
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Type:</label>
                            <input class="form-control" id="type_name" name="type" type="text" value="">
                            <span class="text-danger error" id="typeErrorMsg"></span>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Aminities Name:</label>
                            <input class="form-control" id="aminities_name" name="aminities" type="text" value="">
                            <span class="text-danger error" id="aminitiesErrorMsg"></span>

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
                "paging": true,
                "ordering": true,
                "info": true
            });
            $(document).ready(function() {
                $(document).on('click', '.editopenModal', function() {
                    $(".modal-title").html("Edit Category");
                    var id = $(this).data('id');
                    let type = $(this).parent().parent().children()[1];
                    let ami = $(this).parent().parent().children()[2];
                    console.log();
                    $('#type_name').val($(type).text());
                    $('#aminities_name').val($(ami).text());
                });
                var myModalEl = document.getElementById('AminitiesForm')
                myModalEl.addEventListener('hidden.bs.modal', function(event) {
                    $(".modal-title").html("Add New Category");
                    $("#AminityForm")[0].reset();
                    $(".error").html('');
                    if ($('#id').length) {
                        $('#id').remove();
                    }
                });
            })
            $('#AminityForm').on('submit', function(e) {
                e.preventDefault();
                let type = $('#type_name').val();
                let aminities = $('#aminities_name').val();
                let id = $('#id').val();
                let dataobj = {
                    "_token": "{{ csrf_token() }}",
                    type: type,
                    aminities: aminities,
                };
                if ($('#id').length) {
                    dataobj.id = id;
                }
                $.ajax({
                    url: "{{ route('aminitiesForm') }}",
                    type: "POST",
                    data: dataobj,
                    success: function(response) {
                        $('#AminitiesForm').modal('hide');
                        if (response.success == 'success') {
                            swal({
                                title: "success!",
                                text: "You clicked the button!",
                                icon: "success",
                                button: "Aww yiss!",
                            }).then((value) => {
                                window.location.reload(true);
                            });

                        } else {
                            swal({
                                title: "Error!",
                                text: response.error.errorInfo[2],
                                icon: "error",
                                button: "Aww yiss!",
                            });
                        }
                    },
                    // error: function(response) {
                    //     $('#typeErrorMsg').text(response.responseJSON.errors.type);
                    //     $('#aminitiesErrorMsg').text(response.responseJSON.errors.aminities);
                    // }
                });
            });
            $(document).on("click", ".deleteRecord", function() {
                let row = $(this).parent().parent();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var id = $(this).data("id");
                            var url = "{{ Route('aminitiesdelete', ':id') }}";
                            url = url.replace(":id", id);
                            $.ajax({
                                url: url,
                                type: 'GET',
                                success: function() {
                                    console.log("it Works");
                                }
                            });
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            })
                            $(row).hide(2000);
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });

            });
            jQuery(document).ready(function() {
                $("#AminityForm").validate({
                    rules: {
                        type: {
                            required: true,
                        },
                        aminities: {
                            required: true,
                        },
                    },
                    messages: {
                        type: {
                            required: "This type field is required"
                            
                        },
                        aminities: {
                            required: "This aminities field is required"
                            
                        },
                    }
                })
            });
        </script>
    @endpush
@endsection
