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
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
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
                                    <input type="text" placeholder="What are you finding?">
                                </div>
                                <!-- Select job items start -->
                                <div class="select-job-items1">
                                    <select name="select1" id="subcategory" style="display: none">
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">All</span>
                                        <ul class="list"id="parentSub">

                                        </ul>
                                    </div>
                                </div>
                                <!--  Select job items End-->
                            </div>

                            <div class="single-listing">
                                <!-- Range Slider Start -->
                                <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                    <div class="small-section-tittle2">
                                        <h4>Price range</h4>
                                    </div>
                                </aside>
                                <!-- Range Slider End -->
                                <a href="#" class="btn list-btn mt-20">Reset</a>
                            </div>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-8 col-lg-8 col-md-6">
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
                        <div class="pagination-area pt-70 text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-wrap d-flex justify-content-center">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-start">
                                                    <li class="page-item active"><a class="page-link" href="#">01</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">02</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">03</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#"><span
                                                                class="ti-angle-right"></span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
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
        function showGetResult() {
            var catHtml = "";
            var listHtml = "";
            jQuery.ajax({
                url: "{{ url('/showListing') }}/" + $('#parentSlug').val(),
                type: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    catHtml += '<li data-value="all" class="option selected">All</li>';
                    $.each(data.cats, function(index, value) {
                        catHtml += '<li data-value="' + value['slug'] + '" class="option">' + value['name'] +
                            '</li>';
                    });
                    $("#parentSub").html(catHtml);
                    $.each(data.listing, function(index, value) {
                       listHtml += '<div class="col-lg-6 ">'+
                        '<div class="single-listing mb-30">'+
                            '<div class="list-img">'+
                                '<img src="{{ asset("assets/frontend/img/gallery/list1.png") }}" alt="">'+
                            '</div>'+
                            '<div class="list-caption">'+
                                '<span style="font-size:12px">'+value['category'].replace("_"," ").toUpperCase()+'</span>'+
                                '<h3><a href="{{ url("/listing-details/") }}/'+value['slug']+'">'+value['title']+'</a></h3>'+
                                '<p>'+value['address']+'</p>'+
                                '<div class="list-footer">'+
                                    '<ul>'+
                                        '<li>'+value['phone']+'</li>'+
                                        '<li>'+value['email']+'</li>'+
                                    '</ul>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '</div>';
                    });
                    $("#listCounts").html(data.listing.length + " Listings are available");
                    $("#listingShow").html(listHtml);
                }
            });
        }
        showGetResult();
    </script>
@endsection
