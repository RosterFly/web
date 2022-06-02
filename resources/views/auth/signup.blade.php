@extends('layouts.simple')

@section('content')
        <div class="bg-image" style="background-image: url({{asset('resources/images/flight-background.jpg')}});">
            <div class="row g-0 justify-content-center bg-black-75">
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
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
                                                   id="dni" name="dni" placeholder="DNI" maxlength="9">
                                            @error('dni')
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
@endsection
