@extends('layouts.nav')

@section('content')

<main id="main-container">
<div class="bg-image" style="background-image: url('{{asset('resources/images/flight-background.jpg')}}');">
  <div class="bg-black-75">
    <div class="content content-full">
      <div class="py-5 text-center">
          <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('resources/images/user_icon.png')}}" alt="">
        <h1 class="fw-bold my-2 text-white">@lang('edit-profile.editProfile')</h1>
        <h2 class="h4 fw-bold text-white-75">
            {{ Auth::user()->name }} {{Auth::user()->surname}}
        </h2>
        <a class="btn btn-secondary" href="{{route('user.index')}}">
          <i class="fa fa-fw fa-arrow-left opacity-50"></i> @lang('edit-profile.home')
        </a>
      </div>
    </div>
  </div>
</div>
<div class="content content-full content-boxed">
  <div class="block block-rounded">
    <div class="block-content">
      <form action="{{route('user-profile-information.update')}}" method="POST">
          @csrf
          @method('PUT')
        <h2 class="content-heading pt-0">
          <i class="fa fa-fw fa-user-circle text-muted me-1"></i> @lang('edit-profile.UsrPText')
        </h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted">
              @lang('edit-profile.txtEP')
            </p>
          </div>
          <div class="col-lg-8 col-xl-5">
            <div class="mb-4">
              <label class="form-label" for="dni">@lang('edit-profile.DniText')</label>
              <input type="text" class="form-control" id="dni" name="dni" value="{{Auth::user()->dni}}" readonly>
            </div>
            <div class="mb-4">
              <label class="form-label" for="name">@lang('edit-profile.nameText')</label>
              <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" readonly>
            </div>
              <div class="mb-4">
                  <label class="form-label" for="name">@lang('edit-profile.surnameText')</label>
                  <input type="text" class="form-control" id="surname" name="surname" value="{{Auth::user()->surname}}" readonly>
              </div>
            <div class="mb-4">
              <label class="form-label" for="email">@lang('edit-profile.emailText')</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email.." value="{{Auth::user()->email}}">
            </div>
            <div class="mb-4">
              <label class="form-label" for="birth_date">@lang('edit-profile.BirthText')</label>
              <input type="text" class="form-control" id="birth_date" name="birth_date" value="{{Auth::user()->birth_date}}" readonly>
            </div>
              <div class="mb-4">
                  <label class="form-label" for="telephone">@lang('edit-profile.TelefText')</label>
                  <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Add your job title.." value="{{Auth::user()->telephone}}">
              </div>
          </div>
        </div>
          <div class="row push">
              <div class="col-lg-8 col-xl-5 offset-lg-4">
                  <div class="mb-4">
                      <button type="submit" class="btn btn-alt-primary">
                          <i class="fa fa-check-circle opacity-50 me-1"></i> @lang('edit-profile.EusrPText')
                      </button>
                  </div>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>
</main>
<footer id="page-footer" class="bg-body-light">
    <div class="content py-0">
        <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                @lang('index.copyright')
            </div>
        </div>
    </div>
</footer>
@endsection
