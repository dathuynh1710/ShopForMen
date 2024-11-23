@extends('backend.layouts.master')

@section('title')
    Chi tiết mặt hàng
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Chi tiết mặt hàng</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('backend.mathang.index') }}">Danh sách</a>
                            </li>
                            <li class="breadcrumb-item active">Chi tiết SP</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-lg-5">
                            <div class="col-xl-4 col-md-8 mx-auto">
                                <div class="product-img-slider sticky-side-div">
                                    <div class="swiper product-thumbnail-slider p-2 rounded bg-light "
                                        style=" background-color: #987b7b !important;">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/storage/uploads/mathang/img/{{ $product->hinhanh }}"
                                                    alt="" class="img-fluid d-block" />
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end swiper thumbnail slide -->
                                    <div>
                                        <div style="margin-top: 20px;">
                                            <div
                                                style="display:
                                            flex; gap: 10px; flex-wrap: wrap; ">
                                                @foreach ($images as $image)
                                                    <div style="flex: 0 0 auto; max-width: 150px;">
                                                        <img src="/storage/uploads/mathang/img/{{ $image->hinhanh }}"
                                                            alt=""
                                                            style="width: 100%; height: auto; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);" />
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>

                                    <!-- end swiper nav slide -->
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-8">
                                <div class="mt-xl-0 mt-5">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4>{{ $product->tenmathang }}</h4>
                                            <div class="hstack gap-3 flex-wrap">


                                                <div class="text-muted">Thương hiệu : <span
                                                        class="text-body fw-medium">{{ $product->thuonghieu->tenth }}</span>
                                                </div>
                                                <div class="vr"></div>
                                                <div class="text-muted">Danh mục : <span
                                                        class="text-body fw-medium">{{ $product->danhmuc->tendanhmuc }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div>
                                                <a href="{{ route('backend.mathang.edit', ['id' => $product->id]) }} "
                                                    class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row mt-4">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-money-dollar-circle-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Giá bán :</p>
                                                        <h5 class="mb-0">{{ $product->giaban }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-file-copy-2-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Giá gốc :</p>
                                                        <h5 class="mb-0">{{ $product->giagoc }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-stack-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Số lượng :</p>
                                                        <h5 class="mb-0">{{ $product->soluongton }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-inbox-archive-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">SP nổi bật :</p>
                                                        @if ($product->noibat == 1)
                                                            <span class="badge text-bg-primary">Có</span>
                                                        @else
                                                            <span class="badge bg-primary-subtle text-primary">Không</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>


                                    <!-- end row -->

                                    <div class="mt-4 text-muted">
                                        <h5 class="fs-14">Mô tả :</h5>
                                        <p>{{ $product->mota }}</p>
                                    </div>

                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection
