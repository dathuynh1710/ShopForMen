@extends('backend/layouts/master')

@section('title')
    Cập nhật thương hiệu
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Cập nhật thương hiệu</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.thuonghieu.index') }}">Danh sách</a>
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
                action="{{ route('backend.thuonghieu.update', ['id' => $editModel->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label " for="math">Mã thương hiệu </label>
                    <input type="text" class="form-control" name="math" id="math" value="{{ $editModel->math }}"
                        placeholder="Mã thương hiệu">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="tenth">Tên thương hiệu</label>
                    <input type="text" class="form-control" name="tenth" id="tenth" value="{{ $editModel->tenth }}"
                        placeholder="Tên thương hiệu">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="mota">Mô tả</label>
                    <textarea class="form-control" name="mota" id="mota" rows="5">{{ $editModel->mota }}</textarea>
                </div>
                <div class="form-group">

                    <label for="hinhanh" class="form-label custom-file-input mt-3">Hình ảnh</label>
                    <div>
                        <img style="width: 300px;" src="/storage/uploads/thuonghieu/img/{{ $editModel->hinhanh }}"
                            alt="">
                    </div>
                    <input class="form-control" name="hinhanh" type="file" id="hinhanh">
                </div>
                <div class="mt-3">
                    <a href="{{ route('backend.thuonghieu.index') }}" class="btn btn-outline-secondary ">Quay về danh sách
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
                const math = $('#math').val();
                const tenth = $('#tenth').val();
                if (!math || !tenth) {
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
