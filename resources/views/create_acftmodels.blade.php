@extends('layouts.nav')

@section('content')

<main id="main-container">
  <div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                @lang('acftmodelsmod.newAcftModel')
            </h3>
        </div>
        <div class="block-content">
            <form action="{{route('new.acftmodel.store')}}" method="POST">
                @csrf
                <table class="table table-borderless table-vcenter fs-sm">
                    <tbody>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="aircraft_model">@lang('acftmodelsmod.acftmodel')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="aircraft_model" name="aircraft_model"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="manufacturer">@lang('acftmodelsmod.acftmanufacturer')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="manufacturer" name="manufacturer" ></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="IATACode">@lang('acftmodelsmod.IATACode')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="IATACode" name="IATACode"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="ICAOCode">@lang('acftmodelsmod.ICAOCode')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><input type="text" class="form-control" id="ICAOCode" name="ICAOCode" minlength="4" maxlength="4"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="wing_type">@lang('acftmodelsmod.wingtype')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><select class="form-select" name="wing_type" id="wingtype">
                                <option value="Rotatory Wing">@lang('acftmodelsmod.rotatorywing')</option>
                                <option value="Fixed Wing">@lang('acftmodelsmod.fixedwing')</option>
                            </select></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fw-semibold"><label class="form-label" for="type">@lang('acftmodelsmod.type')</label></span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            <span class="fs-sm text-muted"><select class="form-select" name="type" id="type">
                                <option value="airplane">@lang('acftmodelsmod.airplane')</option>
                                <option value="helicopter">@lang('acftmodelsmod.helicopter')</option>
                            </select></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-alt-primary" style="float: right;">
                                <i class="fa fa-check-circle opacity-50 me-1"></i> @lang('acftmodelsmod.create')
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
