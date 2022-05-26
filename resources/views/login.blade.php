<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@lang('pages-name.login')</title>

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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('resources/user/user.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
<div id="page-container">
    <main id="main-container">
        <div class="bg-image" style="background-image: url({{asset('resources/images/flight-background.jpg')}});">
        <div class="row g-0 bg-primary-op">
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                <div class="p-3 w-100">
                    <div class="mb-3 text-center">
                        <a class="link-fx fw-bold fs-1" href="{{route('public.index')}}">
                            <span class="text-dark">Roster</span><span class="text-primary">Fly</span>
                        </a>
                        <p class="text-uppercase fw-bold fs-sm text-muted">Inicio Sesión</p>
                    </div>

                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-8 col-xl-6">
                            <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST">
                                <div class="py-3">
                                    <div class="mb-4">
                                        <input type="text" class="form-control form-control-lg form-control-alt"
                                               id="login-username" name="login-username"
                                               placeholder="Correo Electrónico">
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" class="form-control form-control-lg form-control-alt"
                                               id="login-password" name="login-password" placeholder="Contraseña">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesion
                                    </button>
                                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                           href="{{route('password-reminder')}}">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                           href="{{route('signup')}}">
                                            Crear Cuenta
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Meta Info Section -->
            <div
                class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                <div class="p-3">
                    <p class="display-4 fw-bold text-white mb-3">
                        Welcome to the future
                    </p>
                    <p class="fs-lg fw-semibold text-white-75 mb-0">
                        © 2022 RosterFly
                    </p>
                </div>
            </div>
            <!-- END Meta Info Section -->
        </div>
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
</div>
<!-- END Page Container -->

<script src="{{asset('resources/user/user.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/op_auth_signin.min.js"></script>
</body>
</html>
