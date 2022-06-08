<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>RosterFly</title>

    <meta name="description"
          content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description"
          content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon.png')}}">

    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('resources/user/user.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.min.css">
    @yield('css_after')


</head>

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
<nav id="sidebar" aria-label="Main Navigation">
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <a class="fw-semibold text-white tracking-wide" href="{{route('user.index')}}">
          <span class="smini-hidden">
            Roster<span class="opacity-75">Fly</span>
          </span>
            </a>
            <div>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="js-sidebar-scroll">
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Request::segment(1) === 'home' ? 'active' : null }}" href="{{route('user.index')}}">
                        <i class="nav-main-link-icon fa-solid fa-house"></i>
                        <span class="nav-main-link-name">Home</span>
                    </a>
                </li>
                <li class="nav-main-heading">FLIGHTS</li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Request::segment(1) === 'flights' ? 'active' : null }}" aria-haspopup="true" aria-expanded="false" href="{{route('flights')}}">
                        <i class="nav-main-link-icon fa-solid fa-plane-departure"></i>
                        <span class="nav-main-link-name">Flights</span>
                    </a>
                </li>
                <li class="nav-main-heading">AIRCRAFTS</li>
                <a class="nav-main-link {{ Request::segment(1) === 'acftmodels' ? 'active' : null }}" aria-haspopup="true" aria-expanded="false" href="{{route('acftmodels')}}">
                    <i class="nav-main-link-icon fa-solid fa-plane"></i>
                    <span class="nav-main-link-name">Aircraft Models</span>
                </a>
                <a class="nav-main-link {{ Request::segment(1) === 'hangar' ? 'active' : null }}" aria-haspopup="true" aria-expanded="false" href="{{route('hangar')}}">
                    <i class="nav-main-link-icon fa-solid fa-warehouse"></i>
                    <span class="nav-main-link-name">Hangar</span>
                </a>
            </ul>
        </div>
    </div>
</nav>

<header id="page-header">
    <div class="content-header">
        <div class="space-x-1">
        </div>
        <div class="space-x-1">
            <!-- Opciones Usuario-->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">{{ Auth::user()->name }} {{Auth::user()->surname}}</span>
                    <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                        Application Status
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item" href="{{route('status')}}">
                            <i class="fa-solid fa-flask"></i>&nbsp;&nbsp;Heartbeat
                        </a>
                    </div>
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                        User Options
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item" href="{{route('edit.profile')}}">
                            <i class="far fa-fw fa-user me-1"></i> Edit Profile
                        </a>
                        <!--Logout button-->
                        <div role="separator" class="dropdown-divider"></div>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Notificationes -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                        Notifications
                    </div>
                    <ul class="nav-items my-2">
                        @foreach($notifications=DB::table('notifications')->orderBy('created_at', 'desc')->limit(5)->get() as $notification)
                            <li>
                                <a class="d-flex text-dark py-2">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="{{$notification->fa_icon}}"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">{{$notification->description}}</div>
                                        <div class="text-muted">{{Carbon::parse($date=$notification->created_at)->diffForHumans()}}</div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Lenguaje -->
            <div class="dropdown d-inline-block">
                @if(app()->getLocale()=='es')

                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flag-icon flag-icon-es"></i>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="p-2">
                            <a class="dropdown-item" href="{{url('locale/en')}}">
                                <i class="flag-icon flag-icon-us"></i> English
                            </a>
                        </div>
                    </div>
                @elseif(app()->getLocale()=='en')
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flag-icon flag-icon-us"></i>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="p-2">
                            <a class="dropdown-item" href="{{url('locale/es')}}">
                                <i class="flag-icon flag-icon-es"></i> Español
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
    @yield('content')
</div>

<script src="{{asset('resources/user/user.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('resources/public/script.js')}}"></script>
@yield('js_after')
</body>

</html>
