<header class="main-nav">
    {{-- <div class="sidebar-user text-center">
        <a class="" href="javascript:void(0)"></a><img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="" />
        <div class="badge-bottom"><!-- <span class="badge badge-primary">New</span> --></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Admin</h6></a>
        <p class="mb-0 font-roboto">Project Manager</p>
        <ul>
            <li>
                <span class="counter">256</span>
                <p>projects</p>
            </li>
            <li>
                <span>6 year</span>
                <p>Experince</p>
            </li>
            <li>
                <span><span class="counter">88</span>k</span>
                <p>Followers</p>
            </li>
        </ul>
    </div> --}}
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar my-5" style="height: 100vh">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                  <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/dashboard') }}" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/dashboard') }};">
                            <li><a href="{{route('index')}}" class="{{routeActive('index')}}">Default</a></li>
                            <li><a href="{{route('index-02')}}" class="{{routeActive('index-02')}}">Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/listing') }}" href="javascript:void(0)"><i class="fa fa-tasks me-3"></i><span>Listing</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/listing') }};">
                            <li><a href="{{route('admin.listing')}}" class="{{routeActive('admin.listing')}}">listing show</a></li>
                            <li><a href="{{ route('listing-create') }}" class="{{ routeActive('listing-create') }}">Create Listing</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <a class="nav-link {{routeActive('cat-sample')}}" href="{{route('admin.categories')}}"><i data-feather="grid"></i><span>Categories</span></a>  
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
