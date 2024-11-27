@extends('backend/layouts/master')

@section('title')
    Cập nhật người dùng
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Cập nhật người dùng</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.nguoidung.index') }}">Danh sách</a>
                        </li>
                        <li class="breadcrumb-item active">Cập nhật</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Form nhập liệu - START -->
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Form nhập liệu</h4>
        </div>
        <div class="card-body">
            <!-- DIV hiển thị thông báo lỗi start -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- DIV hiển thị thông báo lỗi end -->
            <form name="frmCreate" id="frmCreate" method="post" enctype="multipart/form-data"
                action="{{ route('backend.nguoidung.update', ['id' => $nguoiDung->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group ">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $nguoiDung->email }}"
                        placeholder="Nhập email ">
                </div>
                <div class="form-group ">
                    <label class="form-label mt-3" for="hoten">Họ tên</label>
                    <input type="text" class="form-control" name="hoten" id="hoten" value="{{ $nguoiDung->hoten }}"
                        placeholder="Nhập họ tên ">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="sodienthoai">Số điện thoại</label>
                    <input type="text" class="form-control" name="sodienthoai" id="sodienthoai"
                        value="{{ $nguoiDung->sodienthoai }}" placeholder="Nhập số ĐT">
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="form-label mt-3" for="matkhau">Loại</label>
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="loai" id="admin" value="0"
                                    {{ isset($nguoiDung) && $nguoiDung->loai == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="admin">Admin</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="loai" id="staff" value="1"
                                    {{ isset($nguoiDung) && $nguoiDung->loai == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="staff">Nhân viên</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hinhanh" class="form-label custom-file-input mt-3">Hình ảnh</label>
                    <div>
                        <img style="width: 300px;" src="/storage/uploads/nguoidung/img/{{ $nguoiDung->hinhanh }}"
                            alt="">
                    </div>
                    <input class="form-control" name="hinhanh" type="file" id="hinhanh">
                </div>
                <div class="mt-3">
                    <a href="{{ route('backend.nguoidung.index') }}" class="btn btn-outline-secondary ">Quay về danh
                        sách</a>
                    <button type="submit" class="btn btn-primary btn-save">Lưu</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Form nhập liệu - END -->
@endsection
