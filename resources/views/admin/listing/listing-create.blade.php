@extends('layouts.admin.master')

@section('title', 'SeniorGuru Admin panel')

@push('breadcrumb')
    <li class="breadcrumb-item">Pages</li>
    <li class="breadcrumb-item active">Sample Page</li>
@endpush

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vector-map.css') }}">
    <style>
        .social-widget-card h5 {
            padding: 20px 0 !important;
            margin-bottom: 10px !important;
            font-size: 14px !important;
        }

        .b-b-dark2 {
            border-bottom: 1px solid #d1d1d1 !important;
        }

    </style>
@endpush
@section('content')
    @yield('breadcrumb-list')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="row">
                    @foreach ($childCat as $parents)
                        <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
                            <a href="{{ route('listing-form', $parents['slug']) }}">
                                <div class="card social-widget-card">
                                    <div class="card-body">
                                        <div class="redial-social-widget radial-bar-70" data-label="90%">
                                            <i class="d-block">
                                                <div class="mt-2"><b class="counter">{{ $parents->listcount }}</b></div>
                                                <div><span >Listings</span></div>
                                            </i>
                                        </div>
                                        <h5 class="b-b-dark2">{{ $parents->name }}</h5>
                                        <div class="row">
                                            <div class="col text-center b-r-light">
                                            </div>
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

    <!-- Container-fluid Ends-->
    @push('scripts')
        <script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
        <script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
        <script src="{{ asset('assets/js/chart/knob/knob.min.js') }}"></script>
        <script src="{{ asset('assets/js/chart/knob/knob-chart.js') }}"></script>
        <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
        <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
        <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
        <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
        <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
        {{-- <script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script> --}}
        <script src="{{ asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
        <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
        <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
        <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
        <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
        <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
        <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
        <script src="{{ asset('assets/js/notify/index.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    @endpush
@endsection
<i class="flag-icon flag-icon-us"></i>
