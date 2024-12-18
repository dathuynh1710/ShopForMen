@extends('backend/layouts/master')

@section('title')
    Cập nhật danh mục
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Cập nhật Danh mục</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.danhmuc.index') }}">Danh sách</a>
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
            <form name="frmCreate" method="post" enctype="multipart/form-data"
                action="{{ route('backend.danhmuc.update', ['id' => $editModel->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label " for="madanhmuc">Mã danh mục </label>
                    <input type="text" class="form-control" name="madanhmuc" id="madanhmuc"
                        value="{{ $editModel->madanhmuc }}" placeholder="Mã danh mục">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="tendanhmuc">Tên danh mục</label>
                    <input type="text" class="form-control" name="tendanhmuc" id="tendanhmuc"
                        value="{{ $editModel->tendanhmuc }}" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="mota">Mô tả</label>
                    <textarea class="form-control" name="mota" id="mota" rows="5">{{ $editModel->mota }}</textarea>
                </div>
                <div class="form-group">

                    <label for="hinhanh" class="form-label custom-file-input mt-3">Hình ảnh</label>
                    <div>
                        <img style="width: 300px;" src="/storage/uploads/danhmuc/img/{{ $editModel->hinhanh }}"
                            alt="">
                    </div>
                    <input class="form-control" name="hinhanh" type="file" id="hinhanh">
                </div>
                <div class="mt-3">
                    <a href="{{ route('backend.danhmuc.index') }}" class="btn btn-outline-secondary ">Quay về danh sách
                    </a>
                    <button type="submit" class="btn btn-primary btn-save">Lưu</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Form nhập liệu - END -->
@endsection

@section('custom-js')
    <script>
        $(function() {
            $('.btn-save').on('click', function(e) {
                e.preventDefault();
                const madanhmuc = $('#madanhmuc').val();
                const tendanhmuc = $('#tendanhmuc').val();
                if (!madanhmuc || !tendanhmuc) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi',
                        text: 'Vui lòng điền đầy đủ thông tin!',
                    });
                    return false;
                }
                $('form[name="frmCreate"]').submit();
                Swal.fire(
                    'Đã lưu!',
                    'Dữ liệu đã được lưu thành công.',
                    'success',

                );
            });
        });
    </script>
@endsection
