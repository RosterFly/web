<!doctype html>
<html lang="en">

<head>
    <title>Inicio | RosterFly</title>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon.png')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link href="{{asset('resources/public/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.min.css">

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

<!-- Menu Navegación -->

<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('public.index')}}"><img src="{{asset('resources/logos/white-logo-navbar.png')}}" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link active" href="#home"> INICIO<span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#features"> NOVEDADES</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#pricing"> PLANES</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#faq"> FAQ</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#contact">CONTACTO</a> </li>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-es"> </span>
                                    </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown09">
                                    <a class="dropdown-item" href=""{{route('lang','en')}}""><span class="flag-icon flag-icon-us"></span> English</a>
                                </div>
                            </div>
                            <li class="nav-item"><a href="{{route('login')}}" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Iniciar Sesión</a></li>
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
        <p class="tagline">La aplicación necesaria para el control diario de tus vuelos y los datos de estos. ¡Registrate y disfruta de las novedades! </p>
    </div>
    &nbsp;
    <div class="img-holder mt-3"><img src="{{asset('resources/images/qantas748.png')}}" alt="phone" height="450"></div>
</header>

<div class="section light-bg" id="features">


    <div class="container">

        <div class="section-title">
            <small>HIGHLIGHTS</small>
            <h3>Features you love</h3>
        </div>


        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card features">
                    <div class="card-body">
                        <div class="media">
                            <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                            <div class="media-body">
                                <h4 class="card-title">Simple</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
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
                                <h4 class="card-title">Customize</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
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
                                <h4 class="card-title">Secure</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>
<!-- // end .section -->
<div class="section">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <h2>¡Descubre nuestra aplicación!</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                <a href="#pricing" class="btn btn-primary">Consulta nuestros planes</a>
            </div>
        </div>
        <div class="perspective-phone">
            <img src="{{asset('resources/images/paper-airplane.png')}}" alt="perspective phone" height="400">
        </div>
    </div>

</div>
<!-- // end .section -->


<div class="section light-bg">
    <div class="container">
        <div class="section-title">
            <small>FEATURES</small>
            <h3>Do more with our app</h3>
        </div>

        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#communication">Communication</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#schedule">Scheduling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#livechat">Live Chat</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="communication">
                <div class="d-flex flex-column flex-lg-row">
                    <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    <div>

                        <h2>Communicate with ease</h2>
                        <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                            congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                        </p>
                        <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                            sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="schedule">
                <div class="d-flex flex-column flex-lg-row">
                    <div>
                        <h2>Scheduling when you want</h2>
                        <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                            congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                        </p>
                        <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                            sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                        </p>
                    </div>
                    <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                </div>
            </div>
            <div class="tab-pane fade" id="messages">
                <div class="d-flex flex-column flex-lg-row">
                    <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    <div>
                        <h2>Realtime Messaging service</h2>
                        <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                            congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                        </p>
                        <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                            sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="livechat">
                <div class="d-flex flex-column flex-lg-row">
                    <div>
                        <h2>Live chat when you needed</h2>
                        <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                            congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                        </p>
                        <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                            sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                        </p>
                    </div>
                    <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                </div>
            </div>
        </div>


    </div>
</div>
<!-- // end .section -->

<div class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/dualphone.png" alt="dual phone" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                    <h2>Launch your App</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                    <a href="#" class="btn btn-primary">Read more</a></div>
            </div>
        </div>

    </div>

</div>
<!-- // end .section -->


<div class="section light-bg">

    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <ul class="list-unstyled ui-steps">
                    <li class="media">
                        <div class="circle-icon mr-4">1</div>
                        <div class="media-body">
                            <h5>Create an Account</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                        </div>
                    </li>
                    <li class="media my-4">
                        <div class="circle-icon mr-4">2</div>
                        <div class="media-body">
                            <h5>Share with friends</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem eveniet</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="circle-icon mr-4">3</div>
                        <div class="media-body">
                            <h5>Enjoy your life</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
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
<!-- Sección Planes -->
<div class="section" id="pricing">
    <div class="container">
        <div class="section-title">
            <small>PRICING</small>
            <h3>Upgrade to Pro</h3>
        </div>

        <div class="card-deck">
            <div class="card pricing">
                <div class="card-head">
                    <small class="text-primary">PERSONAL</small>
                    <span class="price">$14<sub>/m</sub></span>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">10 Projects</div>
                    <div class="list-group-item">5 GB Storage</div>
                    <div class="list-group-item">Basic Support</div>
                    <div class="list-group-item"><del>Collaboration</del></div>
                    <div class="list-group-item"><del>Reports and analytics</del></div>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                </div>
            </div>
            <div class="card pricing popular">
                <div class="card-head">
                    <small class="text-primary">FOR TEAMS</small>
                    <span class="price">$29<sub>/m</sub></span>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">Unlimited Projects</div>
                    <div class="list-group-item">100 GB Storage</div>
                    <div class="list-group-item">Priority Support</div>
                    <div class="list-group-item">Collaboration</div>
                    <div class="list-group-item">Reports and analytics</div>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                </div>
            </div>
            <div class="card pricing">
                <div class="card-head">
                    <small class="text-primary">ENTERPRISE</small>
                    <span class="price">$249<sub>/m</sub></span>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">Unlimited Projects</div>
                    <div class="list-group-item">Unlimited Storage</div>
                    <div class="list-group-item">Collaboration</div>
                    <div class="list-group-item">Reports and analytics</div>
                    <div class="list-group-item">Web hooks</div>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sección FAQ -->
<div class="section light-bg pt-0" id="faq">
    <div class="container">
        &nbsp;&nbsp;&nbsp;
        <div class="section-title">
            <small>FAQ</small>
            <h3>Frequently Asked Questions</h3>
        </div>

        <div class="row pt-4">
            <div class="col-md-6">
                <h4 class="mb-3">Can I try before I buy?</h4>
                <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                <h4 class="mb-3">What payment methods do you accept?</h4>
                <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

            </div>
            <div class="col-md-6">
                <h4 class="mb-3">Can I change my plan later?</h4>
                <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                <h4 class="mb-3">Do you have a contract?</h4>
                <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

            </div>
        </div>
    </div>

</div>
<!-- Sección descarga -->
<div class="section bg-gradient">
    <div class="container">
        <div class="call-to-action"</div>
            <h2>Download Anywhere</h2>
            <p class="tagline">Available for all major mobile and desktop platforms. Rapidiously visualize optimal ROI rather than enterprise-wide methods of empowerment. </p>
            <div class="my-4">

                <a href="#" class="btn btn-light"><img src="{{asset('resources/images/appleicon.png')}}" alt="icon"> App Store</a>
                <a href="#" class="btn btn-light"><img src="{{asset('resources/images/playicon.png')}}" alt="icon"> Google play</a>
            </div>
            <p class="text-primary"><small><i>*Works on iOS 10.0.5+, Android Kitkat and above. </i></small></p>
        </div>
    </div>

</div>
<!-- Sección Contacto -->
<div class="py-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <p class="mb-2"> <span class="ti-location-pin mr-2"></span> 1485 Pacific St, Brooklyn, NY 11216 USA</p>
                <p class="mb-2" href="mailto:support@mobileapp.com"><span class="ti-email mr-2"></span> support@mobileapp.com</p>
                 <p class="mb-2" href="tel:51836362800"><span class="ti-headphone-alt mr-2"></span> 518-3636-2800</p>
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

<!-- Footer -->
<footer class="my-5 text-center">
    <p class="mb-2"><small>© 2022 RosterFly - Todos los Derechos Reservados.</a></small></p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('resources/public/script.js')}}"></script>

</body>

</html>
