@extends('backend/layouts/master')

@section('title')
Cập nhật danh mục
@endsection

@section('main-content')
<h4 class="mb-sm-0">Cập nhật Danh mục</h4>
<form name="frmCreate" method="post" action="{{ route('backend.danhmuc.update',['id' => $editModel->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label class="form-label" for="madanhmuc">Mã danh mục </label>
        <input type="text" class="form-control" name="madanhmuc" id="madanhmuc" value="{{ $editModel->madanhmuc }}" placeholder="Mã danh mục">
    </div>
    <div class="form-group">
        <label class="form-label" for="tendanhmuc">Tên danh mục</label>
        <input type="text" class="form-control" name="tendanhmuc" id="tendanhmuc" value="{{ $editModel->tendanhmuc }}" placeholder="Tên danh mục">
    </div>
    <div class="form-group">
        <label class="form-label" for="mota">Mô tả</label>
        <textarea class="form-control" name="mota" id="mota" rows="5">{{ $editModel->mota }}</textarea>
    </div>
    <div class="form-group">
        <label for="hinhanh" class="form-label custom-file-input">Hình ảnh</label>
        <input class="form-control" name="hinhanh" type="file" value="{{ $editModel->hinhanh }}" id="hinhanh"> 
    </div>
    <a href="{{ route('backend.danhmuc.index') }}" class="btn btn-outline-secondary mb-1">Quay về danh sách</a>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection