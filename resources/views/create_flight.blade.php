@extends('layouts.nav')

@section('content')

<main id="main-container">
  <div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                @lang('flightsmod.newFlight')
            </h3>
        </div>
        <div class="block-content">
            <form action="{{route('new.flight.store')}}" method="POST">
                @csrf
                <table class="table table-borderless table-vcenter fs-sm">
                    <tbody>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="flightnumber">@lang('flightsmod.flightnumber')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="flightnumber" name="flightnumber" maxlength="6"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="aircraftICAO">@lang('flightsmod.aircraftICAO')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="aircraftICAO" name="aircraftICAO" maxlength="4"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="etd">@lang('flightsmod.etd')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="datetime-local" class="form-control" id="etd" name="etd" ></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="eta">@lang('flightsmod.eta')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="datetime-local" class="form-control" id="eta" name="eta" ></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="ICAOdeparture">@lang('flightsmod.departureapt')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="ICAOdeparture" name="ICAOdeparture" minlength="4" maxlength="4"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="ICAOarrival">@lang('flightsmod.arrivalapt')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="ICAOarrival" name="ICAOarrival" minlength="4" maxlength="4"></span>
                        </td>
                    </tr>
                    <input hidden type="text" id="userid" name="userid" value="{{Auth::user()->id}}"></tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-alt-primary" style="float: right;">
                                <i class="fa fa-check-circle opacity-50 me-1"></i> @lang('flightsmod.create')
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
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
