<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@lang('pages-name.signup')</title>

    <meta name="description"
          content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('resources/user/user.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
<!-- Page Container -->
<!--
  Available classes for #page-container:

  GENERIC

    'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                - Theme helper buttons [data-toggle="theme"],
                                                - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

  SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


  FOOTER

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

  HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

  DARK MODE

    'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
-->
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url({{asset('resources/images/flight-background.jpg')}});">
            <div class="row g-0 justify-content-center bg-black-75">
                <!-- Main Section -->
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <!-- Header -->
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="index.html">
                                <span class="text-dark">Roster</span><span class="text-primary">Fly</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">Create New Account</p>
                        </div>
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form action="{{route('register')}}" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="id" name="id" placeholder="DNI" maxlength="9">
                                            @error('id')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="name" name="name" placeholder="Nombre">
                                            @error('name')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="surname" name="surname" placeholder="Apellido">
                                            @error('surname')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="email" class="form-control form-control-lg form-control-alt"
                                                   id="email" name="email" placeholder="Correo Electrónico">
                                            @error('email')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="date" class="form-control form-control-lg form-control-alt"
                                                   id="birth_date" name="birth_date" placeholder="Fecha de Nacimiento">
                                            @error('birthdate')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="telephone" name="telephone" placeholder="Teléfono" minlength="9"
                                                   maxlength="9">
                                            @error('telephone')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                   id="password" name="password" placeholder="Password">
                                            @error('password')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                   id="password-confirm" name="password_confirmation"
                                                   placeholder="Password Confirm">
                                            @error('password_confirmation')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="signup-terms"
                                                       name="signup-terms">
                                                @error('signup-terms')
                                                <script>window.alert({{$message}})</script>
                                                @enderror
                                                <label class="form-check-label" for="signup-terms">I agree to Terms
                                                    &amp; Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Sign Up
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                               href="">
                                                <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                               href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">
                                                <i class="fa fa-book opacity-50 me-1"></i> Read Terms
                                            </a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign Up Form -->
                    </div>
                </div>
                <!-- END Main Section -->
            </div>

            <!-- Terms Modal -->
            <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Terms &amp; Conditions</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                    adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est
                                    ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio
                                    sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                    adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est
                                    ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio
                                    sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                    adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est
                                    ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio
                                    sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                    adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est
                                    ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio
                                    sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                    adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est
                                    ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio
                                    sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            </div>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Done
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="{{asset('resources/user/user.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
<script src="assets/js/pages/op_auth_signup.min.js"></script>
</body>
</html>
