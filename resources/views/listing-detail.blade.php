@extends('layouts.main')
@section('main-section')
    @include('layouts.top-navbar')
    <section class="breadcrumb-nav">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ ucwords(str_replace(["-","_"]," ",$detail[0]->type)) }}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $detail[0]->state }}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{ $detail[0]->city }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $detail[0]->title }}</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="image-sec-top">
        <div class="container">
            <div class="row">
                <div class="left-image">
                    <div class="left-image-banner">
                        <img src="{{asset('assets/frontend/images/Pinehurst/frame-1.svg')}}" class="img-fluid">
                    </div>
                </div>
                <div class="right-img">
                    <div class="right-img-top">
                        <img src="{{asset('assets/frontend/images/Pinehurst/frame-small-2.svg')}}" class="img-fluid">
                        <a href="javascript:void(0);"><img src="{{asset('assets/frontend/images/Pinehurst/upload.svg')}}"
                                class="img-fluid">share</a>
                    </div>
                    <div class="right-img-btm">
                        <img src="{{asset('assets/frontend/images/Pinehurst/frame-small-3.svg')}}" class="img-fluid">
                        <a href="javascript:void(0);"><img src="{{asset('assets/frontend/images/Pinehurst/pics-count.svg')}}"
                                class="img-fluid">10</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <!-- start here -->
                <div class="col-xxl-9 col-xl-8 left-details-sec">
                    <section>
                        <div class="d-flex main-sunrise-div justify-content-between">
                            <div class="left-head">
                                <h1>{{ $detail[0]->title }}</h1>
                                <p>{{ $detail[0]->address }} - {{ $detail[0]->city }}, {{ $detail[0]->state }} {{ $detail[0]->zip }}</p>
                                <div class="d-flex align-items-center">
                                    <ul class="reviews-list">
                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                    </ul>
                                    <span class="rating-count"> (125 reviews)</span>
                                </div>
                            </div>
                            <div class="right-head">
                                <p>Pricing starts from</p>
                                <p class="price-tag-orange">$2,380.00<sub>/per month</sub></p>
                            </div>
                        </div>
                    </section>
                    <section class="about-sec">
                        <h2 class="sub-heading-inner">About {{ $detail[0]->title }}</h2>
                        <p class="read_more">{{ $detail[0]->description }}
                        </p>
                    </section>
                    <section class="tabs-card-sec">
                        <h2 class="sub-heading-inner">Pricing & Floor Plans</h2>
                        <div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#All"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#one-Bedroom" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">1 Bedroom</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#two-Bedroom" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">2 Bedrooms</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-lg-6 main-tab-card">
                                            <div class="card tabs-card">
                                                <div class="row text-center">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>01</h6>
                                                        <p>Bedrooms</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>01</h6>
                                                        <p>Bathroom</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>575 - 981</h6>
                                                        <p>Square Feet</p>
                                                    </div>
                                                </div>
                                                <div class="inner-div-tabs">
                                                    <h6>Features</h6>
                                                    <ul>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                    </ul>
                                                    <div
                                                        class="d-flex btm-tabcard align-items-center justify-content-between">
                                                        <button class="btn button-orange  mt-0" type="button">Tour this
                                                            floor
                                                            plan</button>
                                                        <p>$1,123 - $1,400</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 main-tab-card">
                                            <div class="card tabs-card">
                                                <div class="row text-center">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>02</h6>
                                                        <p>Bedrooms</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>02</h6>
                                                        <p>Bathroom</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>695 - 742</h6>
                                                        <p>Square Feet</p>
                                                    </div>
                                                </div>
                                                <div class="inner-div-tabs">
                                                    <h6>Features</h6>
                                                    <ul>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                    </ul>
                                                    <div
                                                        class="d-flex btm-tabcard align-items-center justify-content-between">
                                                        <button class="btn button-orange  mt-0" type="button">Tour this
                                                            floor
                                                            plan</button>
                                                        <p>$1,123 - $1,400</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="one-Bedroom" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-lg-6 main-tab-card">
                                            <div class="card tabs-card">
                                                <div class="row text-center">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>01</h6>
                                                        <p>Bedrooms</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>01</h6>
                                                        <p>Bathroom</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>575 - 981</h6>
                                                        <p>Square Feet</p>
                                                    </div>
                                                </div>
                                                <div class="inner-div-tabs">
                                                    <h6>Features</h6>
                                                    <ul>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                    </ul>
                                                    <div
                                                        class="d-flex btm-tabcard align-items-center justify-content-between">
                                                        <button class="btn button-orange  mt-0" type="button">Write Your
                                                            Review</button>
                                                        <p>$1,123 - $1,400</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="two-Bedroom" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row">
                                        <div class="col-lg-6 main-tab-card">
                                            <div class="card tabs-card">
                                                <div class="row text-center">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>02</h6>
                                                        <p>Bedrooms</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>02</h6>
                                                        <p>Bathroom</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                        <h6>695 - 742</h6>
                                                        <p>Square Feet</p>
                                                    </div>
                                                </div>
                                                <div class="inner-div-tabs">
                                                    <h6>Features</h6>
                                                    <ul>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>24/7 Emergency Line</li>
                                                        <li>Fridge+stove Included</li>
                                                        <li>Fridge+stove Included</li>
                                                    </ul>
                                                    <div
                                                        class="d-flex btm-tabcard align-items-center justify-content-between">
                                                        <button class="btn button-orange  mt-0" type="button">Tour this
                                                            floor
                                                            plan</button>
                                                        <p>$1,123 - $1,400</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="Community-sec">
                        <div class="d-flex justify-content-between">
                            <h2 class="sub-heading-inner">Community Amenities</h2>
                            <a href="javascript:void(0);" class="view-all vert-move">View All<i
                                    class="far fa-chevron-double-right"></i></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 main-m-div">
                                <a class="card">
                                    <img src="{{asset('assets/frontend/images/Pinehurst/Laundry.svg')}}">
                                    <p>Laundry Service</p>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 main-m-div">
                                <a class="card">
                                    <img src="{{asset('assets/frontend/images/Pinehurst/vehicle-service.svg')}}">
                                    <p>Vehicle Service</p>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 main-m-div">
                                <a class="card">
                                    <img src="{{asset('assets/frontend/images/Pinehurst/sport.svg')}}">
                                    <p>Sports & Recreation</p>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 main-m-div">
                                <a class="card">
                                    <img src="{{asset('assets/frontend/images/Pinehurst/Clubhouse.svg')}}">
                                    <p>Clubhouse</p>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="Unique-feat">
                            <h2 class="sub-heading-inner">Property Services</h2>
                            <ul>
                                <li>Package Service</li>
                                <li>Wi-Fi at Pool and Clubhouse</li>
                                <li>Controlled Access</li>
                                <li>Planned Social Activities</li>
                                <li>Video Patrol</li>
                                <li>24 Hour Availability</li>
                                <li>Renters Insurance Program</li>
                                <li>Property Manager on Site</li>
                                <li>Public Transportation</li>
                            </ul>
                        </div>
                    </section>
                    <section class="location-sec">
                        <h2 class="sub-heading-inner">Location</h2>
                        <div class="d-flex justify-content-between locate-txet">
                            <p class="mb-0">{{ $detail[0]->address }} - {{ $detail[0]->city }}, {{ $detail[0]->state }} {{ $detail[0]->zip }}</p>
                            <a href="javascript:void(0);" class="get-dir">Get Directions<img
                                    src="{{asset('assets/frontend/images/Pinehurst/directions.svg')}}"></a>
                        </div>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113874.29338087817!2d75.72051791246251!3d26.885346595411875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1636603391695!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </section>
                    <section class="Property-rating">
                        <h2 class="sub-heading-inner">Property Ratings at {{ $detail[0]->title }}</h2>
                        <div class="row">
                            <div class="col-lg-2 main-m-div">
                                <div class="card rate-card-left text-center">
                                    <h3>4.5</h3>
                                    <p>Great</p>
                                    <div class="rate-num">Out of 5</div>
                                </div>
                            </div>
                            <div class="col-lg-10 main-m-div">
                                <div class="card card-Reviews">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 Reviews-star-l">
                                            <ul class="reviews-list">
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a>
                                                </li>
                                            </ul>
                                            <p>No Renter Reviews Yet</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="Reviews-star-r">
                                                <p>Share details of your own experience with this property</p>
                                                <p>You must be logged in to post a review.</p>
                                                <button class="btn button-orange" type="button">Write Your Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="list-Reviews">
                        <h2 class="sub-heading-inner">Listing Reviews</h2>
                        <div class="row client-reviw-row">
                            <div class="col-lg-1 col-md-2 left-clint-img">
                                <div class="text-center">
                                    <div class="client-img">
                                        <img src="{{asset('assets/frontend/images/Pinehurst/client.svg')}}" class="img-fluid">
                                    </div>
                                    <p>Maureen Biologist</p>
                                </div>
                            </div>
                            <div class="col-lg-11 col-md-10">
                                <div class="card">
                                    <div class="d-flex justify-content-between review-cardss">
                                        <h6>"Lorem ipsum dolor sit amet, cu his atqui volumus.</h6>
                                        <p>4 years ago</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <ul class="reviews-list">
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                        </ul>
                                        <span class="rating-count"> 4.5</span>
                                    </div>
                                    <p class="client-para">Lorem ipsum dolor sit amet, cu his atqui volumus. Eu assum
                                        incorrupte
                                        eos, evertitur suscipiantur ut his. Ne sed munere aeterno euripidis. Ne errem nullam
                                        impetus
                                        nam, qui numquam intellegat in. Lorem ipsum dolor sit amet, cu his atqui volumus. Eu
                                        assum
                                        incorrupte eos, evertitur suscipiantur ut his. Ne sed munere aeterno
                                        euripidis. Ne errem nullam impetus nam, qui numquam intellegat in.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row client-reviw-row">
                            <div class="col-lg-1 col-md-2 left-clint-img">
                                <div class="text-center">
                                    <div class="client-img">
                                        <img src="{{asset('assets/frontend/images/Pinehurst/client.svg')}}" class="img-fluid">
                                    </div>
                                    <p>Maureen Biologist</p>
                                </div>
                            </div>
                            <div class="col-lg-11 col-md-10">
                                <div class="card">
                                    <div class="d-flex justify-content-between review-cardss">
                                        <h6>"Lorem ipsum dolor sit amet, cu his atqui volumus.</h6>
                                        <p>4 years ago</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <ul class="reviews-list">
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                        </ul>
                                        <span class="rating-count"> 4.5</span>
                                    </div>
                                    <p class="client-para">Lorem ipsum dolor sit amet, cu his atqui volumus. Eu assum
                                        incorrupte
                                        eos, evertitur suscipiantur ut his. Ne sed munere aeterno euripidis. Ne errem nullam
                                        impetus
                                        nam, qui numquam intellegat in. Lorem ipsum dolor sit amet, cu his atqui volumus. Eu
                                        assum
                                        incorrupte eos, evertitur suscipiantur ut his. Ne sed munere aeterno
                                        euripidis. Ne errem nullam impetus nam, qui numquam intellegat in.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--   <section>
                           <div class="row">
                              <div class="col-lg-"></div>
                           </div>
                        </section> -->
                </div>
                <!-- end here -->
                <div class="col-xxl-3 col-xl-4">
                    <div class="card form-card">
                        <h2 class="text-center">Get Cost Information</h2>
                        <form>
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Who are you looking for?</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Email address">
                            </div>
                            <div class="form-check d-flex align-items-center ">
                                <input type="checkbox" class="form-check-input" id="pay">
                                <label class="form-check-label" for="pay">Paying with medicaid only</label>
                            </div>
                            <button type="submit" class="btn btn-primary ">Paying with medicaid only</button>
                            <p>By clicking "Get Costs", you agree to our Terms of Use, our Privacy
                                Policy, and our Agreement to be Contacted by Telephone. You also
                                consent that we, or our partner providers, may reach out to you about
                                senior living solutions or Medicare insurance using a system that can
                                auto-dial; however, you do not need to consent to this to use our
                                service.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="like-cards-bottm">
        <div class="container">
            <h2 class="sub-heading-inner">You May Also Like</h2>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card card-main">
                        <div class="slider-card slick-carousel">
                            <!-- Inside the containing div, add one div for each slide -->
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="price-tag">$8,384.00 <sub>per month</sub></p>
                            <a href="javascript:void(0);">
                                <a href="javascript:void(0);">
                                    <h5 class="text-truncate">Rocky Mountain Assisted Living - Sil Rocky Mountain Assisted
                                        Living
                                        - SilRocky Mountain Assisted Living - SilRocky Mountain Assisted Living - SilRocky
                                        Mountain Assisted Living - Sil</h5>
                                </a>
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
                        <!--  <div class="Promotion-tag">
                              Special Promotion!
                           </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card card-main">
                        <div class="slider-card slick-carousel">
                            <!-- Inside the containing div, add one div for each slide -->
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="price-tag">$8,384.00 <sub>per month</sub></p>
                            <a href="javascript:void(0);">
                                <h5 class="text-truncate">Rocky Mountain Assisted Living - Sil Rocky Mountain Assisted
                                    Living -
                                    SilRocky Mountain Assisted Living - SilRocky Mountain Assisted Living - SilRocky
                                    Mountain
                                    Assisted Living - Sil</h5>
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
                    </div>
                </div>
                <div class="col">
                    <div class="card card-main">
                        <div class="slider-card slick-carousel">
                            <!-- Inside the containing div, add one div for each slide -->
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <div>
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </div>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="price-tag">$8,384.00 <sub>per month</sub></p>
                            <a href="javascript:void(0);">
                                <h5 class="text-truncate">Rocky Mountain Assisted Living - Sil Rocky Mountain Assisted
                                    Living -
                                    SilRocky Mountain Assisted Living - SilRocky Mountain Assisted Living - SilRocky
                                    Mountain
                                    Assisted Living - Sil</h5>
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
                    </div>
                </div>
                <div class="col">
                    <div class="card card-main">
                        <div class="slider-card slick-carousel">
                            <!-- Inside the containing div, add one div for each slide -->
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <div>
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </div>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="price-tag">$8,384.00 <sub>per month</sub></p>
                            <a href="javascript:void(0);">
                                <h5 class="text-truncate">Rocky Mountain Assisted Living - Sil Rocky Mountain Assisted
                                    Living -
                                    SilRocky Mountain Assisted Living - SilRocky Mountain Assisted Living - SilRocky
                                    Mountain
                                    Assisted Living - Sil</h5>
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
                    </div>
                </div>
                <div class="col">
                    <div class="card card-main">
                        <div class="slider-card slick-carousel">
                            <!-- Inside the containing div, add one div for each slide -->
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                            <a class="slider-card-inner">
                                <!-- You can put an image or text inside each slide div -->
                                <img src="{{asset('assets/frontend/images/slide-card.svg')}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="price-tag">$8,384.00 <sub>per month</sub></p>
                            <a href="javascript:void(0);">
                                <h5 class="text-truncate">Rocky Mountain Assisted Living - Sil Rocky Mountain Assisted
                                    Living -
                                    SilRocky Mountain Assisted Living - SilRocky Mountain Assisted Living - SilRocky
                                    Mountain
                                    Assisted Living - Sil</h5>
                            </a>
                            <div class="d-flex">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.bottom-footer')
@endsection
