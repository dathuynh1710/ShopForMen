@extends('backend.layouts.master')

@section('title')
    Chi tiết đơn hàng
@endsection
@section('main-content')
    <a href="{{ route('backend.donhang.index') }}" class="btn btn-info">Quay lại</a>
    <div class="row">
        <div class="col-md-6 mt-3">
            <h3>Thông tin giao hàng</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <td>{{ $auth->hoten }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $auth->sodienthoai }}</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{ $diachi->diachi ?? 'Châu Thành, An Giang' }}</td>
                    </tr>
                </thead>
            </table>
        </div>

    </div>
    <h3 class="mt-3">Thông tin sản phẩm</h3>

    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá </th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->ctdonhang as $item)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><img src="/storage/uploads/mathang/img/{{ $item->mathang->hinhanh }}" width="40"></td>
                    <td>{{ $item->mathang->tenmathang }}</td>
                    <td>{{ $item->soluong }}</td>
                    <td>{{ number_format($item->dongia) }}</td>
                    <td>{{ number_format($item->dongia * $item->soluong) }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
