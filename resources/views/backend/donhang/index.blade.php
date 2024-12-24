@extends('backend.layouts.master')

@section('title')
    Danh sách đơn hàng
@endsection

@section('main-content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Quản lý đơn hàng</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý đơn hàng</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="orderList">
                    <div class="card-header border-0">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <h5 class="card-title mb-0">Danh sách đơn hàng</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                    </ul>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table table-nowrap align-middle" id="orderTable">
                                            <thead class="text-muted table-light">
                                                <tr class="text-uppercase">
                                                    <th>STT</th>
                                                    <th>Ngày đặt</th>
                                                    <th>Trạng thái</th>
                                                    <th>Tổng giá</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @forelse ($dsDonHang as $item)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $item->created_at->format('d/m/Y H:m:s') }}</td>
                                                        <td>
                                                            @switch($item->TrangThai->tinhtrang)
                                                                @case(1)
                                                                    <span class="badge bg-danger-subtle text-danger text-uppercase">
                                                                        {{ $item->TrangThai->tinhtrang ?? 'Không xác định' }}
                                                                    </span>
                                                                @break

                                                                @case(3)
                                                                    <span
                                                                        class="badge bg-success-subtle text-success text-uppercase">
                                                                        {{ $item->TrangThai->tinhtrang ?? 'Không xác định' }}
                                                                    </span>
                                                                @break

                                                                @case(4)
                                                                    <span
                                                                        class="badge bg-secondary-subtle text-secondary text-uppercase">
                                                                        {{ $item->TrangThai->tinhtrang ?? 'Không xác định' }}
                                                                    </span>
                                                                @break

                                                                @default
                                                                    <span
                                                                        class="badge bg-warning-subtle text-warning text-uppercase">
                                                                        {{ $item->TrangThai->tinhtrang ?? 'Không xác định' }}
                                                                    </span>
                                                            @endswitch
                                                        </td>


                                                        <td>{{ number_format($item->tongtien) }}</td>
                                                        <td>
                                                            <a href="{{ route('donhang.show', $item->id) }}"
                                                                class="btn btn-sm btn-primary">Detail</a>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5">Không có đơn hàng nào.</td>
                                                        </tr>
                                                    @endforelse

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
