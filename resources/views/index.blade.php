@extends('layouts.nav')
@section('content')

    <main id="main-container">
        <div class="content">
            <div
                class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        RosterFly
                    </h1>
                    <p class="fw-medium mb-0 text-muted">
                        @lang('indexuser.welcome'){{ Auth::user()->name }} {{Auth::user()->surname}}!
                    </p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        @lang('indexuser.rosterflystatics')
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="row items-push">
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa fa-users fa-lg text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('users')->count()}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.registeredusers')</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa-solid fa-plane-departure fa-lg text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('flights')->count()}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.managedflights')</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa-solid fa-people-arrows text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('flights')->sum('passengers')}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.passengerscarried')</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa-solid fa-gas-pump fa-lg text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('flights')->sum('fob')}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.fuelused')</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        @lang('indexuser.yourstatics')
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="row items-push">
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa fa-users fa-lg text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('flights')->where('userid','=', Auth::user()->id)->count()}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.totalflights')</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa fa-clock fa-lg text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('flights')->count()}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.hoursflown')</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa fa-chart-line fa-lg text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('flights')->where('userid','=', Auth::user()->id)->sum('passengers')}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.passengerscarried')</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                                    <div class="block-content block-content-full flex-grow-1">
                                        <div class="item rounded-3 bg-body mx-auto my-3">
                                            <i class="fa fa-box fa-lg text-primary"></i>
                                        </div>
                                        <div class="fs-1 fw-bold">{{DB::table('flights')->where('userid','=', Auth::user()->id)->sum('cargo')}}</div>
                                        <div class="text-muted mb-3">@lang('indexuser.cargocarried')</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        @lang('indexuser.next10flights')
                    </h3>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                        <thead>
                        <tr class="text-uppercase">
                            <th>@lang('flightsmod.flightnumber')</th>
                            <th class="d-none d-xl-table-cell">@lang('flightsmod.departureapt')</th>
                            <th>@lang('flightsmod.arrivalapt')</th>
                            <th>@lang('flightsmod.etd')</th>
                            <th>@lang('flightsmod.eta')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($flights=DB::table('flights')->where('userid', Auth::user()->id)->orderBy('etd', 'DESC')->paginate(10) as $flight)
                            <tr>
                                <td>
                                    <span class="fw-semibold">{{$flight->flightnumber}}</span>
                                </td>
                                <td>
                                    <span class="fs-sm text-muted">{{$flight->ICAOdeparture}}</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">{{$flight->ICAOarrival}}</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">{{$flight->etd}}z</span>
                                </td>
                                <td class="d-none d-sm-table-cell fw-medium">
                                    {{$flight->eta}}z
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div
                    class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                    <a class="fw-medium" href="{{route('flights')}}">
                        @lang('indexuser.viewallflights')
                        <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                    </a>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        @lang('indexuser.top5aircraftsflown')
                    </h3>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                        <thead>
                        <tr class="text-uppercase">
                            <th>@lang('flightsmod.flightnumber')</th>
                            <th class="d-none d-xl-table-cell">@lang('flightsmod.departureapt')</th>
                            <th>@lang('flightsmod.arrivalapt')</th>
                            <th>@lang('flightsmod.etd')</th>
                            <th>@lang('flightsmod.eta')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($flights=DB::table('flights')->where('userid', Auth::user()->id)->orderBy('etd', 'DESC')->paginate(10) as $flight)
                            <tr>
                                <td>
                                    <span class="fw-semibold">{{$flight->flightnumber}}</span>
                                </td>
                                <td>
                                    <span class="fs-sm text-muted">{{$flight->ICAOdeparture}}</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">{{$flight->ICAOarrival}}</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">{{$flight->etd}}z</span>
                                </td>
                                <td class="d-none d-sm-table-cell fw-medium">
                                    {{$flight->eta}}z
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
    </div>
@endsection
