@extends('layouts.nav')

@section('content')
    <main id="main-container">
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Aircraft Models
                    </h3>
                    <a href="{{route('new.acftmodel')}}" class="btn btn-success" type="submit"><i
                            class="fa-solid fa-plus"></i></a>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                        <thead>
                        <tr class="text-uppercase">
                            <th>@lang('acftmodelsmod.ICAOCode')</th>
                            <th>@lang('acftmodelsmod.acftmodel')</th>
                            <th>@lang('acftmodelsmod.IATACode')</th>
                            <th>@lang('acftmodelsmod.acftmanufacturer')</th>
                            <th>@lang('acftmodelsmod.type')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($acftmodels as $aircraftmodel)
                            <tr>
                                <td>
                                    <span class="fw-semibold">{{$aircraftmodel->ICAOCode}}</span>
                                </td>
                                <td>
                                    <span class="fs-sm text-muted">{{$aircraftmodel->aircraft_model}}</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">{{$aircraftmodel->IATACode}}</span>
                                </td>
                                <td>
                                    <span class="fs-sm text-muted">{{$aircraftmodel->manufacturer}}</span>
                                </td>
                                <td class="fs-sm text-muted">
                                    {{$aircraftmodel->wing_type}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><a class="fs-sm text-muted"> @lang('acftmodelsmod.error') <a class="fs-sm text-muted" href="mailto:issues@rosterfly.es?Subject=Aircraft Model Issu&body=Aircraft Model Error%0D%0AICAO Code:%0D%0AError:">issues@rosterfly.es</a></a></center>
                    <br>
                    <div>
                        {{$acftmodels->links()}}
                    </div>
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
