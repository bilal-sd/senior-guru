@extends('admin.layouts.main')

@section('main-section')
    <div id="main-wrapper">
        @include('admin.layouts.top-nav')
        @include('admin.layouts.side-bar')
        <div class="content-body">

            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row">
                            @foreach($childCat as $parents)
                            <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
                                <a href="{{ route('admin.listing-form',$parents["id"]) }}">
                                    <div class="card">
                                        <div class="jobs2 card-body">
                                            <div class="text-center">
                                                <span>
                                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71"
                                                        height="71" viewBox="0 0 71 71">
                                                        <g transform="translate(-457 -443)">
                                                            <rect width="71" height="71" rx="12"
                                                                transform="translate(457 443)" fill="#c5c5c5"></rect>
                                                            <g transform="translate(457 443)">
                                                                <rect data-name="placeholder" width="71" height="71" rx="12"
                                                                    fill="#2769ee"></rect>
                                                                <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                                    transform="translate(15 20)" fill="#fff"></circle>
                                                                <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                                    transform="translate(36 15)" fill="#ffe70c"
                                                                    style="mix-blend-mode: multiply;isolation: isolate">
                                                                </circle>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <h4 class="fs-20 mb-0">{{$parents["name"]}}</h4>
                                                <span class="text-primary mb-3 d-block">Create Listing</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ---------model fomr---------- --}}

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
