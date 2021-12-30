@extends('layouts.admin.master')

@section('title')Create Listing
    {{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/page-builder.css') }}">


    <style>
        .b-b-dark2 {
            border-bottom: 1px solid #d1d1d1 !important;
        }

    </style>
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Listing Create Form</h3>
        @endslot
        <li class="breadcrumb-item">Listing</li>
        <li class="breadcrumb-item">Create</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Form </h5>
                    </div>
                    <div class="card-body">
                        <form class="f1" method="POST" id="SubmitForm">
                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                                </div>
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                    <p>General Information</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>Listing Detail</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                    <p>General Property Features</p>
                                </div>
                            </div>
                            <fieldset>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="businessname">Business Name*</label>
                                                        <input class="form-control" id="businessname" type="text"
                                                            name="business" value="{{old('business')}}" placeholder="Business Name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="bs">Business Slug*</label>
                                                        <input class="form-control" id="inputslug" name="slug"
                                                            placeholder="Business Slug" required=""
                                                            value="@if (isset($listing)){{ $listing->slug }}{{old('slug')}}"@endif">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="f1-first-name" for="cat-type">Category</label>
                                                        <select id="cat-type" name="category"
                                                            class="form-control form-control-lg wide mb-3">
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="email">Email Address*</label>
                                                        <input class="form-control" value="{{old('email')}}" id="email" type="email" name="email"
                                                            placeholder="Email Address" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="pnumber">Phone Number*</label>
                                                        <input class="form-control" value="{{old('phone')}}" id="pnumber" type="text"
                                                            name="phone" maxlength="14" minlength="12"  placeholder="Phone Number" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="WebSite" for="WebSite">WebSite</label>
                                                        <input class="form-control"  value="{{old('web')}}" id="website" type="text" name="web"
                                                            placeholder="WebSite">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="b-b-dark2">Location & Address</h5><br>
                                            <div class="form-group">
                                                <label for="paddress">Permanent address*</label>
                                                <input class="form-control" id="paddress" type="text" name="address1"
                                                    placeholder="Permanent addres" required=""  value="{{old('address1')}}" >
                                            </div>
                                            <div class="form-group">
                                                <label for="address2">Address 2</label>
                                                <input class="form-control" id="address2" type="text" value="{{old('address2')}}" name="address2"
                                                    placeholder="Address">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label" for="country">County*</label>
                                                        <select class="form-select" required name="country"
                                                            aria-label="Default select example"  id="country">
                                                            <option selected disabled>Select Country</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">State*</label>
                                                        <select class="form-select" required name="state"
                                                            aria-label="Default select example" id="state">
                                                            <option selected disabled>Select State</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label">City*</label>
                                                        <select class="form-select" required name="city"
                                                            aria-label="Default select example" id="city">
                                                            <option selected disabled>Select City</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label" for="zip">Zip*</label>
                                                        <input class="form-control" id="zip" value="{{old('zip')}}" type="text" name="zip"
                                                            placeholder="Zip Code" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label"
                                                            for="Latitude">Latitude*</label>
                                                        <input class="form-control" id="latitude" value="{{old('latitude')}}" name="latitude"
                                                            type="text" placeholder="Latitude" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-3">
                                                    <div class="mb-3"><br>
                                                        <label class="text-label form-label"
                                                            for="Longitude">Longitude*</label>
                                                        <input class="form-control" id="longitude"  value="{{old('longitude')}}" type="text"
                                                            name="longitude" placeholder="Longitude" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="getId" name="typeslug" value="{{ $catSlug }}">
                                <div class="f1-buttons">
                                    <button class="btn btn-primary btn-next" type="submit">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="b-b-dark2">Images And Videos</h5><br>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-3 col-form-label" for="img">Upload File</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" name="img" id="img" type="file" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="b-b-dark2">Listing Helpers</h5><br>
                                            <div class="row">
                                                <div class="form-group  col-lg-4 mb-3">
                                                    <label>Status</label>
                                                    <div class="col-sm-9">
                                                        <div class="form-check radio radio-primary">
                                                            <input class="form-check-input" id="radio11" type="radio"
                                                                name="status" value="1" chacked id="active" />
                                                            <label class="form-check-label" for="radio11">Active</label>
                                                        </div>
                                                        <div class="form-check radio radio-primary">
                                                            <input class="form-check-input" id="radio22" type="radio"
                                                                name="status" value="0" id="inactive">
                                                            <label class="form-check-label" for="radio22">Inactive</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 mb-3">
                                                    <label class="text-label form-label" for="keyword">Keywords*</label>
                                                    <input class="f1-password form-control" id="keyword" type="text"
                                                        name="keyword" placeholder="Keywords.." required="">
                                                </div>
                                                <div class="form-group col-lg-4 mb-3">
                                                    <label class="text-label form-label" for="package">Package*</label>
                                                    <select class="form-select" name="Package"
                                                        aria-label="Default select example" id="package">
                                                        <option selected disabled>Select Package</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="b-b-dark2">General Company Description </h5><br>

                                            <div class="form-group">
                                                <label class="form-label" for="exampleFormControlTextarea4"
                                                    for="descr">Description</label>
                                                <textarea class="form-control" id="description" rows="5" cols="100"
                                                    name="description"></textarea>
                                            </div>
                                            <div class="f1-buttons">
                                                <button class="btn btn-primary btn-previous"
                                                    type="button">Previous</button>
                                                <button class="btn btn-primary btn-next" type="button">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <h5 class="b-b-dark2">Property Features </h5><br>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach ($aminities as $item)
                                                    @if ($item['type'] == 'pf')
                                                        <div class="col-md-4">
                                                            <div class="form-group m-t-15 m-checkbox-inline mb-0">
                                                                <div class="checkbox checkbox-dark">
                                                                    <input id="inline{{ $item->id }}" type="checkbox"
                                                                        value="{{ $item->id }}" name="pf[]">
                                                                    <label
                                                                        for="inline{{ $item->id }}">{{ $item->aminities }}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="b-b-dark2">Property Services </h5><br>

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach ($aminities as $item)
                                                    @if ($item['type'] == 'ps')
                                                        <div class="col-md-4">
                                                            <div class="form-group m-t-15 m-checkbox-inline mb-0">
                                                                <div class="checkbox checkbox-dark">
                                                                    <input id="inline{{ $item->id }}" type="checkbox"
                                                                        value="{{ $item->id }}" name="ps[]">
                                                                    <label
                                                                        for="inline{{ $item->id }}">{{ $item->aminities }}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="b-b-dark2">Levels Of Housing Care Offered </h5><br>

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach ($aminities as $item)
                                                    @if ($item['type'] == 'lhc')
                                                        <div class="col-md-4">
                                                            <div class="form-group m-t-15 m-checkbox-inline mb-0">
                                                                <div class="checkbox checkbox-dark">
                                                                    <input id="inline{{ $item->id }}" type="checkbox"
                                                                        value="{{ $item->id }}" name="lhc[]">
                                                                    <label
                                                                        for="inline{{ $item->id }}">{{ $item->aminities }}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f1-buttons">
                                    <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                    <input type="submit" class="btn btn-success">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
        <script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
        <script src="{{ asset('assets/js/form-wizard/form-wizard-three.js') }}"></script>
        <script src="{{ asset('assets/js/form-wizard/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/page-builder/jquery.grideditor.min.js') }}"></script>
        <script src="{{ asset('assets/js/page-builder/page-builder-custom.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function validateform(){
                var name=document.myform.name.val;

                if(name==null || name==""){
                    alert("Name Can't be Blank");
                    return false;
                }
            }
            // ---------------slug-Function---------------------------
            $(document).on('keyup', '#businessname', function() {
                var name = $(this).val();
                var slug = name.toLowerCase().trim().replace(/ /g, '-');
                $("#inputslug").val(slug);
            });
            // --------------------Category-Script----------------------------------
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
                    url: "{{ URL::to('admin/categories/show-form/') }}" + "/" + level + "/" + id,
                    dataType: "JSON",
                    success: function(response) {
                        $.each(response, function(index, value) {
                            html += '<option value=' + value['slug'] + '>' + value['name'] + '</option>';
                            html += childmaker(value['children']);
                        });
                        $("#cat-type").html(html);
                    }
                });
            }
            loaddata();
            // ---------------------------------get-Country-script---------------
            function getcountry() {
                $.ajax({
                    type: "GET",
                    url: "{{ URL::to('admin/location/getcountry') }}",
                    dataType: "JSON",
                    success: function(response) {
                        let html = "";
                        $.each(response, function(index, value) {
                            html += '<option value="' + value['id'] + '">' + value['name'] + '</option>';
                        });
                        $("#country").html(html);
                    }
                });
            }
            getcountry();
            // -------------------state-------------------------
            $(document).on("change", "#country", function() {
                let country_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ URL::to('admin/location/getstates/') }}" + "/" + country_id,
                    dataType: "JSON",
                    success: function(response) {
                        let html = "";
                        $.each(response, function(index, value) {
                            html += '<option value=' + value['id'] + '>' + value['name'] +
                                '</option>';
                        });
                        $("#state").html(html);
                    }
                });
            });
            // ----------------------city--------------------------
            $(document).on("change", "#state", function() {
                let state_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ URL::to('admin/location/getcities/') }}" + "/" + state_id,
                    dataType: "JSON",
                    success: function(response) {
                        let html = "";
                        $.each(response, function(index, value) {
                            html += '<option value=' + value['id'] + '>' + value['name'] +
                                '</option>';
                        });
                        $("#city").html(html);
                    }
                });
            });
            // --------------------save----------------------------------

            $("#SubmitForm").on("submit", function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('type', $("#getId").val());
                $.ajax({
                    url: "{{ Route('insert') }}",
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                    },
                });
                location.reload()
            });
        </script>
    @endpush

@endsection
