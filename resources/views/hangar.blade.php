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
                    <th>Aircraft Registration</th>
                    <th class="d-none d-xl-table-cell">Name</th>
                    <th>ICAO Code</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
            <div>
                {{ $hangars->links() }}
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
