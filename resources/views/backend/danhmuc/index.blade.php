@extends('backend.layouts.master')

@section('title')
    Danh sach danh muc
@endsection

@section('main-content')
    <h1>Danh sach Danh muc</h1>
    <p>Số lượng dữ liệu: {{ count($dsDanhMuc) }}</p>
    <br />
    <a class="btn btn-primary" style="width: 150px; text-align: center; padding: 8px 12px;" href="{{ route('backend.danhmuc.create') }}">Thêm mới</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Hành động</th>
        </tr>
        @foreach ($dsDanhMuc as $dm)
            <tr>
                <td>{{ $dm->id }}</td>
                <td>{{ $dm->madanhmuc }}</td>
                <td>{{ $dm->tendanhmuc }}</td>
                <td>{{ $dm->mota }}</td>
                <td>{{ $dm->hinhanh }}</td>
                <td>{{ $dm->created_at->format('d/m/Y H:i:s') }}</td>
                <td>{{ $dm->updated_at}}</td>
                <td>
                    <a href="{{ route('backend.danhmuc.edit',['id' =>  $dm->id]) }}" class="btn btn-warning">Sửa</a>
                    <form method="post" action="{{ route('backend.danhmuc.destroy', ['id' => $dm->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection