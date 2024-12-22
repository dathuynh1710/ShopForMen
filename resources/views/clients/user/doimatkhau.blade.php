@extends('clients/layouts/master')
@section('title', 'Đổi mât khẩu')
@section('content')
    <div class="container">
        <div class="row">
            <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5 mt-3">
                <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                    <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                        <div class="d-md-flex align-items-center">
                            <div class="position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width:6.375rem;">
                                <img class="rounded-circle" src="/storage/uploads/nguoidung/img/{{ $nguoidung->hinhanh }}" />
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
                                <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#">
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
                <div id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                    <div class="card">
                        <div class="card-header">
                            <h5>Đổi mật khẩu</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.doimatkhau') }}" method="post" name="enq">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Mật khẩu hiện tại <span class="required">*</span></label>
                                        <input required="" class="form-control square" name="old_password"
                                            type="password">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Mật khẩu mới <span class="required">*</span></label>
                                        <input required="" class="form-control square" name="new_password"
                                            type="password">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Xác nhận mật khẩu <span class="required">*</span></label>
                                        <input required="" class="form-control square" name="cpassword" type="password">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-fill-out submit btn-save" name="submit"
                                            value="Submit">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('custom-js')
    <script>
        $(function() {
            $('.btn-save').on('click', function(e) {
                $('form[name="enq"]').submit();
                Swal.fire(
                    'Đã lưu!',
                    'Đổi mật khẩu thành công!!',
                    'success',
                );
            });
        });
    </script>
@endsection
