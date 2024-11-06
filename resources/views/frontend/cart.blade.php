@extends('frontend/layouts/master')

@section('content')
    <section id="page-header" class="about-header">
        <h2>Giỏ hàng</h2>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <th>Xóa</th>
                    <th>Ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fa fa-times-circle"></i></td>
                    <td><img src="img/products/f1.jpg" alt="" /></td>
                    <td>Áo thun cá sấu nam</td>
                    <td>120.000 VNĐ</td>
                    <td><input type="number" value="1" /></td>
                    <td>120.000</td>
                </tr>
                <tr>
                    <td><i class="fa fa-times-circle"></i></td>
                    <td><img src="img/products/f2.jpg" alt="" /></td>
                    <td>Áo thun cá sấu nam</td>
                    <td>120.000 VNĐ</td>
                    <td><input type="number" value="1" /></td>
                    <td>120.000</td>
                </tr>
                <tr>
                    <td><i class="fa fa-times-circle"></i></td>
                    <td><img src="img/products/f3.jpg" alt="" /></td>
                    <td>Áo thun cá sấu nam</td>
                    <td>120.000 VNĐ</td>
                    <td><input type="number" value="1" /></td>
                    <td>120.000</td>
                </tr>
                <tr>
                    <td><i class="fa fa-times-circle"></i></td>
                    <td><img src="img/products/f4.jpg" alt="" /></td>
                    <td>Áo thun cá sấu nam</td>
                    <td>120.000 VNĐ</td>
                    <td><input type="number" value="1" /></td>
                    <td>120.000</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Mã giảm giá</h3>
            <div>
                <input type="text" placeholder="Nhập mã giảm giá" />
                <button class="normal">Áp dụng</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Tổng tiền:</td>
                    <td>499.000 VNĐ</td>
                </tr>
                <tr>
                    <td>Vận chuyển:</td>
                    <td>Miễn phí</td>
                </tr>
                <tr>
                    <td><strong>Tiền thanh toán:</strong></td>
                    <td><strong>499.000 VNĐ</strong></td>
                </tr>
            </table>

            <button class="normal">Tiến hành thanh toán</button>
        </div>
    </section>
@endsection
