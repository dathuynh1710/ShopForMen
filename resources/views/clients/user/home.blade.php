@extends('clients/layouts/master')
@section('title', 'Hồ sơ khách hàng')
@section('content')
    {{-- <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item">
                            <a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap">
                            <a href="{{ route('user.home') }}">Khách hàng</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Hồ sơ</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">Hồ sơ khách hàng</h1>
            </div>
        </div>
    </div> --}}
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Profile
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5 mt-3">
                <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                    <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                        <div class="d-md-flex align-items-center">
                            <div class="position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0"
                                style="width:6.375rem;">
                                <img class="rounded-circle"
                                    src="../storage/uploads/nguoidung/img/{{ $nguoidung->hinhanh }}" />
                                {{-- /storage/uploads/danhmuc/img/{{ $dm->hinhanh }} --}}
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
                                        <i class="ci-bag opacity-60 me-2 text-view"></i>Đơn hàng<span
                                            class="fs-sm text-muted ms-auto">{{ $nguoidung->DonHang->count() }}</span>
                                    </a>
                                </li>
                            @else
                                <li class="border-bottom mb-0">
                                    <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                        <i class="ci-bag opacity-60 me-2"></i>Đơn hàng<span
                                            class="fs-sm text-muted ms-auto">0</span>
                                    </a>
                                </li>
                            @endif
                            {{-- <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                    <i class="ci-heart opacity-60 me-2"></i>Sản phẩm yêu thích<span
                                        class="fs-sm text-muted ms-auto">0</span>
                                </a>
                            </li> --}}
                            {{-- <li class="mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
                                    <i class="ci-star opacity-60 me-2"></i>Đánh giá sản phẩm<span
                                        class="fs-sm text-muted ms-auto">0</span>
                                </a>
                            </li> --}}
                        </ul>
                        <div class="bg-secondary px-4 py-3">
                            <h3 class="fs-sm mb-0 text-muted">Thiết lập tài khoản</h3>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3 active"
                                    href="{{ route('user.hosocanhan') }}">
                                    <i class="ci-user opacity-60 me-2"></i>Hồ sơ cá nhân
                                </a>
                            </li>
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3"
                                    href="{{ route('user.doimatkhau') }}">
                                    <i class="ci-location opacity-60 me-2"></i>Đổi mật khẩu
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
            <section class="col-lg-8">
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 mb-lg-3 mt-3">
                    <h2 style="color: #d67373" class="fs-base  mb-0">Cập nhật hồ sơ </h2>

                </div>
                @if (session('warning'))
                    <div class="alert alert-danger fs-base" role="alert">
                        <i class="ci-close-circle me-2"></i>{{ session('warning') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success fs-base" role="alert">
                        <i class="ci-check-circle me-2"></i>{{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('user.hosocanhan') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="row gx-4 gy-3">
                        <div class="col-12">
                            <label class="form-label" for="hoten">Họ và tên</label>
                            <input type="text" class="form-control @error('hoten') is-invalid @enderror" id="hoten"
                                name="hoten" value="{{ $nguoidung->hoten }}" required />
                            @error('hoten')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="email">Địa chỉ email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ $nguoidung->email }}" required />
                            @error('email')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="sodienthoai">Số điện thoại</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="sodienthoai"
                                name="sodienthoai" value="{{ $nguoidung->sodienthoai }}" required />
                            @error('sodienthoai')
                                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="form-check">
                            </div>
                            <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i
                                    class="ci-check-circle me-2"></i>Cập nhật hồ sơ</button>
                        </div>
                    </div>
        </div>
        </form>
        </section>
    </div>
    </div>
@endsection
