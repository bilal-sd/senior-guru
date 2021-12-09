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
