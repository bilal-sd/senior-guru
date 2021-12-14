@extends('layouts.main')
@section('main-section')
    @include('layouts.top-navbar')

    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>{{ $detail[0]->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">

                                <img class="img-fluid"
                                    src="{{ asset('assets/frontend/img/blog/single_blog_1.png') }}" alt="">
                            </div>
                            <div class="blog_details">
                                <h2>{{ $detail[0]->title }}</h2>
                                <h4>{{ ucwords($detail[0]->category) }}</h4>

                                <ul class="blog-info-link mt-3 mb-4">
                                    <li>Address</li><br>
                                    <h5>{{ $detail[0]->address }}</h5>
                                </ul>
                                <p>
                                    {{ $detail[0]->description }}
                                </p>
                            </div>
                        </div>
                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">

                                <div class="col-sm-4 text-center my-2 my-sm-0">
                                </div>

                            </div>
                            <div class="navigation-area">
                                <div class="row">
                                    <div
                                        class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <li> Phone Number-: {{ $detail[0]->phone }}</li>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <li>Email-: {{ $detail[0]->email }}</li>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-12 mt-5 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <li>Web-Site: {{ $detail[0]->website }}</li>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i
                                                        class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Category</h4>
                                <ul class="list cat-list">
                                    @foreach ($catdetails as $item)
                                       <a href=""><li>{{ucwords($item->title) }}</a> 

                                    @endforeach
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                <div class="media post_item">
                                    <img src="{{ asset('assets/frontend/img/post/post_1.png') }}">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3>From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('assets/frontend/img/post/post_2.png') }}">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3>The Amazing Hubble</h3>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('assets/frontend/img/post/post_3.png') }}">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3>Astronomy Or Astrology</h3>
                                        </a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('assets/frontend/img/post/post_4.png') }}">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3>Asteroids telescope</h3>
                                        </a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">project</a>
                                    </li>
                                    <li>
                                        <a href="#">love</a>
                                    </li>
                                    <li>
                                        <a href="#">technology</a>
                                    </li>
                                    <li>
                                        <a href="#">travel</a>
                                    </li>
                                    <li>
                                        <a href="#">restaurant</a>
                                    </li>
                                    <li>
                                        <a href="#">life style</a>
                                    </li>
                                    <li>
                                        <a href="#">design</a>
                                    </li>
                                    <li>
                                        <a href="#">illustration</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget instagram_feeds">
                                <h4 class="widget_title">Instagram Feeds</h4>
                                <ul class="instagram_row flex-wrap">
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/img/post/post_5.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/img/post/post_6.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/img/post/post_7.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/img/post/post_8.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/img/post/post_9.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/img/post/post_10.png') }}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Blog Area end =================-->
    </main>
    @include('layouts.bottom-footer')
@endsection
