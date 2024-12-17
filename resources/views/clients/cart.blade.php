@extends('clients/layouts/master')
@section('title', 'Giỏ hàng')

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> <a href="{{ route('shop') }}">Shop</a>
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('giohang.capnhat') }}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table class="table shopping-summery text-center clean">
                                    <thead>
                                        <tr class="main-heading">
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Tổng tiền</th>
                                            <th scope="col">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::content() as $value)
                                            <tr>
                                                <td class="image product-thumbnail"><img
                                                        src="/storage/uploads/mathang/img/{{ $value->options->image }}"
                                                        alt="#"></td>

                                                <td class="align-middle">
                                                    <h5 class="product-name" style="color: #F15412;">{{ $value->name }}
                                                    </h5>

                                                </td>
                                                <td class="align-middle">
                                                    {{ number_format($value->price, 0, ',', '.') }}đ
                                                </td>
                                                <td class="text-center" data-title="Stock">
                                                    <div class="input-group"
                                                        style="
                                                    width: 120px;
                                                    margin: 0 auto;
                                                ">
                                                        <span class="input-group-text">
                                                            <a
                                                                href="{{ route('giohang.giam', ['row_id' => $value->rowId]) }}">
                                                                <i class="fa-solid fa-angle-down"></i></a>
                                                        </span>
                                                        <input class="form-control text-center" type="text"
                                                            id="qty" name="qty[{{ $value->rowId }}]" min="1"
                                                            value="{{ $value->qty }}" />
                                                        <span class="input-group-text">
                                                            <a
                                                                href="{{ route('giohang.tang', ['row_id' => $value->rowId]) }}">
                                                                <i class="fa-solid fa-angle-up"></i></a>
                                                        </span>
                                                    </div>
                                                </td>

                                                <td class="align-middle">
                                                    {{ number_format($value->price * $value->qty, 0, ',', '.') }}<small>đ</small>
                                                </td>

                                                <td class="action" data-title="Remove">
                                                    <a class="text-muted"
                                                        href="{{ route('giohang.xoa', ['row_id' => $value->rowId]) }}">
                                                        <i class="fi-rs-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-action text-end">
                                <button type="submit" class="btn btn-primary mr-10 mb-sm-15"><i
                                        class="fi-rs-shuffle mr-10"></i>Cập nhật giỏ hàng</button>

                                <a class="btn btn-secondary" href="{{ route('home') }}"><i
                                        class="fi-rs-shopping-bag mr-10"></i>Tiếp tục mua sắm</a>
                            </div>
                        </form>

                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">
                            <div class="col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Tổng giỏ hàng</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="cart_total_label">Tạm tính</td>
                                                    <td class="cart_total_amount"><span
                                                            class="font-lg fw-900 text-brand">{{ Cart::priceTotal() }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Vận chuyển</td>
                                                    <td class="cart_total_amount"> <i class="ti-gift mr-5"></i>
                                                        <span>{{ number_format(config('cart.shipping_fee'), 0, ',', '.') }}
                                                        </span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Tổng cộng</td>
                                                    <td class="cart_total_amount"><strong><span
                                                                class="font-xl fw-900 text-brand"> {{ Cart::priceTotal() }}
                                                            </span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a " href="{{ route('user.dathang') }}" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Tiến hành                                                                                                         thanh toán</a>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                            </section>
                                                                                                                    </main>
@endsection
