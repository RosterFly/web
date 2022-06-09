@extends('layouts.nav')

@section('content')
<main id="main-container">
  <div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Hangar
            </h3>
            <a href="{{route('new.hangar')}}" class="btn btn-success" type="submit"><i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="block-content">
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                <thead>
                <tr class="text-uppercase">
                    <th>@lang('hangarmod.registration')</th>
                    <th class="d-none d-xl-table-cell">@lang('hangarmod.name')</th>
                    <th>@lang('hangarmod.ICAOCode')</th>
                    <th style="width: 100px"></th>
                    <th style="width: 25px"></th>
                    <th style="width: 25px"></th>
                </tr>
                </thead>
                <tbody>
                @if(count($hangars)==0)
                    <tr>
                        <td colspan="6">
                            <center>@lang('indexuser.noaircrafts')</center>
                        </td>
                    </tr>
                @else
                @foreach($hangars as $hangar)
                <tr>
                    <td>
                        <span class="fw-semibold">{{$hangar->acftregistration}}</span>
                    </td>
                    <td>
                        <span class="fs-sm text-muted">{{$hangar->name}}</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">{{$hangar->aircraft->aircraft_model}} ({{$hangar->ICAOCode}})</span>
                    </td>
                    <td text-center text-nowrap fw-medium>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-alt-primary" id="flights-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-circle-info"></i>
                                <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="flights-dropdown">
                                <div class="p-2">
                                    <a class="dropdown-item" href="https://www.flightradar24.com/data/aircraft/{{$hangar->acftregistration}}" target="_blank">
                                        <i class="fa-solid fa-plane-arrival"></i>&nbsp;&nbsp;{{$hangar->acftregistration}} @lang('hangarmod.flighthistory')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="{{route('edit.hangar',$hangar->id)}}" class="btn btn-warning" type="submit"><i class="fa-solid fa-pencil"></i></a>
                    </td>
                    <td>
                        <form action="{{route('delete.hangar', $hangar->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
                </tbody>
            </table>
            @if(!count($hangars)==0)
            <div>
                {{ $hangars->links() }}
            </div>
                @endif
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
