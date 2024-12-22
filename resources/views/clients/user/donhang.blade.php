@extends('clients/layouts/master')
@section('title', 'Đơn hàng của bạn')
@section('content')
    <div class="container">
        <div class="row">
            <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5 mt-3">
                <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                    <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                        <div class="d-md-flex align-items-center">
                            <div class="position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width:6.375rem;">
                                <img class="rounded-circle"
                                    src="../storage/uploads/nguoidung/img/{{ $nguoidung->hinhanh }}" />
                            </div>
                            <div class="ps-md-3">
                                <h3 class="fs-base mb-0">{{ $nguoidung->hoten }}</h3>
                                <span class="text-accent fs-sm">{{ $nguoidung->email }}</span>
                            </div>
                        </div>
                        <a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu"
                            data-bs-toggle="collapse" aria-expanded="false">
                            <i class="ci-menu me-2"></i>Hồ sơ khách hàng
                        </a>
                    </div>
                    <div class="d-lg-block collapse" id="account-menu">
                        <div class="bg-secondary px-4 py-3">
                            <h3 class="fs-sm mb-0 text-muted">Quản lý</h3>
                        </div>
                        <ul class="list-unstyled mb-0">
                            @if ($nguoidung->DonHang->count() > 0)
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center px-4 py-3"
                                        href="{{ route('user.donhang') }}">
                                        <i class="fi-rs-shopping-bag mr-10"></i> <i
                                            class="ci-bag opacity-60 me-2 text-view"></i>Đơn hàng<span
                                            class="fs-sm text-muted ms-auto">{{ $nguoidung->DonHang->count() }}</span>
                                    </a>
                                </li>
                            @else
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                        <i class="fi-rs-shopping-bag mr-10"></i> Đơn
                                        hàng<span class="fs-sm text-muted ms-auto">0</span>
                                    </a>
                                </li>
                            @endif

                        </ul>
                        <div class="bg-secondary px-4 py-3">
                            <h3 class="fs-sm mb-0 text-muted">Thiết lập tài khoản</h3>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3 active"
                                    href="{{ route('user.hosocanhan') }}">
                                    <i class="fi-rs-user mr-10"></i> Hồ sơ cá nhân
                                </a>
                            </li>
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3"
                                    href="{{ route('user.doimatkhau') }}">
                                    <i class="fi-rs-lock mr-10"></i> Đổi mật khẩu
                                </a>
                            </li>

                            <li class="d-lg-none border-top mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="ci-sign-out opacity-60 me-2"></i>Đăng xuất
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div class="col-lg-8 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Đơn hàng của bạn</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ngày mua</th>
                                        <th>Mặt hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donhangs as $donhang)
                                        <tr>
                                            <td>{{ $donhang->id }}</td>
                                            <td>{{ \Carbon\Carbon::parse($donhang->ngay)->format('d-m-Y H:i:s') }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($donhang->ctdonhang as $chitiet)
                                                        <li>
                                                            {{ $chitiet->mathang->tenmathang }}
                                                            <br />(Số lượng: {{ $chitiet->soluong }})
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>{{ number_format($donhang->tongtien, 0, ',', '.') }} VND</td>
                                            <td>
                                                @if ($donhang->trangthai == 0)
                                                    <span class="badge bg-danger">Chờ xác nhận</span>
                                                @elseif ($donhang->trangthai == 1)
                                                    <span class="badge bg-warning">Đang giao</span>
                                                @elseif ($donhang->trangthai == 2)
                                                    <span class="badge bg-success">
                                                        Đã giao
                                                    </span>
                                                @elseif ($donhang->trangthai == 3)
                                                    <span class="badge bg-danger">Đã hủy</span>
                                                @endif
                                            </td>
                                            {{-- <td>
                                                <a href="{{ route('user.donhang.chitiet', $donhang->id) }}"
                                                    class="">View</a>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
