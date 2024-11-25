@extends('backend/layouts/master')

@section('title')
    Thêm mới người dùng
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Thêm mới người dùng</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.nguoidung.index') }}">Danh sách</a>
                        </li>
                        <li class="breadcrumb-item active">Thêm mới</li>
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
                action="{{ route('backend.nguoidung.store') }}">
                @csrf
                <div class="form-group ">
                    <label class="form-label" for="email">email </label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"
                        placeholder="email ">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="sodienthoai">sodienthoai</label>
                    <input type="text" class="form-control" name="sodienthoai" id="sodienthoai" value=""
                        placeholder="sodienthoai">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="matkhau">matkhau</label>
                    <textarea name="matkhau" class="form-control " id="matkhau" placeholder="Nhập matkhau"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="matkhau">matkhau</label>
                    <textarea name="matkhau" class="form-control " id="matkhau" placeholder="Nhập matkhau"></textarea>
                </div>
                <div class="form-group">
                    <label for="hinhanh" class="form-label custom-file-input mt-3">Hình ảnh</label>
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
