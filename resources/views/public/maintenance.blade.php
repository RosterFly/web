<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@lang('pages-name.pass-reminder')</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

      <link rel="shortcut icon" href="{{asset('favicon.png')}}">
      <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon.png')}}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon.png')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" id="css-main" href="{{asset('resources/user/user.min.css')}}">
  </head>
  <body>

    <div id="page-container">

      <main id="main-container">
        <div class="bg-image" style="background-image: url({{asset('resources/images/plane-background.jpg')}});">
          <div class="hero bg-black-90">
            <div class="hero-inner">
              <div class="content content-full">
                <div class="px-3 py-5 text-center">
                  <div class="mb-3">
                    <a class="link-fx fw-bold fs-1" href="{{route('public.index')}}">
                      <span class="text-white">Roster</span><span class="text-primary">Fly</span>
                    </a>
                    <p class="text-uppercase fw-bold fs-sm text-muted">Maintenance Mode</p>
                  </div>
                  <h1 class="text-white fw-bold mt-5 mb-3">Working on some stuff..</h1>
                  <h2 class="h3 text-white-75 fw-normal text-muted mb-5">Don’t worry though, we’ll be back soon!</h2>
                  <a class="btn btn-hero btn-primary mb-3" href="{{route('status')}}">
                    <i class="fa fa-flask opacity-50 me-1"></i> Check out Status Page
                  </a>
                  <br>
                  <a class="btn btn-sm btn-secondary" href="{{url()->previous()}}">
                    <i class="fa fa-arrow-left opacity-50 me-1"></i> Go Back
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <script src="{{asset('resources/user/user.min.js')}}"></script>
  </body>
</html>
