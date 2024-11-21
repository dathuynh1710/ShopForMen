@extends('backend.layouts.master')

@section('title')
    Danh sách danh mục
@endsection

@section('main-content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Quản lý danh mục</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý danh mục</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="orderList">
                    <div class="card-header border-0">
                        <div class="row align-items-center gy-3">
                            <div class="col-sm">
                                <h5 class="card-title mb-0">Danh sách danh mục</h5>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex gap-1 flex-wrap">
                                    <a class="btn btn-success add-btn" href="{{ route('backend.danhmuc.create') }}"><i
                                            class="ri-add-line align-bottom me-1"></i>Thêm danh mục
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border border-dashed border-end-0 border-start-0">
                        <form>
                            <div class="row g-3">
                                <div class="col-xxl-5 col-sm-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search"
                                            placeholder="Nhập tên danh mục...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                            </ul>
                            <div class="table-responsive table-card mb-1">
                                <table class="table table-nowrap align-middle" id="orderTable">
                                    <thead class="text-muted table-light">
                                        <tr class="text-uppercase">
                                            <th>Mã danh mục</th>
                                            <th>Tên danh mục</th>
                                            <th>Mô tả</th>
                                            <th>Hình ảnh</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($dsDanhMuc as $dm)
                                            <tr>
                                                <td class="id">{{ $dm->madanhmuc }}</td>
                                                <td class="customer_name">{{ $dm->tendanhmuc }}</td>
                                                <td class="product_name"
                                                    style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    {{ $dm->mota }}
                                                </td>
                                                <td>
                                                    <div>
                                                        <img src="/storage/uploads/danhmuc/img/{{ $dm->hinhanh }}"
                                                            class="img-fluid"
                                                            style="max-width: 50px; max-height: 50px; object-fit: cover;"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                            <a href="{{ route('backend.danhmuc.edit', ['id' => $dm->id]) }}"
                                                                class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-pencil-fill fs-20"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                            <a style="cursor: pointer;"
                                                                class=" text-danger d-inline-block remove-item-btn btn-delete"
                                                                data-id="{{ $dm->id }}"
                                                                data-delete-url="{{ route('backend.danhmuc.destroy', ['id' => $dm->id]) }}">
                                                                <i class="ri-delete-bin-5-fill fs-20"></i>
                                                            </a>

                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        $(function() {
            // nhờ jquery tìm phần tử đang áp dụng class btn-delete
            // ->yêu cầu những phần tử tìm được làm 1 cái j đó (action)
            $('.btn-delete').on('click', function() { // đăng ký sự kiện
                var id = $(this).attr("data-id");
                var deleteUrl = $(this).attr("data-delete-url");
                var btnDelete = $(this);
                Swal.fire({
                    title: "Bạn có chắc chắn muốn xóa không?",
                    text: "Bạn sẽ không thể khôi phục dữ liệu khi xóa!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD0000",
                    cancelButtonColor: "#C0C0C0	",
                    confirmButtonText: "Đồng ý",
                    cancelButtonText: "Hủy bỏ"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Nho JS goi request den sever
                        var postData = {
                            '_token': '{{ csrf_token() }}',
                            '_method': 'DELETE',
                            'id': id
                        };
                        $.post(deleteUrl, postData)
                            .done(function() {
                                Swal.fire(
                                    'Đã xóa!',
                                    'Dữ liệu đã được xóa thành công.',
                                    'success'
                                ).then(() => {
                                    btnDelete.parent().parent().remove();
                                });
                            })
                            .fail(function(e) {
                                Swal.fire(
                                    'Lỗi!',
                                    'Có lỗi xảy ra trong quá trình xóa.',
                                    'error'
                                );
                            });
                    }
                });
            });
        });
    </script>
@endsection
