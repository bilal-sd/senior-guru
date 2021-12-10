@extends('admin.layouts.main')

@section('main-section')
    <div id="main-wrapper">
        @include('admin.layouts.top-nav')
        @include('admin.layouts.side-bar')

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Components</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listing Form</h4>
                            </div>
                            <div class="card-body">
                                <div id="smartwizard" class="form-wizard order-create sw sw-theme-default sw-justified">
                                    <ul class="nav nav-wizard">
                                        <li><a class="nav-link inactive done" href="#wizard_Service">
                                                <span>1</span>
                                                <p>General Information</p>
                                            </a></li>

                                        <li><a class="nav-link inactive done" href="#wizard_Time">
                                                <span>2</span>
                                                <p>Listing Detail</p>
                                            </a></li>
                                        <li><a class="nav-link inactive active" href="#wizard_Details">
                                                <span>3</span>
                                                <p>General Property Features</p>
                                            </a></li>
                                        <li><a class="nav-link inactive done" href="#wizard_Payment">
                                                <span>4</span>
                                                <p>Payment</p>
                                            </a></li>
                                    </ul>
                                    <div class="tab-content" style="height: 315px;">
                                        <div id="wizard_Service" class="tab-pane" role="tabpanel"
                                            style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Business Name*</label>
                                                        <input type="text" name="firstName" class="form-control"
                                                            placeholder="Parsley" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Business Slug*</label>
                                                        <input type="text" name="lastName" class="form-control"
                                                            placeholder="Montana" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Category</label>
                                                        <select id="cat-type"
                                                            class="form-control form-control-lg wide mb-3">
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Email Address*</label>
                                                        <input type="email" class="form-control" id="inputGroupPrepend2"
                                                            aria-describedby="inputGroupPrepend2"
                                                            placeholder="example@example.com.com" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Phone Number*</label>
                                                        <input type="text" name="phoneNumber" class="form-control"
                                                            placeholder="(+1)408-657-9007" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Category*</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="card-header">
                                                    <h4 class="card-title">Location & Address</h4><br><br>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">Address 1*</label>
                                                        <input type="text" name="place" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">Address 2*</label>
                                                        <input type="text" name="place" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">



                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">State*</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select State</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">City*</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select City</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">County*</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select County</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">Zip*</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select Zip</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">Latitude*</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select Latitude</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">Longitude*</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select Longitude</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Contact Information</h4>
                                                    </div>
                                                    <p>Please fill in contact information of your listing.</p>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Website*</label>
                                                            <input type="text" name="firstName" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Email*</label>
                                                            <input type="email" name="firstName" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Phone*</label>
                                                            <input type="text" name="firstName" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Fax*</label>
                                                            <input type="text" name="firstName" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Advertisement
                                                                Phone*</label>
                                                            <input type="email" name="firstName" class="form-control">

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Business Phone*</label>
                                                            <input type="text" name="firstName" class="form-control">

                                                        </div>
                                                    </div>





                                                </div>
                                                <div class="row">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Listing Contacts/Access</h4><br><br>
                                                    </div>
                                                    <div class="card-header d-flex">
                                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#sendMessageModal" onclick="setVal(0)"
                                                            id="parent">Add Contacts</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="wizard_Time" class="tab-pane" role="tabpanel"
                                            style="display: none;">
                                            <div class="row">
                                                <div class="card-header">
                                                    <h4 class="card-title">Images And Videos</h4><br>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <input type="file" id="myFile" name="filename">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="card-header">
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            Active
                                                            <div>
                                                                <input type="radio" id="radio01-01" name="demo01" /><label
                                                                    for="radio01-01">Active</label>
                                                                <input type="radio" id="radio01-02" name="demo01" /><label
                                                                    for="radio01-02">Dactive</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Is A Book
                                                                Advertiser*</label>
                                                            <input type="text" name="firstName" class="form-control"
                                                                placeholder="Is A Book Advertiser" required="">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12 col-xxl-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">General Company Description
                                                                    </h4>
                                                                </div>
                                                                <div class="card-body custom-ekeditor">
                                                                    <div id="ckeditor" style="display: none;"></div>
                                                                    <div class="ck ck-reset ck-editor ck-rounded-corners"
                                                                        role="application" dir="ltr" lang="en"
                                                                        aria-labelledby="ck-editor__label_ec83e9d11ad436bac3dde74a3f4c42f75">
                                                                        <label class="ck ck-label ck-voice-label"
                                                                            id="ck-editor__label_ec83e9d11ad436bac3dde74a3f4c42f75">Rich
                                                                            Text Editor</label>
                                                                        <div class="ck ck-editor__top ck-reset_all"
                                                                            role="presentation">
                                                                            <div class="ck ck-sticky-panel">
                                                                                <div class="ck ck-sticky-panel__placeholder"
                                                                                    style="display: none;"></div>
                                                                                <div class="ck ck-sticky-panel__content">
                                                                                    <div class="ck ck-toolbar ck-toolbar_grouping"
                                                                                        role="toolbar"
                                                                                        aria-label="Editor toolbar">
                                                                                        <div class="ck ck-toolbar__items">
                                                                                            <div
                                                                                                class="ck ck-dropdown ck-heading-dropdown">
                                                                                                <button
                                                                                                    class="ck ck-button ck-off ck-button_with-text ck-dropdown__button"
                                                                                                    type="button"
                                                                                                    tabindex="-1"
                                                                                                    aria-labelledby="ck-editor__aria-label_e54f05036e2b314c1e83c71839308b70b"
                                                                                                    aria-haspopup="true"><span
                                                                                                        class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                            class="ck ck-tooltip__text">Heading</span></span><span
                                                                                                        class="ck ck-button__label"
                                                                                                        id="ck-editor__aria-label_e54f05036e2b314c1e83c71839308b70b">Paragraph</span><svg
                                                                                                        class="ck ck-icon ck-dropdown__arrow"
                                                                                                        viewBox="0 0 10 10">
                                                                                                        <path
                                                                                                            d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z">
                                                                                                        </path>
                                                                                                    </svg></button>
                                                                                                <div
                                                                                                    class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se">
                                                                                                    <ul
                                                                                                        class="ck ck-reset ck-list">
                                                                                                        <li
                                                                                                            class="ck ck-list__item">
                                                                                                            <button
                                                                                                                class="ck ck-button ck-heading_paragraph ck-on ck-button_with-text"
                                                                                                                type="button"
                                                                                                                tabindex="-1"
                                                                                                                aria-labelledby="ck-editor__aria-label_e7567e0a91e407511685ad38c2d4a2d8b"><span
                                                                                                                    class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                                        class="ck ck-tooltip__text"></span></span><span
                                                                                                                    class="ck ck-button__label"
                                                                                                                    id="ck-editor__aria-label_e7567e0a91e407511685ad38c2d4a2d8b">Paragraph</span></button>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="ck ck-list__item">
                                                                                                            <button
                                                                                                                class="ck ck-button ck-heading_heading1 ck-off ck-button_with-text"
                                                                                                                type="button"
                                                                                                                tabindex="-1"
                                                                                                                aria-labelledby="ck-editor__aria-label_e36cf96f2b1f8b94895388af07e451f07"><span
                                                                                                                    class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                                        class="ck ck-tooltip__text"></span></span><span
                                                                                                                    class="ck ck-button__label"
                                                                                                                    id="ck-editor__aria-label_e36cf96f2b1f8b94895388af07e451f07">Heading
                                                                                                                    1</span></button>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="ck ck-list__item">
                                                                                                            <button
                                                                                                                class="ck ck-button ck-heading_heading2 ck-off ck-button_with-text"
                                                                                                                type="button"
                                                                                                                tabindex="-1"
                                                                                                                aria-labelledby="ck-editor__aria-label_e292b34b206234e9c4cef7788d090677c"><span
                                                                                                                    class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                                        class="ck ck-tooltip__text"></span></span><span
                                                                                                                    class="ck ck-button__label"
                                                                                                                    id="ck-editor__aria-label_e292b34b206234e9c4cef7788d090677c">Heading
                                                                                                                    2</span></button>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="ck ck-list__item">
                                                                                                            <button
                                                                                                                class="ck ck-button ck-heading_heading3 ck-off ck-button_with-text"
                                                                                                                type="button"
                                                                                                                tabindex="-1"
                                                                                                                aria-labelledby="ck-editor__aria-label_efe8df5a5e6ad0cd62ecc826450aefa9a"><span
                                                                                                                    class="ck ck-tooltip ck-tooltip_s ck-hidden"><span
                                                                                                                        class="ck ck-tooltip__text"></span></span><span
                                                                                                                    class="ck ck-button__label"
                                                                                                                    id="ck-editor__aria-label_efe8df5a5e6ad0cd62ecc826450aefa9a">Heading
                                                                                                                    3</span></button>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div><span
                                                                                                class="ck ck-toolbar__separator"></span><button
                                                                                                class="ck ck-button ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_ebd8ff29277a0f341dc1258bd3ada9de1"
                                                                                                aria-pressed="false"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M10.187 17H5.773c-.637 0-1.092-.138-1.364-.415-.273-.277-.409-.718-.409-1.323V4.738c0-.617.14-1.062.419-1.332.279-.27.73-.406 1.354-.406h4.68c.69 0 1.288.041 1.793.124.506.083.96.242 1.36.478.341.197.644.447.906.75a3.262 3.262 0 0 1 .808 2.162c0 1.401-.722 2.426-2.167 3.075C15.05 10.175 16 11.315 16 13.01a3.756 3.756 0 0 1-2.296 3.504 6.1 6.1 0 0 1-1.517.377c-.571.073-1.238.11-2 .11zm-.217-6.217H7v4.087h3.069c1.977 0 2.965-.69 2.965-2.072 0-.707-.256-1.22-.768-1.537-.512-.319-1.277-.478-2.296-.478zM7 5.13v3.619h2.606c.729 0 1.292-.067 1.69-.2a1.6 1.6 0 0 0 .91-.765c.165-.267.247-.566.247-.897 0-.707-.26-1.176-.778-1.409-.519-.232-1.31-.348-2.375-.348H7z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Bold
                                                                                                        (Ctrl+B)</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_ebd8ff29277a0f341dc1258bd3ada9de1">Bold</span></button><button
                                                                                                class="ck ck-button ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_e3d65c61d477a054d0a32f055c669e2fb"
                                                                                                aria-pressed="false"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="m9.586 14.633.021.004c-.036.335.095.655.393.962.082.083.173.15.274.201h1.474a.6.6 0 1 1 0 1.2H5.304a.6.6 0 0 1 0-1.2h1.15c.474-.07.809-.182 1.005-.334.157-.122.291-.32.404-.597l2.416-9.55a1.053 1.053 0 0 0-.281-.823 1.12 1.12 0 0 0-.442-.296H8.15a.6.6 0 0 1 0-1.2h6.443a.6.6 0 1 1 0 1.2h-1.195c-.376.056-.65.155-.823.296-.215.175-.423.439-.623.79l-2.366 9.347z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Italic
                                                                                                        (Ctrl+I)</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_e3d65c61d477a054d0a32f055c669e2fb">Italic</span></button><button
                                                                                                class="ck ck-button ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_ede7dabf610986bdb072366aee8a43201"
                                                                                                aria-pressed="false"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="m11.077 15 .991-1.416a.75.75 0 1 1 1.229.86l-1.148 1.64a.748.748 0 0 1-.217.206 5.251 5.251 0 0 1-8.503-5.955.741.741 0 0 1 .12-.274l1.147-1.639a.75.75 0 1 1 1.228.86L4.933 10.7l.006.003a3.75 3.75 0 0 0 6.132 4.294l.006.004zm5.494-5.335a.748.748 0 0 1-.12.274l-1.147 1.639a.75.75 0 1 1-1.228-.86l.86-1.23a3.75 3.75 0 0 0-6.144-4.301l-.86 1.229a.75.75 0 0 1-1.229-.86l1.148-1.64a.748.748 0 0 1 .217-.206 5.251 5.251 0 0 1 8.503 5.955zm-4.563-2.532a.75.75 0 0 1 .184 1.045l-3.155 4.505a.75.75 0 1 1-1.229-.86l3.155-4.506a.75.75 0 0 1 1.045-.184z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Link
                                                                                                        (Ctrl+K)</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_ede7dabf610986bdb072366aee8a43201">Link</span></button><button
                                                                                                class="ck ck-button ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_ef485a6f6e097f722297acdc0c9df9e06"
                                                                                                aria-pressed="false"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0C1 4.784 1.777 4 2.75 4c.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75C1.784 7.5 1 6.723 1 5.75zm6 9c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zm-6 0c0-.966.777-1.75 1.75-1.75.966 0 1.75.777 1.75 1.75 0 .966-.777 1.75-1.75 1.75-.966 0-1.75-.777-1.75-1.75z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Bulleted
                                                                                                        List</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_ef485a6f6e097f722297acdc0c9df9e06">Bulleted
                                                                                                    List</span></button><button
                                                                                                class="ck ck-button ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_e637e5b6a823d263250b42670888c7d06"
                                                                                                aria-pressed="false"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M7 5.75c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM3.5 3v5H2V3.7H1v-1h2.5V3zM.343 17.857l2.59-3.257H2.92a.6.6 0 1 0-1.04 0H.302a2 2 0 1 1 3.995 0h-.001c-.048.405-.16.734-.333.988-.175.254-.59.692-1.244 1.312H4.3v1h-4l.043-.043zM7 14.75a.75.75 0 0 1 .75-.75h9.5a.75.75 0 1 1 0 1.5h-9.5a.75.75 0 0 1-.75-.75z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Numbered
                                                                                                        List</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_e637e5b6a823d263250b42670888c7d06">Numbered
                                                                                                    List</span></button><span
                                                                                                class="ck ck-toolbar__separator"></span><button
                                                                                                class="ck ck-button ck-disabled ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_ec2445b7a37180c4a3ee762af11aec2ed"
                                                                                                aria-disabled="true"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M2 3.75c0 .414.336.75.75.75h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 0 0-.75.75zm5 6c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM2.75 16.5h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 1 0 0 1.5zm1.618-9.55L.98 9.358a.4.4 0 0 0 .013.661l3.39 2.207A.4.4 0 0 0 5 11.892V7.275a.4.4 0 0 0-.632-.326z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Decrease
                                                                                                        indent</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_ec2445b7a37180c4a3ee762af11aec2ed">Decrease
                                                                                                    indent</span></button><button
                                                                                                class="ck ck-button ck-disabled ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_e22ad0ec9875374e904f42a2276fe66f0"
                                                                                                aria-disabled="true"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M2 3.75c0 .414.336.75.75.75h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 0 0-.75.75zm5 6c0 .414.336.75.75.75h9.5a.75.75 0 1 0 0-1.5h-9.5a.75.75 0 0 0-.75.75zM2.75 16.5h14.5a.75.75 0 1 0 0-1.5H2.75a.75.75 0 1 0 0 1.5zM1.632 6.95 5.02 9.358a.4.4 0 0 1-.013.661l-3.39 2.207A.4.4 0 0 1 1 11.892V7.275a.4.4 0 0 1 .632-.326z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Increase
                                                                                                        indent</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_e22ad0ec9875374e904f42a2276fe66f0">Increase
                                                                                                    indent</span></button><span
                                                                                                class="ck ck-toolbar__separator"></span><span
                                                                                                class="ck-file-dialog-button"><button
                                                                                                    class="ck ck-button ck-off"
                                                                                                    type="button"
                                                                                                    tabindex="-1"
                                                                                                    aria-labelledby="ck-editor__aria-label_e955a743de8da6c6eea4a5d267a000a75"><svg
                                                                                                        class="ck ck-icon ck-button__icon"
                                                                                                        viewBox="0 0 20 20">
                                                                                                        <path
                                                                                                            d="M6.91 10.54c.26-.23.64-.21.88.03l3.36 3.14 2.23-2.06a.64.64 0 0 1 .87 0l2.52 2.97V4.5H3.2v10.12l3.71-4.08zm10.27-7.51c.6 0 1.09.47 1.09 1.05v11.84c0 .59-.49 1.06-1.09 1.06H2.79c-.6 0-1.09-.47-1.09-1.06V4.08c0-.58.49-1.05 1.1-1.05h14.38zm-5.22 5.56a1.96 1.96 0 1 1 3.4-1.96 1.96 1.96 0 0 1-3.4 1.96z">
                                                                                                        </path>
                                                                                                    </svg><span
                                                                                                        class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                            class="ck ck-tooltip__text">Insert
                                                                                                            image</span></span><span
                                                                                                        class="ck ck-button__label"
                                                                                                        id="ck-editor__aria-label_e955a743de8da6c6eea4a5d267a000a75">Insert
                                                                                                        image</span></button><input
                                                                                                    class="ck-hidden"
                                                                                                    type="file"
                                                                                                    tabindex="-1"
                                                                                                    accept="image/jpeg,image/png,image/gif,image/bmp,image/webp,image/tiff"
                                                                                                    multiple="true"></span><button
                                                                                                class="ck ck-button ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_ed37b167fe6128bcf61e54400bbbf6f12"
                                                                                                aria-pressed="false"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M3 10.423a6.5 6.5 0 0 1 6.056-6.408l.038.67C6.448 5.423 5.354 7.663 5.22 10H9c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574zm8 0a6.5 6.5 0 0 1 6.056-6.408l.038.67c-2.646.739-3.74 2.979-3.873 5.315H17c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Block
                                                                                                        quote</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_ed37b167fe6128bcf61e54400bbbf6f12">Block
                                                                                                    quote</span></button>
                                                                                            <div class="ck ck-dropdown">
                                                                                                <button
                                                                                                    class="ck ck-button ck-off ck-dropdown__button"
                                                                                                    type="button"
                                                                                                    tabindex="-1"
                                                                                                    aria-labelledby="ck-editor__aria-label_e81d6a7c16fe2ccd3bb5380cf7d50ad22"
                                                                                                    aria-haspopup="true"><svg
                                                                                                        class="ck ck-icon ck-button__icon"
                                                                                                        viewBox="0 0 20 20">
                                                                                                        <path
                                                                                                            d="M3 6v3h4V6H3zm0 4v3h4v-3H3zm0 4v3h4v-3H3zm5 3h4v-3H8v3zm5 0h4v-3h-4v3zm4-4v-3h-4v3h4zm0-4V6h-4v3h4zm1.5 8a1.5 1.5 0 0 1-1.5 1.5H3A1.5 1.5 0 0 1 1.5 17V4c.222-.863 1.068-1.5 2-1.5h13c.932 0 1.778.637 2 1.5v13zM12 13v-3H8v3h4zm0-4V6H8v3h4z">
                                                                                                        </path>
                                                                                                    </svg><span
                                                                                                        class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                            class="ck ck-tooltip__text">Insert
                                                                                                            table</span></span><span
                                                                                                        class="ck ck-button__label"
                                                                                                        id="ck-editor__aria-label_e81d6a7c16fe2ccd3bb5380cf7d50ad22">Insert
                                                                                                        table</span><svg
                                                                                                        class="ck ck-icon ck-dropdown__arrow"
                                                                                                        viewBox="0 0 10 10">
                                                                                                        <path
                                                                                                            d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z">
                                                                                                        </path>
                                                                                                    </svg></button>
                                                                                                <div
                                                                                                    class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="ck ck-dropdown">
                                                                                                <button
                                                                                                    class="ck ck-button ck-off ck-dropdown__button"
                                                                                                    type="button"
                                                                                                    tabindex="-1"
                                                                                                    aria-labelledby="ck-editor__aria-label_ed5d3554a5d34c3d8a2398e43138cdc92"
                                                                                                    aria-haspopup="true"><svg
                                                                                                        class="ck ck-icon ck-button__icon"
                                                                                                        viewBox="0 0 20 20">
                                                                                                        <path
                                                                                                            d="M18.68 3.03c.6 0 .59-.03.59.55v12.84c0 .59.01.56-.59.56H1.29c-.6 0-.59.03-.59-.56V3.58c0-.58-.01-.55.6-.55h17.38zM15.77 15V5H4.2v10h11.57zM2 4v1h1V4H2zm0 2v1h1V6H2zm0 2v1h1V8H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zM17 4v1h1V4h-1zm0 2v1h1V6h-1zm0 2v1h1V8h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zM7.5 7.177a.4.4 0 0 1 .593-.351l5.133 2.824a.4.4 0 0 1 0 .7l-5.133 2.824a.4.4 0 0 1-.593-.35V7.176v.001z">
                                                                                                        </path>
                                                                                                    </svg><span
                                                                                                        class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                            class="ck ck-tooltip__text">Insert
                                                                                                            media</span></span><span
                                                                                                        class="ck ck-button__label"
                                                                                                        id="ck-editor__aria-label_ed5d3554a5d34c3d8a2398e43138cdc92">Insert
                                                                                                        media</span><svg
                                                                                                        class="ck ck-icon ck-dropdown__arrow"
                                                                                                        viewBox="0 0 10 10">
                                                                                                        <path
                                                                                                            d="M.941 4.523a.75.75 0 1 1 1.06-1.06l3.006 3.005 3.005-3.005a.75.75 0 1 1 1.06 1.06l-3.549 3.55a.75.75 0 0 1-1.168-.136L.941 4.523z">
                                                                                                        </path>
                                                                                                    </svg></button>
                                                                                                <div
                                                                                                    class="ck ck-reset ck-dropdown__panel ck-dropdown__panel_se">
                                                                                                    <form
                                                                                                        class="ck ck-media-form ck-responsive-form"
                                                                                                        tabindex="-1">
                                                                                                        <div
                                                                                                            class="ck ck-labeled-field-view ck-labeled-field-view_empty">
                                                                                                            <div
                                                                                                                class="ck ck-labeled-field-view__input-wrapper">
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    class="ck ck-input ck-input-text ck-input-text_empty"
                                                                                                                    id="ck-labeled-field-view-e1a3ec7a41aa97f6f38fbdd5715622132"
                                                                                                                    aria-describedby="ck-labeled-field-view-status-ed515588f5faedf92f622ee665a4811d9"><label
                                                                                                                    class="ck ck-label"
                                                                                                                    id="ck-editor__label_e62c36e6b20e143560ffb88baaf57cc1d"
                                                                                                                    for="ck-labeled-field-view-e1a3ec7a41aa97f6f38fbdd5715622132">Media
                                                                                                                    URL</label>
                                                                                                            </div>
                                                                                                            <div class="ck ck-labeled-field-view__status"
                                                                                                                id="ck-labeled-field-view-status-ed515588f5faedf92f622ee665a4811d9">
                                                                                                                Paste the
                                                                                                                media URL in
                                                                                                                the input.
                                                                                                            </div>
                                                                                                        </div><button
                                                                                                            class="ck ck-button ck-disabled ck-off ck-button-save"
                                                                                                            type="submit"
                                                                                                            tabindex="-1"
                                                                                                            aria-labelledby="ck-editor__aria-label_e474e80e69c99fa5387e2baf623d09bb4"
                                                                                                            aria-disabled="true"><svg
                                                                                                                class="ck ck-icon ck-button__icon"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M6.972 16.615a.997.997 0 0 1-.744-.292l-4.596-4.596a1 1 0 1 1 1.414-1.414l3.926 3.926 9.937-9.937a1 1 0 0 1 1.414 1.415L7.717 16.323a.997.997 0 0 1-.745.292z">
                                                                                                                </path>
                                                                                                            </svg><span
                                                                                                                class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                                    class="ck ck-tooltip__text">Save</span></span><span
                                                                                                                class="ck ck-button__label"
                                                                                                                id="ck-editor__aria-label_e474e80e69c99fa5387e2baf623d09bb4">Save</span></button><button
                                                                                                            class="ck ck-button ck-off ck-button-cancel"
                                                                                                            type="button"
                                                                                                            tabindex="-1"
                                                                                                            aria-labelledby="ck-editor__aria-label_e22121ab0f67787a4f440c56e7cb35af8"><svg
                                                                                                                class="ck ck-icon ck-button__icon"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="m11.591 10.177 4.243 4.242a1 1 0 0 1-1.415 1.415l-4.242-4.243-4.243 4.243a1 1 0 0 1-1.414-1.415l4.243-4.242L4.52 5.934A1 1 0 0 1 5.934 4.52l4.243 4.243 4.242-4.243a1 1 0 1 1 1.415 1.414l-4.243 4.243z">
                                                                                                                </path>
                                                                                                            </svg><span
                                                                                                                class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                                    class="ck ck-tooltip__text">Cancel</span></span><span
                                                                                                                class="ck ck-button__label"
                                                                                                                id="ck-editor__aria-label_e22121ab0f67787a4f440c56e7cb35af8">Cancel</span></button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div><button
                                                                                                class="ck ck-button ck-disabled ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_e1c4494b8be3d6b4e49da62d294fb3356"
                                                                                                aria-disabled="true"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="m5.042 9.367 2.189 1.837a.75.75 0 0 1-.965 1.149l-3.788-3.18a.747.747 0 0 1-.21-.284.75.75 0 0 1 .17-.945L6.23 4.762a.75.75 0 1 1 .964 1.15L4.863 7.866h8.917A.75.75 0 0 1 14 7.9a4 4 0 1 1-1.477 7.718l.344-1.489a2.5 2.5 0 1 0 1.094-4.73l.008-.032H5.042z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Undo
                                                                                                        (Ctrl+Z)</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_e1c4494b8be3d6b4e49da62d294fb3356">Undo</span></button><button
                                                                                                class="ck ck-button ck-disabled ck-off"
                                                                                                type="button" tabindex="-1"
                                                                                                aria-labelledby="ck-editor__aria-label_efdfbd7ec15c69e65afe089def3c1ab42"
                                                                                                aria-disabled="true"><svg
                                                                                                    class="ck ck-icon ck-button__icon"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="m14.958 9.367-2.189 1.837a.75.75 0 0 0 .965 1.149l3.788-3.18a.747.747 0 0 0 .21-.284.75.75 0 0 0-.17-.945L13.77 4.762a.75.75 0 1 0-.964 1.15l2.331 1.955H6.22A.75.75 0 0 0 6 7.9a4 4 0 1 0 1.477 7.718l-.344-1.489A2.5 2.5 0 1 1 6.039 9.4l-.008-.032h8.927z">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="ck ck-tooltip ck-tooltip_s"><span
                                                                                                        class="ck ck-tooltip__text">Redo
                                                                                                        (Ctrl+Y)</span></span><span
                                                                                                    class="ck ck-button__label"
                                                                                                    id="ck-editor__aria-label_efdfbd7ec15c69e65afe089def3c1ab42">Redo</span></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ck ck-editor__main"
                                                                            role="presentation">
                                                                            <div class="ck-blurred ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline"
                                                                                lang="en" dir="ltr" role="textbox"
                                                                                aria-label="Rich Text Editor, main"
                                                                                contenteditable="true">
                                                                                <p><br data-cke-filler="true"></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Keywords </label>
                                                        <input type="email" class="form-control" id="emial1"
                                                            placeholder="Keywords" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Package</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Open this select Package</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="wizard_Details" class="tab-pane" role="tabpanel"
                                            style="display: block;">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Property Features</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="basic-form">
                                                                <form>
                                                                    <div class="mb-3 ">
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" value=""
                                                                                    checked="">Age Restrictions
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Covered Parking
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Fitness Center
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Furnished Apts Available

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Smoker Friendly
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Controlled Access
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Property Services</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="basic-form">
                                                                <form>
                                                                    <div class="mb-3 ">
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" value=""
                                                                                    checked="">Activities
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Meals/Meal Options
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Levels of Housing Care Offered</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="basic-form">
                                                                <form>
                                                                    <div class="mb-3 ">
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" value=""
                                                                                    checked="">Assisted Living Community
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Secured Memory Care Uni
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Skilled Nursing Facility
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    value="">Retirement Community

                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" value="">CCRC
                                                                                Campus
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div id="wizard_Payment" class="tab-pane" role="tabpanel">

                                            <div class="row emial-setup">
                                                <div class="col-lg-3 col-sm-6 col-6">
                                                    <div class="mb-3">
                                                        <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                            <input type="radio" name="emailclient" id="mailclient11">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">I'm using Gmail</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-6">
                                                    <div class="mb-3">
                                                        <label for="mailclient12" class="mailclinet mailclinet-office">
                                                            <input type="radio" name="emailclient" id="mailclient12">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-office" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">I'm using Office</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-6">
                                                    <div class="mb-3">
                                                        <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                            <input type="radio" name="emailclient" id="mailclient13">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">I'm using Drive</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-6">
                                                    <div class="mb-3">
                                                        <label for="mailclient14" class="mailclinet mailclinet-another">
                                                            <input type="radio" name="emailclient" id="mailclient14">
                                                            <span class="mail-icon">
                                                                <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">Another Service</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="skip-email text-center">
                                                        <p>Or if want skip this step entirely and setup it later</p>
                                                        <a href="javascript:void(0)">Skip step</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;"><button
                                            class="btn btn-primary sw-btn-prev" type="button">Previous</button><button
                                            class="btn btn-primary sw-btn-next" type="button">Next</button></div>
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
                        <h5 class="modal-title">Add New Contacts</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form class="comment-form" id="SubmitForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="hidden" id="Inputparent_id" name="parent_id" value="0">
                                    <div class="mb-3">
                                        <label class="text-black font-w600 form-label">Contact First Name <span
                                                class="required">*</span></label>
                                        <input type="text" class="form-control" id="InputCat_name" name="cat_name"
                                            placeholder="Contact First Name">
                                        <span class="text-danger" id="CategoryErrorMsg"></span>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="hidden" id="Inputparent_id" name="parent_id" value="0">
                                    <div class="mb-3">
                                        <label class="text-black font-w600 form-label">Contact Last Name <span
                                                class="required">*</span></label>
                                        <input type="text" class="form-control" id="InputCat_name" name="cat_name"
                                            placeholder="Contact Last Name">
                                        <span class="text-danger" id="CategoryErrorMsg"></span>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="text-black font-w600 form-label">Contact Email <span
                                                class="required">*</span></label>
                                        <input type="text" class="form-control" id="InputSlug" name="slug"
                                            placeholder="Contact Email">
                                        <span class="text-danger" id="slugErrorMsg"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="text-black font-w600 form-label">Contact Title <span
                                                class="required">*</span></label>
                                        <input type="text" class="form-control" id="InputSlug" name="slug"
                                            placeholder="Contact Title">
                                        <span class="text-danger" id="slugErrorMsg"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Primary Contact
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3 mb-0">
                                        <input type="submit" id="submit" value="Save" class="submit btn btn-primary"
                                            name="submit">
                                        <button class="btn btn-light" data-bs-dismiss="modal"
                                            type="button">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="getId" value="{{ $catId }}">
        @include('admin.layouts.bottom-footer')
    </div>
@endsection

@section('section-script')
    <script>
        function childmaker(child, level = 1, html = "") {
            child = child.original;
            let dash = '';
            for (let i = 1; i <= level; i++) {
                dash += "-";
            }
            if (child.length > 0) {
                $.each(child, function(index, value) {
                    html += '<option value=' + value['slug'] + '>' + dash + value['name'] + '</option>';
                    html += childmaker(value['children'], level + 1);
                });
            }
            return html;
        }

        function loaddata() {
            let html = "";
            let level = 1;
            let id = $("#getId").val();
            $.ajax({
                type: "GET",
                url: "{{ URL::to('admin/categories/show/') }}" + "/" + level + "/" + id,
                dataType: "JSON",
                success: function(response) {
                    $.each(response, function(index, value) {
                        html += '<option value=' + value['slug'] + '>' + value['name'] + '</option>';
                        html += childmaker(value['children']);
                        console.log(value['children'])
                    });
                    $("#cat-type").html(html);
                }
            });
        }
        loaddata();
    </script>
@endsection
