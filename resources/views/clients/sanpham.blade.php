@extends('clients/layouts/master')
@section('title', 'Chi tiết sản phẩm')

@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('shop') }}" rel="nofollow">Shop</a>
                    <span></span> Mặt hàng
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="/storage/uploads/mathang/img/{{ $sanpham->hinhanh }}"
                                                    alt="product image">
                                            </figure>
                                            @foreach ($sanpham->hinhanhs as $item)
                                                <figure class="border-radius-10">
                                                    <img src="/storage/uploads/mathang/img/{{ $item->hinhanh }}"
                                                        alt="product image">
                                                </figure>
                                            @endforeach
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="/storage/uploads/mathang/img/{{ $sanpham->hinhanh }}"
                                                    alt="product image"></div>
                                            @foreach ($sanpham->hinhanhs as $item)
                                                <div><img src="/storage/uploads/mathang/img/{{ $item->hinhanh }}"
                                                        alt="product image"></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $sanpham->tenmathang }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Thương hiệu: <a
                                                        href="#!">{{ $sanpham->thuonghieu->tenth }}</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <span class="font-small ml-5 text-muted"> Số lượng:
                                                    {{ $sanpham->soluongton }}</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span
                                                        class="text-brand">{{ number_format($sanpham->giaban, 0, ',', '.') }}
                                                        ₫</span></ins>
                                                <ins><span
                                                        class="old-price font-md ml-15">{{ number_format($sanpham->giagoc, 0, ',', '.') }}
                                                        ₫</span></ins>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <form method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $sanpham->id }}">
                                                <div class="detail-qty border radius">
                                                    <a href="#" class="qty-down"><i
                                                            class="fi-rs-angle-small-down"></i></a>
                                                    <span class="qty-val">1</span>

                                                    {{-- <input type="text " class="qty-val" name="quatity" value="1"> --}}
                                                    <a href="#" class="qty-up"><i
                                                            class="fi-rs-angle-small-up"></i></a>
                                                </div>
                                                <div class="product-extra-link2">
                                                    <button type="submit" class="button button-add-to-cart">Add to
                                                        cart</button>
                                            </form>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="wishlist.php"><i class="fi-rs-heart"></i></a>

                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#"> FWM15VKT</a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag">Brand</a>, <a
                                                href="#" rel="tag">Categories</a>, <a href="#"
                                                rel="tag">shopformen</a> </li>
                                        <li>Availability:<span class="in-stock text-success ml-5">8 Items In
                                                Stock</span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="">
                                        <p>
                                            {!! $sanpham->mota !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-12">
                                <h3 class="section-title style-1 mb-30">Sản phẩm liên quan</h3>
                            </div>
                            <div class="col-12">
                                <div class="row related-products">
                                    @foreach ($sanphamlienquan as $splq)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="product-details.html" tabindex="0">
                                                            <img class="default-img"
                                                                src="/storage/uploads/mathang/img/{{ $splq->hinhanh }}"
                                                                alt=""
                                                                style="width: 100%; height: 200px; object-fit: cover; ">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                                class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                            href="wishlist.php" tabindex="0"><i
                                                                class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                            href="compare.php" tabindex="0"><i
                                                                class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="product-details.html"
                                                            tabindex="0">{{ $splq->tenmathang }}</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{ number_format($splq->giaban, 0, ',', '.') }} ₫</span>
                                                        <span
                                                            class="old-price">{{ number_format($splq->giagoc, 0, ',', '.') }}
                                                            ₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
