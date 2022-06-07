@extends('layouts.simple')

@section('content')
        <div class="bg-image" style="background-image: url({{asset('resources/images/flight-background.jpg')}});">
            <div class="row g-0 bg-primary-op">
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <div class="text-center">
                            <a class="link-fx fw-bold fs-1" href="{{route('password.email')}}">
                                <span class="text-dark">Roster</span><span class="text-primary">Fly</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">@lang('forgot-password.reminderTittle')</p>
                        </div>
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form action="{{route('password.request')}}" method="POST">
                                    @csrf
                                    <div class="py-3 mb-4">
                                        <input type="email" class="form-control form-control-lg form-control-alt" id="email" name="email" placeholder="@lang('forgot-password.email')">
                                    </div>
                                    <div class="text-center mb-4">
                                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-fw fa-reply opacity-50 me-1"></i>@lang('forgot-password.reminderBtn')
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{route('login')}}">
                                                <i class="fa fa-sign-in-alt opacity-50 me-1"></i> @lang('forgot-password.signin')
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{route('auth.signup')}}">
                                                <i class="fa fa-plus opacity-50 me-1"></i> @lang('forgot-password.newAccount')
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
                                    </div>
                                </form>
                            </div>
                        </div>

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
                </div>
            </div>
        </div>
@endsection
