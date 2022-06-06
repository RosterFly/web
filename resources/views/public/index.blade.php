<!doctype html>
<html lang="en">

<head>
    <title>@lang('pages-name.index')</title>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link href="{{asset('resources/public/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.min.css">

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">


<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('public.index')}}"><img
                            src="{{asset('resources/logos/white-logo-navbar.png')}}" class="img-fluid" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link active" href="#home">@lang('index.menuStart')<span
                                        class="sr-only">(current)</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="#features">@lang('index.menuNews')</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pricing">@lang('index.menuPlans')</a></li>
                            <li class="nav-item"><a class="nav-link" href="#faq">@lang('index.menuFaq')</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">@lang('index.menuContact')</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('status')}}">HEARTBEAT</a></li>
                            <div class="nav-item dropdown">
                                @if(app()->getLocale()=='es')
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false"><span
                                            class="flag-icon flag-icon-es"> </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                                        <a class="dropdown-item" href="{{url('locale/en')}}"><span
                                                class="flag-icon flag-icon-us"></span> English</a>
                                        @elseif(app()->getLocale()=='en')
                                            <a class="nav-link dropdown-toggle" href="http://example.com"
                                               id="dropdown09" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false"><span
                                                    class="flag-icon flag-icon-us"> </span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                                <a class="dropdown-item" href="{{url('locale/es')}}"><span
                                                        class="flag-icon flag-icon-es"></span> Español</a>
                                                @endif
                                            </div>
                                    </div>
                            </div>
                            <li class="nav-item"><a href="{{route('login')}}"
                                                    class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">@lang('index.btnLogin')</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<header class="bg-gradient" id="home">
    <div class="container mt-5">
        <h1><b>Roster</b>Fly, gestiona tus vuelos, fuera y dentro del avión</h1>
        <p class="tagline">@lang('index.headerDespription')</p>
    </div>
    &nbsp;
    <div class="img-holder mt-3"><img src="{{asset('resources/images/qantas748.png')}}" alt="phone" height="450"></div>
</header>

<div class="section light-bg" id="features">


    <div class="container">

        <div class="section-title">
            <small>@lang('index.highlights')</small>
            <h3>@lang('index.features')</h3>
        </div>


        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                            <div class="media-body">
                                <h4 class="card-title">@lang('index.features')</h4>
                                <p class="card-text">@lang('index.simpleText')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                            <div class="media-body">
                                <h4 class="card-title">@lang('index.customize')</h4>
                                <p class="card-text">@lang('index.customizeText')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                            <div class="media-body">
                                <h4 class="card-title">@lang('index.secure')</h4>
                                <p class="card-text">@lang('index.secureText')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <h2>@lang('index.discoverApp')</h2>
                <p class="mb-4">@lang('index.discoverAppText')</p>
                <a href="#pricing" class="btn btn-primary">@lang('index.discoverAppBtn')</a>
            </div>
        </div>
        <div class="perspective-phone">
            <img src="{{asset('resources/images/paper-airplane.png')}}" alt="perspective phone" height="400">
        </div>
    </div>
</div>

<div class="section light-bg">
    <div class="container">
        <div class="section-title">
            <small>@lang('index.features2')</small>
            <h3>@lang('index.doMore')</h3>
        </div>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#communication">@lang('index.communication')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#schedule">@lang('index.scheduling')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages">@lang('index.messages')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#livechat">@lang('index.lifeChat')</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="communication">
                <div class="d-flex flex-column flex-lg-row">
                    <img src="images/graphic.png" alt="graphic"
                         class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    <div>

                        <h2>@lang('index.communicationTittle')</h2>
                        <p class="lead">@lang('index.communicationSubtittle')</p>
                        <p>@lang('index.communicationText')</p>
                        <p>@lang('index.communicationText')</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="schedule">
                <div class="d-flex flex-column flex-lg-row">
                    <div>
                        <h2>@lang('index.schedulingTittle')</h2>
                        <p class="lead">@lang('index.schedulingTittle')</p>
                        <p>@lang('index.schedulingText')</p>
                        <p> @lang('index.schedulingText')</p>
                    </div>
                    <img src="images/graphic.png" alt="graphic"
                         class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                </div>
            </div>
            <div class="tab-pane fade" id="messages">
                <div class="d-flex flex-column flex-lg-row">
                    <img src="images/graphic.png" alt="graphic"
                         class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    <div>
                        <h2>@lang('index.messagesTittle')</h2>
                        <p class="lead">@lang('index.messagesSubtittle')</p>
                        <p>@lang('index.messagesText')</p>
                        <p> @lang('index.messagesText')</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="livechat">
                <div class="d-flex flex-column flex-lg-row">
                    <div>
                        <h2>@lang('index.lifeChatTittle')</h2>
                        <p class="lead">@lang('index.lifeChatSubtittle')</p>
                        <p>@lang('index.lifeChatText')</p>
                        <p> @lang('index.lifeChatText')</p>
                    </div>
                    <img src="images/graphic.png" alt="graphic"
                         class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                </div>
            </div>
        </div>


    </div>
</div>

<div class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/dualphone.png" alt="dual phone" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                    <h2>@lang('index.launchApp')</h2>
                    <p class="mb-4">@lang('index.launchAppText')</p>
                    <a href="#" class="btn btn-primary">@lang('index.launchAppBtn')</a></div>
            </div>
        </div>
    </div>
</div>

<div class="section light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <ul class="list-unstyled ui-steps">
                    <li class="media">
                        <div class="circle-icon mr-4">1</div>
                        <div class="media-body">
                            <h5>@lang('index.createAccount')</h5>
                            <p>@lang('index.createAccountText')</p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <div class="circle-icon mr-4">2</div>
                        <div class="media-body">
                            <h5>@lang('index.share')</h5>
                            <p>@lang('index.shareText')</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="circle-icon mr-4">3</div>
                        <div class="media-body">
                            <h5>@lang('index.enjoyLife')</h5>
                            <p>@lang('index.enjoyLifeText')</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="images/iphonex.png" alt="iphone" class="img-fluid">
            </div>

        </div>

    </div>

</div>
<div class="section" id="pricing">
    <div class="container">
        <div class="section-title">
            <small>@lang('index.pricing')</small>
            <h3>@lang('index.upgradeTo')</h3>
        </div>

        <div class="card-deck">
            <div class="card pricing">
                <div class="card-head">
                    <small class="text-primary">@lang('index.personal')</small>
                    <span class="price">@lang('index.personalPrice')</span>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">@lang('index.personal1')</div>
                    <div class="list-group-item">@lang('index.personal2')</div>
                    <div class="list-group-item">@lang('index.personal3')</div>
                    <div class="list-group-item">
                        <del>@lang('index.personal4')</del>
                    </div>
                    <div class="list-group-item">
                        <del>@lang('index.personal5')</del>
                    </div>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg btn-block">@lang('index.personalBtn')</a>
                </div>
            </div>
            <div class="card pricing popular">
                <div class="card-head">
                    <small class="text-primary">@lang('index.forTeams')</small>
                    <span class="price">@lang('index.forTeamsPrice')</span>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">@lang('index.forTeams1')</div>
                    <div class="list-group-item">@lang('index.forTeams2')</div>
                    <div class="list-group-item">@lang('index.forTeams3')</div>
                    <div class="list-group-item">@lang('index.forTeams4')</div>
                    <div class="list-group-item">@lang('index.forTeams5')</div>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg btn-block">@lang('index.forTeamsBtn')</a>
                </div>
            </div>
            <div class="card pricing">
                <div class="card-head">
                    <small class="text-primary">@lang('index.enterprise')</small>
                    <span class="price">@lang('index.enterprisePrice')</span>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">@lang('index.enterprise1')</div>
                    <div class="list-group-item">@lang('index.enterprise2')</div>
                    <div class="list-group-item">@lang('index.enterprise3')</div>
                    <div class="list-group-item">@lang('index.enterprise4')</div>
                    <div class="list-group-item">@lang('index.enterprise5')</div>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg btn-block">@lang('index.enterpriseBtn')</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section light-bg pt-0" id="faq">
    <div class="container">
        &nbsp;&nbsp;&nbsp;
        <div class="section-title">
            <small>FAQ</small>
            <h3>@lang('index.frecuentlyQuestions')</h3>
        </div>

        <div class="row pt-4">
            <div class="col-md-6">
                <h4 class="mb-3">@lang('index.canITry')</h4>
                <p class="light-font mb-5">@lang('index.canITryText')</p>
                <h4 class="mb-3">@lang('index.paymentMethods')</h4>
                <p class="light-font mb-5">@lang('index.paymentMethodsText')</p>

            </div>
            <div class="col-md-6">
                <h4 class="mb-3">@lang('index.changePlan')</h4>
                <p class="light-font mb-5">@lang('index.changePlanText')</p>
                <h4 class="mb-3">@lang('index.contract')</h4>
                <p class="light-font mb-5">@lang('index.contractText')</p>

            </div>
        </div>
    </div>

</div>
<div class="section bg-gradient">
    <div class="container">
        <div class="call-to-action">
    </div>
    <h2>@lang('index.download')</h2>
    <p class="tagline">@lang('index.downloadText')</p>
    <div class="my-4">

        <a href="#" class="btn btn-light"><img src="{{asset('resources/images/appleicon.png')}}" alt="icon"> App
            Store</a>
        <a href="#" class="btn btn-light"><img src="{{asset('resources/images/playicon.png')}}" alt="icon"> Google play</a>
    </div>
    <p class="text-primary"><small><i>@lang('index.downloadVersion')</i></small></p>
</div>
</div>

</div>
<div class="py-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <p class="mb-2" href="mailto:support@mobileapp.com"><span class="ti-email mr-2"></span>
                    @lang('index.email')</p>
            </div>
            <div class="col-lg-6">
                <div class="social-icons">
                    <a href="#"><span class="ti-facebook"></span></a>
                    <a href="#"><span class="ti-twitter-alt"></span></a>
                    <a href="#"><span class="ti-instagram"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="my-5 text-center">
    <p class="mb-2"><small>@lang('index.copyright')</a></small></p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('resources/public/script.js')}}"></script>

</body>

</html>
