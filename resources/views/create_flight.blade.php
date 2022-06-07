@extends('layouts.nav')

@section('content')

<main id="main-container">
  <div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Store Growth
            </h3>
        </div>
        <div class="block-content">
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                <thead>
                <tr class="text-uppercase">
                    <th>Product</th>
                    <th class="d-none d-xl-table-cell">Date</th>
                    <th>Status</th>
                    <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <span class="fw-semibold">iPhone 11 Pro</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">today</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-warning">Pending..</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $1199,99
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-semibold">MacBook Pro 15"</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">today</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-warning">Pending..</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $2.299,00
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-semibold">Nvidia GTX 2080 Ti</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">today</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-warning">Pending..</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $1200,00
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-semibold">Playstation 4 Pro</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">today</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-danger">Canceled</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $399,00
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-semibold">Nintendo Switch</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">yesterday</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-success">Completed</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $349,00
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-semibold">iPhone 11</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">yesterday</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-success">Completed</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $999,00
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-semibold">Airpods Pro</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">yesterday</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-success">Completed</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $39,99
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-semibold">Xbox One X</span>
                    </td>
                    <td class="d-none d-xl-table-cell">
                        <span class="fs-sm text-muted">yesterday</span>
                    </td>
                    <td>
                        <span class="fw-semibold text-success">Completed</span>
                    </td>
                    <td class="d-none d-sm-table-cell text-end fw-medium">
                        $499,00
                    </td>
                    <td class="text-center text-nowrap fw-medium">
                        <a href="javascript:void(0)">
                            View
                        </a>
                    </td>
                </tr>
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
