@extends('layouts.simple')

@section('content')
<div class="hero-static bg-body-extra-light">
    <div class="content content-full">
        <div class="px-3 py-5">
            <div class="mb-5 text-center">
                <a class="link-fx fw-bold fs-1" href="{{route('public.index')}}">
                    <span class="text-dark">Roster</span><span class="text-primary">Fly</span>
                </a>
                <p class="text-uppercase fw-bold fs-sm text-muted">Status Page</p>
            </div>
            <div class="row g-0 d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-sm btn-hero btn-primary" href="{{url()->previous()}}">
                            <i class="fa fa-arrow-left opacity-50 me-1"></i> @lang('heartbeat.back')
                        </a>
                        <div class="nav-item dropdown">
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
                        </div>
                        <hr>
                        <div class="alert alert-warning d-flex align-items-center justify-content-between"
                             role="alert">
                            <div class="flex-grow-1 me-3">
                                <p class="mb-0">API is currently under maintenance. Please stand by for a while
                                    as we are working on it.</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="fa fa-fw fa-2x fa-exclamation-triangle"></i>
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center justify-content-between"
                             role="alert">
                            <div class="flex-grow-1 me-3">
                                <p class="mb-0">Helpdesk service is experiencing some issues but our ninja
                                    developers are on it and should be back shortly!</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="fa fa-fw fa-2x fa-bug"></i>
                            </div>
                        </div>
                        <ul class="list-group push">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Main Server
                                <span class="badge rounded-pill bg-success">Operational</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                API
                                <span class="badge rounded-pill bg-success">Operational</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Web Systems
                                <span class="badge rounded-pill bg-warning">Maintenance</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Mobile Systems
                                <span class="badge rounded-pill bg-danger">Operational</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
