@extends('layouts.main')
@section('main-section')
    @include('layouts.top-navbar')
    <main>
        <div class="hero-area3 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="hero-cap text-center pt-50 pb-20">
                            <h2>Our Listing</h2>
                        </div>
                        <form action="#" class="search-box search-box2">
                            <div class="input-form">
                                <input type="text" placeholder="What are you looking for?">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1" style="display: none;">
                                        <option value="">Select Category</option>
                                    </select>

                                </div>
                            </div>
                            <div class="search-form">
                                <a href="#">Search</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- listing Area Start -->
        <div class="listing-area pt-120 pb-120">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                    <h4>Advanced Filter</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Job Category Listing start -->
                        <div class="category-listing mb-50">
                            <!-- single one -->
                            <div class="single-listing">
                                <!-- input -->
                                <div class="input-form">
                                    <input type="text" id="location" placeholder="Location">
                                </div>
                                <!-- Select job items start -->
                                <div class="select-job-items1">
                                    <select name="select1" id="parentCat" style="display: none">
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">All</span>
                                        <ul class="list" id="parentSub">

                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group" id="sub3Show" style="display: none">
                                    <div class="select-job-items2">
                                        <select name="select2" style="display: none;">
                                        </select>
                                        <div name="currentList" class="nice-select" tabindex="0"><span
                                                class="current">All Sub</span>
                                            <ul class="list" id="subCat">

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-form">
                                    <input type="text" id="keyword" placeholder="Keywords Search">
                                </div>
                                <!--  Select job items End-->
                            </div>

                            <div class="single-listing">
                                <a href="javascript:void(0)" id="reset" class="btn list-btn mt-20">Reset</a>
                            </div>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count mb-35">
                                    <span id="listCounts">5432 Listings are available</span>
                                </div>
                            </div>
                        </div>
                        <!-- listing Details Stat-->
                        <div class="listing-details-area">
                            <div class="container">
                                <div class="row" id="listingShow">

                                </div>
                            </div>
                        </div>
                        <!--Pagination End  -->
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="{{ $cat }}" id="parentSlug">
        <!-- listing-area Area End -->
    </main>
    @include('layouts.bottom-footer')
@endsection
@section('section-script')
    <script>
        function listingsmaker(listingArr) {
            var listHtml = "";
            $.each(listingArr, function(index, value) {
                listHtml += '<div class="col-lg-6" data-category="' + value['category'] + '" data-keyword="' + value['title'] + '">' +
                    '<div class="single-listing mb-30">' +
                    '<div class="list-img">' +
                    '<img src="{{ asset('assets/frontend/img/gallery/list1.png') }}" alt="">' +
                    '</div>' +
                    '<div class="list-caption">' +
                    '<span style="font-size:12px">' + value['category'].replace("_", " ").toUpperCase() +
                    '</span>' +
                    '<h3><a href="{{ url('/listing-details/') }}/' + value['slug'] + '">' + value['title'] +
                    '</a></h3>' +
                    '<p>' + value['address'] + '</p>' +
                    '<div class="list-footer">' +
                    '<ul>' +
                    '<li>' + value['phone'] + '</li>' +
                    '<li>' + value['email'] + '</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            });
            return listHtml;
        }
        $('#parentCat').change(function() {
            var subCat2 = $('#parentSub').children("li.selected").data('value');
            if (subCat2 != "all") {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/subCategory2') }}/"+subCat2,
                    dataType: "JSON",
                    success: function(res) {
                        if (res.cats.length > 0) {
                            $("#subCat").empty();
                            $("#sub3Show").show();
                            $.each(res.cats, function(key, value) {
                                $("#subCat").append('<li data-value="' + value['slug'] +
                                    '" class="option">' + value['name'] + '</li>');
                            });
                        } else {
                            $("#sub3Show").hide();
                            $("#subCat").empty();
                        }
                    }
                });
            } else {
                $("#sub3Show").hide();
                $("#subCat").empty();
            }
        });

        
        function showSubcats() {
            var catHtml = "";
            jQuery.ajax({
                url: "{{ url('/subCategory') }}/" + $('#parentSlug').val(),
                type: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    catHtml += '<li data-value="all" class="option selected">All</li>';
                    $.each(data.cats, function(index, value) {
                        catHtml += '<li data-value="' + value['slug'] + '" class="option">' + value['name'] +
                            '</li>';
                    });
                    $("#parentSub").html(catHtml);
                }
            });
        }
        showSubcats();
        function checkUndefined(val){
            if(val == undefined){
                return "";
            }else{
                return val;
            }
        }

        $("#location").on("change",showGetResult)
        $("#parentCat").on("change",showGetResult)
        $("#keyword").on("change",showGetResult)
        $("#reset").on("click",function(){
            window.location.href = "{{ url('/category/'.$cat) }}";
            showGetResult();
        });
        function showGetResult() {
            var cat = checkUndefined($('#parentSlug').val());
            var location = checkUndefined($("#location").val());
            var subCat = checkUndefined($('#parentSub').children("li.selected").data('value'));
            var keyword = checkUndefined($("#keyword").val());
            if(subCat == "all"){
                subCat = "";
            }
            var obj = {
                "_token": "{{ csrf_token() }}",
                cat:cat,
                loc:location,
                subcat:subCat,
                keyword:keyword
            };
            jQuery.ajax({
                url: '/search-listing',
                type: 'POST',
                data: obj,
                dataType: 'JSON',
                success: function(data) {
                    let listHtml = listingsmaker(data.listing);
                    $("#listCounts").html(data.listing.length + " Listings are available");
                    $("#listingShow").html(listHtml);
                }
            });
        }
        showGetResult();
    </script>
@endsection
