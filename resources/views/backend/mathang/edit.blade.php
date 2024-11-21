@extends('backend/layouts/master')

@section('title')
    Cập nhật mặt hàng
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Cập nhật mặt hàng</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.mathang.index') }}">Danh sách</a>
                        </li>
                        <li class="breadcrumb-item active">Cập nhật</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <form name="frmCreate" id="frmCreate" method="post" enctype="multipart/form-data"
        action="{{ route('backend.mathang.store') }}" class="needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="product-title-input">Tên mặt hàng</label>
                            <input type="text" name="tenmathang" id="tenmathang" class="form-control"
                                value="{{ $editModel->tenmathang }}" placeholder="Nhập tên mặt hàng">
                        </div>
                        <div>
                            <label>Mô tả mặt hàng</label>
                            <textarea name="mota" class="form-control " id="mota" placeholder="Nhập mô tả">{{ $editModel->mota }}</textarea>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">

                    <!-- end card header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-4 col-smx-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="stocks-input">Số lượng tồn</label>
                                            <input type="text" name="soluongton" id="soluongton" class="form-control"
                                                value="{{ $editModel->soluongton }}" placeholder="Nhập số lượng tồn">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-price-input">Giá gốc</label>
                                            <div class="input-group has-validation mb-3">
                                                <span class="input-group-text" id="product-price-addon">VNĐ</span>
                                                <input type="text" class="form-control" name="giagoc" id="giagoc"
                                                    value="{{ $editModel->giagoc }}" placeholder="Nhập giá gốc"
                                                    aria-label="Price" aria-describedby="product-price-addon">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-discount-input">Giá bán</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="product-discount-addon">VNĐ</span>
                                                <input type="text" class="form-control" name="giaban" id="giaban"
                                                    value="{{ $editModel->giaban }}" placeholder="Nhập giá bán"
                                                    aria-label="discount" aria-describedby="product-discount-addon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Hình ảnh</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="fs-14 mb-1">Hình ảnh mặt hàng</h5>
                            <p class="text-muted">Thêm hình ảnh chính của mặt hàng.
                            </p>
                            <div>
                                <img style="width: 200px;" src="/storage/uploads/mathang/img/{{ $editModel->hinhanh }}"
                                    alt="">
                            </div>
                            {{-- <div class="text-center">
                                <div class="position-relative d-inline-block">
                                    <div class="position-absolute top-100 start-100 translate-middle">
                                        <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Select Image">
                                            <div class="avatar-xs">
                                                <div
                                                    class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input name="hinhanh" class="form-control d-none" value=""
                                            id="product-image-input" type="file"
                                            accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="" id="product-img" class="avatar-md h-auto" />
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <input class="form-control" name="hinhanh" type="file" id="hinhanh">

                        </div>
                        <div>
                            <h5 class="fs-14 mb-1">Hình ảnh mô tả của mặt hàng</h5>
                            <p class="text-muted">Thêm hình ảnh mô tả của sản phẩm.
                            </p>

                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="hinhanhs[]" type="file" multiple
                                        style="
                                cursor: pointer;
                                opacity: 0;   
                                position: absolute;
                                width: 100%;
                                height: 200px;">
                                </div>
                                <div class="dz-message
                                    needsclick"
                                    style="text-align: center;">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                    </div>
                                    <h5>Drop files here or click to upload.</h5>
                                </div>
                            </div>
                        </div>

                        <!-- end tab content -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm btn-save">Thêm</button>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Mặt hàng nổi bật</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="noibat" id="noibat_1"
                                    value="1" checked>
                                <label class="form-check-label" for="noibat_1">Nổi bật</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="noibat" id="noibat_2"
                                    value="0">
                                <label class="form-check-label" for="noibat_2">Không nổi bật</label>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Danh mục</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-2"> Chọn danh mục sản phẩm</p>
                        <select class="form-select" name="danhmuc_id" id="danhmuc_id">
                            {{-- @foreach ($listDanhMuc as $item)
                                <option value="{{ $item->id }}">{{ $item->tendanhmuc }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Thương hiệu</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-2"> Chọn thương hiệu sản phẩm</p>
                        <select class="form-select" name="thuonghieu_id" id="thuonghieu_id">
                            {{-- @foreach ($listThuongHieu as $item)
                                <option value="{{ $item->id }}">{{ $item->tenth }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <!-- end col -->
        </div>
        <!-- end row -->

    </form>
@endsection
