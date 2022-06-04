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
                            <p class="text-uppercase fw-bold fs-sm text-muted">Password Reminder</p>
                        </div>
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form action="{{route('password.request')}}" method="POST">
                                    @csrf
                                    <div class="py-3 mb-4">
                                        <input type="email" class="form-control form-control-lg form-control-alt" id="email" name="email" placeholder="Correo Electrónico">
                                    </div>
                                    <div class="text-center mb-4">
                                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-fw fa-reply opacity-50 me-1"></i> Password Reminder
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{route('login')}}">
                                                <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{route('auth.signup')}}">
                                                <i class="fa fa-plus opacity-50 me-1"></i> New Account
                                            </a>
                                        </p>
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
                <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                    <div class="p-3">
                        <p class="display-4 fw-bold text-white mb-0">
                            Be ready to fail..
                        </p>
                        <p class="fs-1 fw-semibold text-white-75 mb-0">
                            ..to be able to succeed!
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection
