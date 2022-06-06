@extends('layouts.simple')

@section('content')
        <div class="bg-image" style="background-image: url({{asset('resources/images/flight-background.jpg')}});">
            <div class="row g-0 justify-content-center bg-black-75">
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="{{route('public.index')}}">
                                <span class="text-dark">Roster</span><span class="text-primary">Fly</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">@lang('signup.createNewAcc')</p>
                        </div>
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form action="{{route('register')}}" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="dni" name="dni" placeholder="@lang('signup.dni')" maxlength="9">
                                            @error('dni')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="name" name="name" placeholder="@lang('signup.name')">
                                            @error('name')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="surname" name="surname" placeholder="@lang('signup.surname')">
                                            @error('surname')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="email" class="form-control form-control-lg form-control-alt"
                                                   id="email" name="email" placeholder="@lang('signup.email')">
                                            @error('email')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label style="margin-top: 10px;  text-align: right; clear: both;" for="birth_date">@lang('signup.birthdate')</label>
                                            <input style="height: 20px; width: 250px; float: right;" type="date" class="form-control form-control-lg form-control-alt"
                                                   id="birth_date" name="birth_date" placeholder="@lang('signup.date')">
                                            @error('birthdate')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt"
                                                   id="telephone" name="telephone" placeholder="@lang('signup.phone')" minlength="9"
                                                   maxlength="9">
                                            @error('telephone')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                   id="password" name="password" placeholder="@lang('signup.password')">
                                            @error('password')
                                            <script>window.alert({{$message}})</script>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt"
                                                   id="password-confirm" name="password_confirmation"
                                                   placeholder="@lang('signup.passwordConfirm')">
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
                                                <label class="form-check-label" for="signup-terms">@lang('signup.agreeToTerms')</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-fw fa-plus opacity-50 me-1"></i> @lang('signup.signup')
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                               href={{route('login')}}>
                                                <i class="fa fa-sign-in-alt opacity-50 me-1"></i> @lang('signup.signin')
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                               href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">
                                                <i class="fa fa-book opacity-50 me-1"></i> @lang('signup.readTerms')
                                            </a>
                                        </p>
                                        <center><div class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1">
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
                                            </div></center>
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">@lang('signup.termsTittle')</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <p>@lang('signup.terms1')</p>
                                <p>@lang('signup.terms2')</p>
                                <p>@lang('signup.terms3')</p>
                            </div>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">@lang('signup.close')
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
