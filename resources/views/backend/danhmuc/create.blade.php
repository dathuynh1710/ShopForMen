@extends('backend/layouts/master')

@section('title')
    Thêm mới danh mục
@endsection

@section('main-content')
    <h4 class="mb-sm-0">Thêm mới Danh mục</h4>
    <form name="frmCreate" method="post" action="{{ route('backend.danhmuc.store') }}">
        @csrf
        <div class="form-group ">
            <label class="form-label mt-3" for="madanhmuc">Mã danh mục </label>
            <input type="text" class="form-control" name="madanhmuc" id="madanhmuc" value=""
                placeholder="Mã danh mục">
        </div>
        <div class="form-group">
            <label class="form-label mt-3" for="tendanhmuc">Tên danh mục</label>
            <input type="text" class="form-control" name="tendanhmuc" id="tendanhmuc" value=""
                placeholder="Tên danh mục">
        </div>
        <div class="form-group">
            <label class="form-label mt-3" for="mota">Mô tả</label>
            <textarea class="form-control" name="mota" id="mota" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="hinhanh" class="form-label custom-file-input mt-3">Hình ảnh</label>
            <input class="form-control" name="hinhanh" type="file" id="hinhanh">
        </div>
        <div class="mt-3">
            <a href="{{ route('backend.danhmuc.index') }}" class="btn btn-outline-secondary ">Quay về danh sách</a>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection
