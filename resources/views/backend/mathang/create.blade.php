@extends('backend/layouts/master')

@section('title')
    Thêm mới mặt hàng
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Thêm mới mặt hàng</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.mathang.index') }}">Danh sách</a>
                        </li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Form nhập liệu - START -->
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Form nhập liệu</h4>
        </div>
        <div class="card-body">
            <!-- DIV hiển thị thông báo lỗi start -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- DIV hiển thị thông báo lỗi end -->
            <form name="frmCreate" id="frmCreate" method="post" enctype="multipart/form-data"
                action="{{ route('backend.mathang.store') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label mt-3" for="tenmathang">Tên mặt hàng</label>
                    <input type="text" class="form-control" name="tenmathang" id="tenmathang" value=""
                        placeholder="Tên mặt hàng">
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label mt-3" for="giagoc">Giá gốc</label>
                            <input type="text" class="form-control" name="giagoc" id="giagoc" value=""
                                placeholder="Giá gốc">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label mt-3" for="giaban">Giá bán</label>
                            <input type="text" class="form-control" name="giaban" id="giaban" value=""
                                placeholder="Giá bán">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label mt-3" for="soluongton">Số lượng tồn</label>
                            <input type="text" class="form-control" name="soluongton" id="soluongton" value=""
                                placeholder="Số lượng tồn">
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label class="form-label mt-3" for="noibat">Có phải sản phẩm nổi bật không?</label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="noibat" id="noibat_1" value="1"
                                    checked>
                                <label class="form-check-label" for="noibat_1">Nổi bật</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="noibat" id="noibat_2" value="0">
                                <label class="form-check-label" for="noibat_2">Không nổi bật</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hinhanh" class="form-label custom-file-input mt-3">Hình ảnh</label>
                    <input class="form-control" name="hinhanh[]" type="file" id="hinhanh" multiple>
                </div>

                <div>
                    <label class="form-label mt-3" for="danhmuc_id">Danh mục</label>
                    <select name="danhmuc_id" id="danhmuc_id" class="form-control">
                        @foreach ($listDanhMuc as $item)
                            <option value="{{ $item->id }}">{{ $item->tendanhmuc }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="form-label mt-3" for="thuonghieu_id">Thương hiệu</label>
                    <select name="thuonghieu_id" id="thuonghieu_id" class="form-control">
                        @foreach ($listThuongHieu as $item)
                            <option value="{{ $item->id }}">{{ $item->tenth }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label mt-3" for="mota">Mô tả</label>
                    <textarea name="mota" class="form-control " id="mota" placeholder="Nhập mô tả"></textarea>
                </div>
                <div class="mt-3">
                    <a href="{{ route('backend.mathang.index') }}" class="btn btn-outline-secondary ">Quay về danh
                        sách</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Form nhập liệu - END -->
@endsection

@section('custom-js')
    <script>
        $(function() {
            $('#frmCreate').validate({
                rules: {
                    madanhmuc: {
                        required: true,
                        minlength: 3,
                        maxlength: 50
                    },
                },
                messages: {
                    madanhmuc: {
                        required: 'Vui lòng nhập mã danh mục',
                        minlength: 'Mã danh mục phải từ 3 ký tự trở lên',
                        maxlength: 'Mã danh mục có ít hơn 50 ký tự'
                    },
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Thêm class `invalid-feedback` cho field đang có lỗi
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }
                    // Thêm icon "Kiểm tra không Hợp lệ"
                    if (!element.next("span")[0]) {
                        $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
                            .insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Thêm icon "Kiểm tra Hợp lệ"
                    if (!$(element).next("span")[0]) {
                        $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
                            .insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                }

            });
        })
    </script>
@endsection
