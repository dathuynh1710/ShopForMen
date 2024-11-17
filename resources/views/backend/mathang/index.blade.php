@extends('backend.layouts.master')

@section('title')
    Danh sách mặt hàng
@endsection

@section('main-content')
    <h1>Danh sách mặt hàng</h1>
    <a class="btn btn-primary" href="{{ route('backend.mathang.create') }}">Thêm mới</a>
    <table class="mt-3 table table-bordered">
        <tr>
            <th>Tên mặt hàng</th>
            <th>Giá gốc</th>
            <th>Giá bán</th>
            <th>Số lượng tồn</th>
            <th>Hình ảnh</th>
            <th>Nổi bật</th>
            <th>Danh mục</th>
            <th>Thương hiệu</th>
            <th>Hành động</th>
        </tr>
        @foreach ($dsMatHang as $mh)
            <tr style="vertical-align: middle;">
                <td class="mx-auto" style="max-width:200px;">{{ $mh->tenmathang }}</td>
                <td>{{ $mh->giagoc }}</td>
                <td>{{ $mh->giaban }}</td>
                <td>{{ $mh->soluongton }}</td>
                <td class="mx-auto" style="max-width:200px;">
                    <img src="/storage/uploads/mathang/img/{{ $mh->hinhanh }}" class="img-fluid w-100" alt="">
                </td>
                <td>
                    @if ($mh->noibat == 1)
                        <span class="badge text-bg-primary">Có</span>
                    @else
                        <span class="badge bg-primary-subtle text-primary">Không</span>
                    @endif
                </td>
                <td>{{ $mh->danhmuc->tendanhmuc }}</td>
                <td>{{ $mh->thuonghieu->tenth }}</td>
                <td>
                    <a href='#!' class='btn btn-info m-r-1em'>Read</a>
                    <a href="{{ route('backend.mathang.edit', ['id' => $mh->id]) }}" class="btn btn-primary m-r-1em">
                        Edit</a>
                    <button type="button" class=" btn btn-danger btn-delete" data-id="{{ $mh->id }}"
                        data-delete-url="{{ route('backend.mathang.destroy', ['id' => $mh->id]) }}"> Delete</button>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
