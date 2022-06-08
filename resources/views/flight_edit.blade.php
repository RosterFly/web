@extends('layouts.nav')

@section('content')
<main id="main-container">
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Edit Flight
                </h3>
            </div>
            <div class="block-content">
                <form action="{{route('edit.flight.update', $flight->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    {{ $errors }}
                    <table class="table table-borderless table-vcenter fs-sm">
                        <tbody>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label"
                                                                 for="flightnumber">Flight Number</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="text" class="form-control"
                                                                      id="flightnumber" name="flightnumber"
                                                                      maxlength="6" value="{{$flight->flightnumber}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label"
                                                                 for="aircraftICAO">Aircraft ICAO</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="text" class="form-control"
                                                                      id="aircraftICAO" name="aircraftICAO"
                                                                      maxlength="4" value="{{$flight->aircraftICAO}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label"
                                                                 for="acftregistration">Aircraft Registration</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="text" class="form-control"
                                                                      id="acftregistration" name="acftregistration"
                                                                      maxlength="5" value="{{$flight->acftregistration}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label" for="etd">Estimated Time of Departure (ETD) (zulú)</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="datetime-local" class="form-control"
                                                                      id="etd" name="etd" value="{{ date('Y-m-d\TH:i', strtotime($flight->etd)) }}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label" for="eta">Estimated Time of Arrival (ETA) (zulú)</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="datetime-local" class="form-control"
                                                                      id="eta" name="eta" value="{{ date('Y-m-d\TH:i', strtotime($flight->eta)) }}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label" for="ICAOdeparture">Departure Airport</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="text" class="form-control"
                                                                      id="ICAOdeparture" name="ICAOdeparture"
                                                                      minlength="4" maxlength="4" value="{{$flight->ICAOdeparture}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label" for="ICAOarrival">Arrival Airport</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="text" class="form-control"
                                                                      id="ICAOarrival" name="ICAOarrival"
                                                                      minlength="4" maxlength="4" value="{{$flight->ICAOarrival}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label" for="passengers">Passengers</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="number" class="form-control"
                                                                      id="passengers" name="passengers"
                                                                      min="0" value="{{$flight->passengers}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label" for="cargo">Cargo (in kg)</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="number" class="form-control"
                                                                      id="cargo" name="cargo"
                                                                      min="0" value="{{$flight->cargo}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold"><label class="form-label" for="fob">Fuel On Board (in kg)</label></span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted"><input type="number" class="form-control"
                                                                      id="fob" name="fob"
                                                                      min="0" value="{{$flight->fob}}"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-alt-primary" style="float: right;">
                                    <i class="fa fa-check-circle opacity-50 me-1"></i> Save
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
