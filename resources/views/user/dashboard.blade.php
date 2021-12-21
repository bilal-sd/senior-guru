@extends('admin.layouts.main')

@section('main-section')
    <h1>user deshboard</h1>

    <a class="dropdown-ur list-group-item" href="javascript:void(0);"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
            class="far fa-sign-out-alt"></i> Logout</a>
    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <div id="main-wrapper">
        @include('user.layouts.top-nav')
        @include('user.layouts.side-bar')

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Accordion</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Accordion bordered</h4>
                                <p class="m-0 subtitle">Accordion with border. Add class <code>accordion-bordered</code>
                                    with the class <code> accordion</code></p>
                            </div>
                            <div class="card-body">

                                <div class="accordion accordion-header-shadow" id="accordion-two">
                                    <div class="accordion-item">
                                        <div class="accordion-header rounded-lg collapsed row">
                                            <div class="col-md-2">
                                                <button class="accordion-header-indicator btn btn-danger " id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="false" role="button"></button>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="accordion-header-title">Collapsible Group Item #1</div> 
                                            </div>
                                        </div>
                                        <div id="collapse2One" class="accordion__body collapse"
                                            aria-labelledby="accord-2One" data-bs-parent="#accordion-two" style="">
                                            <div class="accordion-body-text">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nihil tempora reiciendis maxime, doloribus ducimus totam ab dignissimos placeat exercitationem mollitia quaerat possimus quae. Natus, eos id. Quod, ipsam praesentium!   </p>
                                            </div>
                                        </div>
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
