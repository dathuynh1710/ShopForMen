@extends('clients/layouts/master')
@section('content')
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated font-text ">Chương trình thu cũ đổi mới</h4>
                                    <h2 class="animated fw-900 font-text ">Ưu đãi siêu giá trị</h2>
                                    <h1 class="animated fw-900 text-brand font-text">Áp dụng cho tất cả sản phẩm</h1>
                                    <p class="animated font-text">Tiết kiệm & ưu đãi lên đến 70%</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{ route('shop') }}"> Mua ngay </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{ asset('fassets/imgs/slider/slider-1.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated font-text">Ưu đãi hấp dẫn</h4>
                                    <h2 class="animated fw-900 font-text">Xu hướng mua sắm</h2>
                                    <h1 class="animated fw-900 text-7 font-text">Sản phẩm gia dụng cao cấp</h1>
                                    <p class="animated font-text">Tiết kiệm & ưu đãi lên đến 20%</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="{{ route('shop') }}">
                                        Khám phá ngay </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="{{ asset('fassets/imgs/slider/slider-2.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('fassets/imgs/theme/icons/feature-1.png') }}" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('fassets/imgs/theme/icons/feature-2.png') }}" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('fassets/imgs/theme/icons/feature-3.png') }}" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('fassets/imgs/theme/icons/feature-4.png') }}" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('fassets/imgs/theme/icons/feature-5.png') }}" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('fassets/imgs/theme/icons/feature-6.png') }}" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one"
                                type="button" role="tab" aria-controls="tab-one" aria-selected="true">Nổi bật</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two"
                                type="button" role="tab" aria-controls="tab-two" aria-selected="false">Phổ
                                biến</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three"
                                type="button" role="tab" aria-controls="tab-three" aria-selected="false">Hàng
                                mới</button>
                        </li>
                    </ul>
                    <a href="{{ route('shop') }}" class="view-more d-none d-md-flex">Xem thêm<i
                            class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ($sanphams as $sanpham)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
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
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                        class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                        class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">{{ $sanpham->danhmuc->tendanhmuc }}</a>
                                            </div>
                                            <h2>
                                                <a
                                                    href="{{ route('chitietsanpham', $sanpham->id) }}">{{ $sanpham->tenmathang }}</a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
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
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            @foreach ($sanphamcosptonmin as $sanpham)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
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
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                        class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                        class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                @if ($sanpham->noibat)
                                                    <span class="hot">Hot</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">{{ $sanpham->danhmuc->tendanhmuc }}</a>
                                            </div>
                                            <h2>
                                                <a
                                                    href="{{ route('chitietsanpham', $sanpham->id) }}">{{ $sanpham->tenmathang }}</a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
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
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            @foreach ($sanphamnew as $sanpham)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
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
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                        class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                        class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop.html">{{ $sanpham->danhmuc->tendanhmuc }}</a>
                                            </div>
                                            <h2>
                                                <a href="{{ route('chitietsanpham', $sanpham->id) }}">
                                                    {{ $sanpham->tenmathang }}
                                                </a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
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
                    </div>

                    <!--End product-grid-4-->
                </div>
                <!--En tab three (New added)-->
            </div>
            <!--End tab-content-->
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="{{ asset('') }}fassets/imgs/banner/banner4.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Chế độ bảo hành</h4>
                        <h1 class="fw-600 mb-20">Shopformen <br>Đối tác cung cấp được ủy quyền</h1>
                        <a href="{{ route('shop') }}" class="btn">Tìm hiểu thêm <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20">Danh mục <span>Phổ biến</span> </h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows">
                    </div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('shop') }}"><img
                                        src="{{ asset('/storage\uploads\danhmuc\img\noicomdien.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="{{ route('shop') }}">Nồi cơm điện</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('shop') }}"> <img
                                        src="{{ asset('/storage/uploads/danhmuc/img/noichien.png') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="{{ route('shop') }}">Nồi chiên</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('shop') }}"><img
                                        src="{{ asset('/storage/uploads/danhmuc/img/maylocnuoc.png') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="{{ route('shop') }}">Máy lọc nước</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('shop') }}"><img
                                        src="{{ asset('/storage/uploads/danhmuc/img/maylockhongkhi.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="{{ route('shop') }}">Máy lọc KK</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('shop') }}"><img
                                        src="{{ asset('/storage/uploads/danhmuc/img/mayhutbui.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="{{ route('shop') }}">Máy hút bụi</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('shop') }}"><img
                                        src="{{ asset('/storage/uploads/danhmuc/img/mayeptraicay.jpg') }}"
                                        alt=""></a>
                            </figure>
                            <h5><a href="{{ route('shop') }}">Máy ép</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{ route('shop') }}"><img
                                        src="{{ asset('/storage/uploads/danhmuc/img/bepdien.jpg') }}" alt=""></a>
                            </figure>
                            <h5><a href="{{ route('shop') }}">Bếp điện</a></h5>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('fassets/imgs/banner/banner1.png') }}" alt="">
                            <div class="banner-text">
                                <span>Siêu Sale Ngập Tràn </span>
                                <h4>Sale 50% <br>sản phẩm máy ép</h4>
                                <a href="{{ route('shop') }}">Mua ngay <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('fassets/imgs/banner/banner2.png') }}" alt="">
                            <div class="banner-text">
                                <span>Giảm giá</span>
                                <h4>Sắm tết <br>Trả chậm</h4>
                                <a href="{{ route('shop') }}">Mua ngay <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="{{ asset('fassets/imgs/banner/banner3.png') }}" alt="">
                            <div class="banner-text">
                                <span>Sản phẩm mới</span>
                                <h4>Mua ngay<br>Ưu đãi hôm nay</h4>
                                <a href="{{ route('shop') }}">Mua ngay <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20">Sản phẩm <span>mới nhất</span> </h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows">
                    </div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach ($sanphamnew as $spNew)
                            <div class="product-cart-wrap small hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('chitietsanpham', $spNew->id) }}">
                                            <img class="default-img"
                                                src="/storage/uploads/mathang/img/{{ $spNew->hinhanh }}"
                                                alt="Hình ảnh sản phẩm"
                                                style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                            data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                            href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                            tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2>
                                        <a href="{{ route('chitietsanpham', $spNew->id) }}">{{ $spNew->tenmathang }}</a>
                                    </h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>{{ number_format($spNew->giaban, 0, ',', '.') }} ₫</span>
                                        <span class="old-price">{{ number_format($spNew->giagoc, 0, ',', '.') }} ₫</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding">
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated">Thương hiệu <span>Nổi bật</span> </h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows">
                    </div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('storage/uploads/thuonghieu/img/ava.jpg') }}"
                                alt="Thương hiệu 1"
                                style="max-height: 100px; width: auto; object-fit: contain; border-radius: 5px;">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('storage/uploads/thuonghieu/img/hoaphat.png') }}"
                                alt="Thương hiệu 2"
                                style="max-height: 100px; width: auto; object-fit: contain; border-radius: 5px;">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('/storage/uploads/thuonghieu/img/Kangaroo.jpg') }}"
                                alt="Thương hiệu 3"
                                style="max-height: 100px; width: auto; object-fit: contain; border-radius: 5px;">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover"
                                src="{{ asset('/storage/uploads/thuonghieu/img/Logo_cong_ty_sunhouse.png') }}"
                                alt="Thương hiệu 4"
                                style="max-height: 100px; width: auto; object-fit: contain; border-radius: 5px;">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover"
                                src="{{ asset('/storage/uploads/thuonghieu/img/logo-thuong-hieu-karofi.png') }}"
                                alt="Thương hiệu 5"
                                style="max-height: 100px; width: auto; object-fit: contain; border-radius: 5px;">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover"
                                src="{{ asset('/storage/uploads/thuonghieu/img/panasonic.png') }}" alt="Thương hiệu 6"
                                style="max-height: 100px; width: auto; object-fit: contain; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
