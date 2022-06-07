@extends('layouts.simple')

@section('content')
        <div class="bg-image" style="background-image: url({{asset('resources/images/flight-background.jpg')}});">
            <div class="row g-0 bg-primary-op">
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="{{route('public.index')}}">
                                <span class="text-dark">Roster</span><span class="text-primary">Fly</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">@lang('login.logInTittle')</p>
                        </div>
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="email" name="email"
                                                   placeholder="@lang('login.emailText')">
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                   id="password" name="password" placeholder="@lang('login.passwordText')">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i> @lang('login.logInBtn')
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                               href="{{route('password.request')}}">
                                                @lang('login.forgottenPassword')
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                               href="{{route('auth.signup')}}">
                                                @lang('login.createAccount')
                                            </a>
                                        </p>
                                        <center><div class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1">
                                            @if(app()->getLocale()=='es')
                                                <a class="nav-link dropdown-toggle" href="" id="dropdown09"
                                                   data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false"><span
                                                        class="flag-icon flag-icon-es"> </span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdown09">
                                                    <a class="dropdown-item" href="{{url('locale/en')}}"><span
                                                            class="flag-icon flag-icon-us"></span> English</a>
                                                    @elseif(app()->getLocale()=='en')
                                                        <a class="nav-link dropdown-toggle" href=""
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
                                        </div></center>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="list-unstyled">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

