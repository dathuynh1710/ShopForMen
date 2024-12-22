@extends('clients/layouts/master')
@section('title', 'Thanh toán')
@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" rel="nofollow">Home</a>
                <span></span> <a href="{{ route('giohang') }}">Giỏ hàng</a>
                <span></span> Thanh toán
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Thông tin giao hàng
                            </h4>
                        </div>
                        <form method="post" action="{{ route('user.dathang') }}" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="HoVaTen">Khách hàng</label>
                                <input class="form-control" type="text" id="HoVaTen"
                                    value="{{ Auth::user()->hoten ?? '' }}" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="sodienthoai">Điện thoại giao hàng</label>
                                <input class="form-control @error('sodienthoai') is-invalid @enderror" type="text"
                                    id="sodienthoai" name="sodienthoai" value="{{ Auth::user()->sodienthoai ?? '' }}" />

                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="diachigiaohang">Địa chỉ giao hàng</label>
                                <input class="form-control @error('diachigiaohang') is-invalid @enderror" type="text"
                                    id="diachigiaohang" name="diachigiaohang"
                                    value="{{ Auth::user()->diachi()->where('macdinh', 1)->first()->diachi ?? '' }}" />
                                @error('diachigiaohang')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                            <h6 class="mb-3 py-3 border-bottom">Thông tin xuất hóa đơn</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" checked id="same-address">
                                <label class="form-check-label" for="same-address">Tương tự thông tin giao hàng</label>
                            </div>
                            <input type="submit" id="submit-form" hidden />
                        </form>
                        <div class="d-none d-lg-flex pt-4 mt-2">
                            <div class="w-50 pe-3">
                                <a class="btn btn-secondary d-block w-100" href="{{ route('giohang') }}">
                                    <i class="ci-arrow-left mt-sm-0 me-1"></i>
                                    <span class="d-none d-sm-inline">Quay lại giỏ hàng</span>
                                    <span class="d-inline d-sm-none">Quay lại</span>
                                </a>
                            </div>
                            <div class="w-50 ps-2">
                                <label for="submit-form" class="btn btn-primary d-block w-100">
                                    <span class="d-none d-sm-inline">Hoàn tất đặt hàng</span>
                                    <span class="d-inline d-sm-none">Hoàn tất</span>
                                    <i class="ci-arrow-right mt-sm-0 ms-1"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Sản phẩm đã đặt</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Sản phẩm</th>
                                            <th>Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::content() as $value)
                                            <tr>
                                                <td class="image product-thumbnail"><img
                                                        src="/storage/uploads/mathang/img/{{ $value->options->image }}"
                                                        alt="#"></td>
                                                <td>
                                                    <h5><a href="#!">{{ $value->name }}</a></h5>
                                                    <span class="product-qty">x {{ $value->qty }}</span>
                                                </td>
                                                <td><span
                                                        class="text-accent me-2">{{ number_format($value->price, 0, ',', '.') }}<small>đ</small></span>
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <th>Tổng tiền sản phẩm
                                            </th>
                                            <td class="product-subtotal" colspan="2">{{ Cart::priceTotal() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phí vận chuyển
                                            </th>
                                            <td colspan="2">
                                                <em><span>{{ number_format(config('cart.shipping_fee'), 0, ',', '.') }}
                                                    </span>
                                                </em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Thuế GTGT</th>
                                            <td colspan="2"><em>{{ Cart::tax() }}</em></td>
                                        </tr>
                                        <tr>
                                            <th>Tổng tiền</th>
                                            <td colspan="2" class="product-subtotal">
                                                @php
                                                    $total = Cart::total(0, '', '') + config('cart.shipping_fee');
                                                @endphp
                                                <span
                                                    class="font-xl text-brand fw-900">{{ number_format($total, 0, ',', '.') }}
                                                    đ</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
