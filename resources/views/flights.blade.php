@extends('layouts.nav')

@section('content')
<main id="main-container">
  <div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Flights
            </h3>
        </div>
        <div class="block-content">
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                <thead>
                <tr class="text-uppercase">
                    <th>Flight Number</th>
                    <th class="d-none d-xl-table-cell">Departure Airport</th>
                    <th>Arrival Airport</th>
                    <th>ETD</th>
                    <th>ETA</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($flights as $flight)
                <tr>
                    <td>
                        <span class="fw-semibold">{{$flight->flightnumber}}</span>
                    </td>
                    <td>
                        <span class="fs-sm text-muted">{{$flight->icaoDeparture->name}}<br>({{$flight->ICAOdeparture}}/{{$flight->icaoDeparture->iata}})</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">{{$flight->icaoArrival->name}}<br>({{$flight->ICAOarrival}}/{{$flight->icaoArrival->iata}})</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-warning">{{$flight->etd->format('d/m/Y H:i')}}z</span>
                    </td>
                    <td class="d-none d-sm-table-cell fw-medium">
                        {{$flight->eta->format('d/m/Y H:i')}}z
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="{{route('edit.flight',$flight->id)}}">
                            View
                        </a>
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
@endsection
