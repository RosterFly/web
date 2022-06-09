@extends('layouts.nav')

@section('content')

<main id="main-container">
  <div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                @lang('hangarmod.create')
            </h3>
        </div>
        <div class="block-content">
            <form action="{{route('new.hangar.store')}}" method="POST">
                @csrf
                <table class="table table-borderless table-vcenter fs-sm">
                    <tbody>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="name">@lang('hangarmod.name')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="name" name="name"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="acftregistration">@lang('hangarmod.registration')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="acftregistration" name="acftregistration" maxlength="5"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="ICAOCode">@lang('flightsmod.aircraftICAO')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><select class="form-select" name="ICAOCode" id="ICAOCode">
                                    @foreach($aircraftmodels as $aircraftmodel)
                                        <option value="{{$aircraftmodel->ICAOCode}}">{{$aircraftmodel->ICAOCode}} ({{$aircraftmodel->aircraft_model}})</option>
                                    @endforeach
                            </select></span>
                        </td>
                    </tr>
                    <input hidden type="text" id="userid" name="userid" value="{{Auth::user()->id}}"></tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-alt-primary" style="float: right;">
                                <i class="fa fa-check-circle opacity-50 me-1"></i> @lang('hangarmod.create')
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
