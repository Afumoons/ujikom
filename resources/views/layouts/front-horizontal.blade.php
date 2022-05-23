<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo-bnsp-2.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo-bnsp-2.png') }}" alt="" height="40">
                    </span>
                </a>

                <a href="{{ url('index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo-bnsp-2.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo-bnsp-2.png') }}" alt="" height="40">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="@lang('translation.Search')...">
                    <span class="uil-search"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('translation.Search')..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block language-switch">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @switch(Session::get('lang'))
                        @case('ru')
                            <img src="{{ URL::asset('/assets/images/flags/russia.jpg') }}" alt="Header Language" height="16">
                            <span class="align-middle">Russian</span>
                        @break

                        @case('it')
                            <img src="{{ URL::asset('/assets/images/flags/italy.jpg') }}" alt="Header Language" height="16">
                            <span class="align-middle">Italian</span>
                        @break

                        @case('de')
                            <img src="{{ URL::asset('/assets/images/flags/germany.jpg') }}" alt="Header Language" height="16">
                            <span class="align-middle">German</span>
                        @break

                        @case('es')
                            <img src="{{ URL::asset('/assets/images/flags/spain.jpg') }}" alt="Header Language" height="16">
                            <span class="align-middle">Spanish</span>
                        @break

                        @default
                            <img src="{{ URL::asset('/assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                            <span class="align-middle">English</span>
                    @endswitch
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/us.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/spain.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/germany.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/italy.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item">
                        <img src="{{ URL::asset('assets/images/flags/russia.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <a href="{{ route('cart') }}"
                    class="btn header-item noti-icon waves-effect d-flex align-items-center">
                    <i class="uil-shopping-cart-alt
                    "></i>
                </a>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt="Header Avatar">
                    <span
                        class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ Str::ucfirst(Auth::user()->name ?? 'Guest') }}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    @guest
                        <a class="dropdown-item" href="{{ route('login') }}"><i
                                class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                class="align-middle">Login</span></a>
                    @endguest
                    @auth
                        <a class="dropdown-item" href="#"><i
                                class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                class="align-middle">@lang('translation.View_Profile')</span></a>
                        <a class="dropdown-item" href="#"><i
                                class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span
                                class="align-middle">@lang('translation.My_Wallet')</span></a>
                        <a class="dropdown-item d-block" href="#"><i
                                class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span
                                class="align-middle">@lang('translation.Settings')</span> <span
                                class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                        <a class="dropdown-item" href="#"><i
                                class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                class="align-middle">@lang('translation.Lock_screen')</span></a>
                        <a class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                class="align-middle">@lang('translation.Sign_out')</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="uil-cog"></i>
                </button>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="topnav">

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('root') }}">
                                <i class="uil-home-alt me-2"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shop') }}">
                                <i class="uil-shop me-2"></i> Shop
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
