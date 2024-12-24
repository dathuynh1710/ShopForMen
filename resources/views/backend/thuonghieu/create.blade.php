@extends('backend/layouts/master')

@section('title')
    Thêm mới thương hiệu
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                <h4 class="mb-sm-0">Thêm mới thương hiệu</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.thuonghieu.index') }}">Danh sách</a>
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
                action="{{ route('backend.thuonghieu.store') }}">
                @csrf
                <div class="form-group ">
                    <label class="form-label" for="math">Mã thương hiệu </label>
                    <input type="text" class="form-control" name="math" id="math" value="{{ old('math') }}"
                        placeholder="Mã thương hiệu">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="tenth">Tên thương hiệu</label>
                    <input type="text" class="form-control" name="tenth" id="tenth" value=""
                        placeholder="Tên thương hiệu">
                </div>
                <div class="form-group">
                    <label class="form-label mt-3" for="mota">Mô tả</label>
                    <textarea name="mota" class="form-control " id="mota" placeholder="Nhập mô tả"></textarea>
                </div>
                <div class="form-group">
                    <label for="hinhanh" class="form-label custom-file-input mt-3">Hình ảnh</label>
                    <input class="form-control" name="hinhanh" type="file" id="hinhanh">
                </div>
                <div class="mt-3">
                    <a href="{{ route('backend.thuonghieu.index') }}" class="btn btn-outline-secondary ">Quay về danh
                        sách</a>
                    <button type="submit" class="btn btn-primary btn-save">Lưu</button>
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
                    math: {
                        required: true,
                        minlength: 2,
                        maxlength: 50
                    },
                },
                messages: {
                    math: {
                        required: 'Vui lòng nhập mã thương hiệu',
                        minlength: 'Mã thương hiệu phải từ 2 ký tự trở lên',
                        maxlength: 'Mã thương hiệu có ít hơn 50 ký tự'
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

            // Save button click handler
            $('.btn-save').on('click', function(e) {
                e.preventDefault();
                const math = $('#math').val();
                const tenth = $('#tenth').val();
                $('form[name="frmCreate"]').submit();
                Swal.fire(
                    'Đã lưu!',
                    'Dữ liệu đã được thêm mới thành công.',
                    'success'
                );
            });
        })
    </script>
@endsection
