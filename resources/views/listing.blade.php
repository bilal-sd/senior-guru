@extends('layouts.frontend.main')
@section('main-section')
    @include('layouts.frontend.top-navbar')
    <section class="map-section">
        <div class="container map-section-left">
            <!-- left section start from here -->
            <div class="left-listing">
                <h1 id="listCounts">50 Assisted Living Facilities</h1>
                <div class="d-flex justify-content-between list-small-head">
                    <p>Listings Show by : Newest - Older</p>
                    <div class="dropdown top-selction">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('assets/frontend/images/sortby.svg') }}"><span>Sort by : </span><span
                                class="toggle-list">Relevance
                                <i class="far fa-chevron-down"></i></span>
                        </button> 
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="javascript:void(0);">Newest Listings</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Oldest Listings</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Best Listings</a></li>
                        </ul>
                    </div>
                    <!-- <p class="top-selction"><img src="{{ asset('assets/frontend/images/sortby.svg') }}" class="mr-2"><span>Sort by :</span> <a href="">Relevance<i class="far fa-chevron-down"></i></a></p> -->
                </div>
                <form class="row prty-secrh">
                    <div class="form-group">
                        <input type="text" class="form-control" id="location" placeholder="Search by location">
                        <button class="btn"><i class="far fa-search"></i></button>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="keyword" placeholder="Search by keyword">
                        <button class="btn"><i class="far fa-search"></i></button>
                    </div>
                    <div class="form-group">
                        <select class="form-control budget-selct form-select" id="parentSub">

                        </select>
                        {{-- <button class="btn"><i class="far fa-dollar-sign"></i></button> --}}
                    </div>
                    <button type="submit" class="btn search-btn"><i class="far fa-search"></i></button>
                </form>
                <section>
                    <div class="row" id="listingShow">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-main">
                                <div class="slider-card slick-carousel">
                                    <!-- Inside the containing div, add one div for each slide -->
                                    <a href="javascript:void(0);" class="slider-card-inner">
                                        <!-- You can put an image or text inside each slide div -->
                                        <img src="{{ asset('assets/frontend/images/slide-card.svg') }}"
                                            class="img-fluid">
                                    </a>
                                    <a href="javascript:void(0);" class="slider-card-inner">
                                        <!-- You can put an image or text inside each slide div -->
                                        <img src="{{ asset('assets/frontend/images/slide-card.svg') }}"
                                            class="img-fluid">
                                    </a>
                                    <a href="javascript:void(0);" class="slider-card-inner">
                                        <!-- You can put an image or text inside each slide div -->
                                        <img src="{{ asset('assets/frontend/images/slide-card.svg') }}"
                                            class="img-fluid">
                                    </a>
                                    <a href="javascript:void(0);" class="slider-card-inner">
                                        <!-- You can put an image or text inside each slide div -->
                                        <img src="{{ asset('assets/frontend/images/slide-card.svg') }}"
                                            class="img-fluid">
                                    </a>
                                    <a href="javascript:void(0);" class="slider-card-inner">
                                        <!-- You can put an image or text inside each slide div -->
                                        <img src="{{ asset('assets/frontend/images/slide-card.svg') }}"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="price-tag">$8,384.00 <sub>per month</sub></p>
                                    <a href="javascript:void(0);">
                                        <h5 class="text-truncate"><a href="javascript:void(0);">Rocky Mountain Assisted
                                                Living -
                                                Sil Living - Sil</a></h5>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <ul class="reviews-list">
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>

                                            <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                        </ul>
                                        <span class="rating-count"> 4 reviews</span>
                                    </div>
                                    <p class="text-truncate">9970 Silver Maple Road, Highlands Ranch, CO</p>
                                </div>
                                <div class="Promotion-tag">
                                    Special Promotion!
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- left section end from here -->
        </div>
        <div class="map-section-right">
            <iframe class="map-listing"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113874.29338087818!2d75.72051791246248!3d26.88534659541186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1636519106251!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>
            <button type="button" class="btn map-toggle-box" tabindex="0"><i class="far fa-chevron-double-left"></i>
            </button>
        </div>
        <input type="hidden" value="{{ $cat }}" id="parentSlug">
    </section>
    @include('layouts.frontend.bottom-footer')
@endsection
@section('section-script')
    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap&libraries=places&v=weekly"
        defer></script> --}}

    <script>
        // function initMap() {
        //     const map = new google.maps.Map(document.getElementById("map"), {
        //         zoom: 12,
        //         center: {
        //             lat: 34.84555,
        //             lng: -111.8035
        //         },
        //     });
        //     // Set LatLng and title text for the markers. The first marker (Boynton Pass)
        //     // receives the initial focus when tab is pressed. Use arrow keys to
        //     // move between markers; press tab again to cycle through the map controls.
        //     const tourStops = [
        //         [{
        //             lat: 34.8791806,
        //             lng: -111.8265049
        //         }, "Boynton Pass"],
        //         [{
        //             lat: 34.8559195,
        //             lng: -111.7988186
        //         }, "Airport Mesa"],
        //         [{
        //             lat: 34.832149,
        //             lng: -111.7695277
        //         }, "Chapel of the Holy Cross"],
        //         [{
        //             lat: 34.823736,
        //             lng: -111.8001857
        //         }, "Red Rock Crossing"],
        //         [{
        //             lat: 34.800326,
        //             lng: -111.7665047
        //         }, "Bell Rock"],
        //     ];
        //     // Create an info window to share between markers.
        //     const infoWindow = new google.maps.InfoWindow();

        //     // Create the markers.
        //     tourStops.forEach(([position, title], i) => {
        //         const marker = new google.maps.Marker({
        //             position,
        //             map,
        //             title: `${i + 1}. ${title}`,
        //             label: `${i + 1}`,
        //             optimized: false,
        //         });

        //         // Add a click listener for each marker, and set up the info window.
        //         marker.addListener("click", () => {
        //             infoWindow.close();
        //             infoWindow.setContent(marker.getTitle());
        //             infoWindow.open(marker.getMap(), marker);
        //         });
        //     });
        // }
    </script>

    <script>
        function getStars(rating,ele="") {
            // Round to nearest half
            rating = Math.round(rating * 2) / 2;
            let output = [];
            // Append all the filled whole stars
            for (var i = rating; i >= 1; i--)
            output.push('<li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>');
            // If there is a half a star, append it
            if (i == .5) output.push('<li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>');
            // Fill the empty stars
            for (let i = (5 - rating); i >= 1; i--)
            output.push('<li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>');
            $(ele).html(output.join(''));
        }
        function listingsmaker(listingArr) {
            var listHtml = "";
            $.each(listingArr, function(index, value) {
                let images = "";
                if (value['imgs'] != null) {
                    $.each(value['imgs'], function(index, val) {
                        images += '<a href="javascript:void(0);" class="slider-card-inner">' +
                            '<img src="{{ asset('storage/files/') }}/' + val["filename"] +
                            '" class="img-fluid">' +
                            '</a>';
                    });
                } else {
                    images += '<a href="javascript:void(0);" class="slider-card-inner">' +
                        '<img src="{{ asset('storage/files/') }}/default.jpg" class="img-fluid">' +
                        '</a>';
                }
                let reviewcount = (value['reviewcount']>0) ? value['reviewcount'] + " Reviews" : "No Reviews";
                let Avg = (typeof(value['reviewsavg'])=="number") ? Number(value['reviewsavg']).toFixed(1) : Number(0.0);
                listHtml += '<div class="col-lg-4 col-md-6 col-sm-6">' +
                    '<div class="card card-main">' +
                    '<div class="slider-card slick-carousel-list">' +
                    images +
                    '</div>' +
                    '<div class="card-body">' +
                    '<p class="price-tag">$8,384.00 <sub>per month</sub></p>' +
                    '<a href="{{ url('/listing-details/') }}/' + value['slug'] + '">' +
                    '<h5 class="text-truncate"><a href="{{ url('/listing-details/') }}/' + value['slug'] + '">' +
                    value['title'] + '</a></h5>' +
                    '</a>' +
                    '<div class="d-flex align-items-center">' +
                    '<ul class="reviews-list starsreview" data-per="'+value['reviewsavg']+'">' +
                    '</ul>' +
                    '<span class="rating-count">( '+ Avg +' )</span>' +
                    '<span class="rating-count">'+ reviewcount +'</span>' +
                    '</div>' +
                    '<p class="text-truncate">' + value['address'] + value['city'] + ',' + value['state'] + '</p>' +
                    '</div>' +
                    // '<div class="Promotion-tag">Special Promotion!</div>' +
                    '</div>' +
                    '</div>';
            });
            return listHtml;
        }
        // $('#parentSub').change(function() {
        //     var subCat2 = $('#parentSub').val();
        //     if (subCat2 != "all") {
        //         $.ajax({
        //             type: "GET",
        //             url: "{{ url('/subCategory2') }}/" + subCat2,
        //             dataType: "JSON",
        //             success: function(res) {
        //                 if (res.cats.length > 0) {
        //                     $("#subCat").empty();
        //                     $("#sub3Show").show();
        //                     $.each(res.cats, function(key, value) {
        //                         $("#subCat").append('<li data-value="' + value['slug'] +
        //                             '" class="option">' + value['name'] + '</li>');
        //                     });
        //                 } else {
        //                     $("#sub3Show").hide();
        //                     $("#subCat").empty();
        //                 }
        //             }
        //         });
        //     } else {
        //         $("#sub3Show").hide();
        //         $("#subCat").empty();
        //     }
        // });


        function showSubcats() {
            var catHtml = "";
            jQuery.ajax({
                url: "{{ url('/subCategory') }}/" + $('#parentSlug').val(),
                type: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    catHtml += '<option value="all" selected>All</option>';
                    $.each(data.cats, function(index, value) {
                        catHtml += '<option value="' + value['slug'] + '">' + value['name'] +
                            '</option>';
                    });
                    $("#parentSub").html(catHtml);
                }
            });
        }
        showSubcats();

        function checkUndefined(val) {
            if (val == undefined) {
                return "";
            } else {
                return val;
            }
        }

        function showGetResult() {
            var cat = checkUndefined($('#parentSlug').val());
            var location = checkUndefined($("#location").val());
            var subCat = checkUndefined($('#parentSub').val());
            var keyword = checkUndefined($("#keyword").val());
            if (subCat == "all") {
                subCat = "";
            }
            var obj = {
                "_token": "{{ csrf_token() }}",
                cat: cat,
                loc: location,
                subcat: subCat,
                keyword: keyword
            };
            $.ajax({
                url: '/search-listing',
                type: 'POST',
                data: obj,
                dataType: 'JSON',
                success: function(data) {
                    // console.log(data);
                    let listHtml = listingsmaker(data.listing);
                    $("#listCounts").html(data.listing.length + " Listings are available");
                    $("#listingShow").html(listHtml);
                    if (listHtml != "") {
                        slickCarousel();
                        $.each($(".starsreview"),function (key,val) {  
                            if($(val).data("per")!="undefined"){
                                getStars($(val).data("per"),$(val));
                            }else{
                                let stars = '<li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>'+
                                '<li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>'+
                                '<li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>'+
                                '<li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>'+
                                '<li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>';
                                $(val).html(stars);
                            }
                        });
                    }
                }
            });
        };
        showGetResult();
        function slickCarousel() {
            $('.slick-carousel-list').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true
            });
        }
        $(document).ready(function() {
            $("#location").on("change", showGetResult)
            $("#parentSub").on("change", showGetResult)
            $("#keyword").on("change", showGetResult)
        });
    </script>
@endsection
