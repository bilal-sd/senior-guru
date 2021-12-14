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
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link inactive done" href="#wizard_Time">
                                                <span>2</span>
                                                <p>Listing Detail</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link inactive active" href="#wizard_Details">
                                                <span>3</span>
                                                <p>General Property Features</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" style="height: 315px;">
                                        <div id="wizard_Service" class="tab-pane" role="tabpanel"
                                            style="display: none;">
                                            <form method="post" id="form1" role="form">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Business Name*</label>
                                                            <input type="text" name="business" class="form-control"
                                                                required value="@if(isset($listing)){{$listing->title}}@endif">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Business Slug*</label>
                                                            <input type="text" value="@if(isset($listing)){{$listing->slug}}@endif" name="slug" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Category</label>
                                                            <select id="cat-type" name="category"
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
                                                            <input type="email" class="form-control"
                                                                id="inputGroupPrepend2"
                                                                aria-describedby="inputGroupPrepend2" value="@if(isset($listing)){{$listing->email}}@endif" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Phone Number*</label>
                                                            <input type="text" name="phone" value="@if(isset($listing)){{$listing->phone}}@endif" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Website</label>
                                                            <input type="text" name="website" value="@if(isset($listing->website)){{$listing->website}}@endif" class="form-control"
                                                                placeholder="www.exapmle.com">
                                                        </div>
                                                    </div>
                                                    <div class="card-header">
                                                        <h4 class="card-title">Location & Address</h4><br><br>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="mb-3"><br>
                                                            <label class="text-label form-label">Address 1*</label>
                                                            <input type="text" value="@if(isset($listing->address)){{$listing->address}}@endif" name="address1" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="mb-3"><br>
                                                            <label class="text-label form-label">Address 2*</label>
                                                            <input type="text" name="address2" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3"><br>
                                                            <label class="text-label form-label">State*</label>
                                                            <select class="form-select" name="state" required
                                                                aria-label="Default select example">
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
                                                            <select class="form-select" name="city" required
                                                                aria-label="Default select example">
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
                                                            <select class="form-select" required name="country"
                                                                aria-label="Default select example">
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
                                                            <input type="text" name="zip" value="@if(isset($listing->zip)){{$listing->zip}}@endif" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3"><br>
                                                            <label class="text-label form-label">Latitude*</label>
                                                            <input type="text" name="lati" value="@if(isset($listing->lati)){{$listing->lati}}@endif" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3">
                                                        <div class="mb-3"><br>
                                                            <label class="text-label form-label">Longitude*</label>
                                                            <input type="text" name="longi" value="@if(isset($listing->longi)){{$listing->longi}}@endif" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="getId" value="{{ $catId }}">
                                                <input type="hidden" id="last_id" value="@if(isset($listing)){{$listing->id}}@endif">
                                                <input type="submit" value="Save" class="btn btn-success">
                                            </form>
                                        </div>
                                        <div id="wizard_Time" class="tab-pane" role="tabpanel" style="display: none;">
                                            <form role="form" id="form2" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="card-header mb-2">
                                                        <h4 class="card-title">Images And Videos</h4><br>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <input type="file" id="myFile" name="filename">
                                                        </div>
                                                    </div>
                                                    <div class="card-header mb-2">
                                                        <h4 class="card-title">Listing Helpers</h4><br>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <fieldset class="mb-3">
                                                            <label class="col-form-label col-sm-3 pt-0">Status</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    value="1" checked id="active">
                                                                <label class="form-check-label" for="#active">Active</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    value="0" id="inactive">
                                                                <label class="form-check-label"
                                                                    for="#inactive">Inactive</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Keywords</label>
                                                            <input type="text" name="keywords" value="@if(isset($listing->keywords)){{$listing->keywords}}@endif" class="form-control"
                                                                placeholder="Keywords">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Package</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example" name="package">
                                                                <option selected>Open this select Package</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-xxl-12">
                                                        <div class="card-header">
                                                            <h4 class="card-title">General Company Description
                                                            </h4>
                                                        </div>
                                                        <div class="card-body custom-ekeditor">
                                                            <textarea name="description" id="ckeditor"
                                                                class="form-control" placeholder="Write Description"
                                                                rows="5" cols="100">@if(isset($listing->description)){{$listing->description}}@endif</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" value="Save" class="btn btn-success">
                                            </form>
                                        </div>
                                        <div id="wizard_Details" class="tab-pane" role="tabpanel"
                                            style="display: block;">
                                            <form method="POST" role="form">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Property Features</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="basic-form">
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

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Levels of Housing Care Offered
                                                                </h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="basic-form">
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

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;">
                                        <button class="btn btn-primary sw-btn-prev" type="button">Previous</button>
                                        <button class="btn btn-primary sw-btn-next" type="button">Next</button>
                                    </div>
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
                    });
                    $("#cat-type").html(html);
                }
            });
        }
        loaddata();

        $(document).ready(function() {
            // Smart Wizard        
            $('#smartwizard').smartWizard({
                transitionEffect: 'slideleft',
                onLeaveStep: leaveAStepCallback,
                onFinish: onFinishCallback,
                enableFinishButton: true
            });

            function leaveAStepCallback(obj) {
                var step_num = obj.attr('rel');
                return validateSteps(step_num);
            }

            function onFinishCallback() {
                if (validateAllSteps()) {
                    // $('form').submit();
                }
            }

            // Your Step validation logic
            function validateSteps(stepnumber) {
                var isStepValid = true;
                // validate step 1
                if (stepnumber == 1) {
                    if (validateStep1() == false) {
                        isStepValid = false;
                        $('#smartwizard').smartWizard('showMessage', 'Please correct the errors in step' + step +
                            ' and click next.');
                        $('#smartwizard').smartWizard('setError', {
                            stepnum: step,
                            iserror: true
                        });
                    } else {
                        $('#smartwizard').smartWizard('hideMessage');
                        $('#smartwizard').smartWizard('setError', {
                            stepnum: step,
                            iserror: false
                        });
                    }
                }
                return isStepValid;
            }

            function validateStep1() {
                var isValid = true;
                var fields = $("#form1");
                fields = fields[0];
                var inputs = $(fields).find('input[required]');
                for (var i = 0; i < fields.length; i++) {
                    if ($(fields[i]).val() == '') {
                        return isValid = false;
                    }
                }
                return isValid;
            }
            $("#form1").on("submit", function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('type', $("#getId").val());
                formData.append('step', '1');
                if ($("#last_id").val() != "") {
                    formData.append('id', $("#last_id").val());
                }
                $.ajax({
                    url: "{{ URL::to('admin/listing/insert') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        console.log(data);
                        if (data.status == 'success') {
                            swal({
                                title: "Success!",
                                text: "Listing Saved successfully!",
                                icon: "success",
                                button: "OK",
                            });
                            $("#last_id").val(data.last_id);
                        } else {
                            swal({
                                title: "Error!",
                                text: "Something went wrong!",
                                icon: "error",
                                button: "OK",
                            });
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
            $("#form2").on("submit", function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('type', $("#getId").val());
                formData.append('step', '2');
                if ($("#last_id").val() != "") {
                    formData.append('id', $("#last_id").val());
                }
                $.ajax({
                    url: "{{ URL::to('admin/listing/insert') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        console.log(data);
                        if (data.status == 'success') {
                            swal({
                                title: "Success!",
                                text: "Listing Saved successfully!",
                                icon: "success",
                                button: "OK",
                            });
                            $("#last_id").val(data.last_id);
                        } else {
                            swal({
                                title: "Error!",
                                text: "Something went wrong!",
                                icon: "error",
                                button: "OK",
                            });
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>
@endsection
