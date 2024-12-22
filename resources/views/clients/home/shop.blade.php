@extends('clients/layouts/master')
@section('title', 'Shop')

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> Đã tìm thấy <strong class="text-brand">{{ $totalMH }}</strong> mặt hàng
                                    cho bạn!</p>
                            </div>

                        </div>
                        <div class="row product-grid-3">
                            @foreach ($sanphams as $sanpham)
                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">

                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('chitietsanpham', $sanpham->id) }}">
                                                    <img class="default-img"
                                                        src="/storage/uploads/mathang/img/{{ $sanpham->hinhanh }}"
                                                        alt="Hình ảnh sản phẩm"
                                                        style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                                                </a>
                                            </div>
                                            {{-- <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                    <i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                        class="fi-rs-shuffle"></i></a>
                                            </div> --}}
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">{{ $sanpham->danhmuc->tendanhmuc }}</a>
                                            </div>
                                            <h2><a
                                                    href="{{ route('chitietsanpham', $sanpham->id) }}">{{ $sanpham->tenmathang }}</a>
                                            </h2>

                                            <div class="product-price">
                                                <span>{{ number_format($sanpham->giaban, 0, ',', '.') }} ₫</span>
                                                <span class="old-price">{{ number_format($sanpham->giagoc, 0, ',', '.') }}
                                                    ₫</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up"
                                                    href="{{ route('giohang.them', $sanpham->id) }}">
                                                    <i class="fi-rs-shopping-bag-add"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            {{-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav> --}}
                            {{ $sanphams->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Danh mục</h5>
                            <ul class="categories">
                                @foreach ($dmsps as $dmsp)
                                    <li>
                                        <a href="{{ route('sanphamtheodanhmuc', $dmsp->id) }}">{{ $dmsp->tendanhmuc }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
