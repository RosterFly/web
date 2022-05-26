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
