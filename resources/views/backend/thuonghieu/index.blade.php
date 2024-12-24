@extends('backend.layouts.master')

@section('title')
    Danh sách thương hiệu
@endsection

@section('main-content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Quản lý thương hiệu</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý thương hiệu</li>
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
                                <h5 class="card-title mb-0">Danh sách thương hiệu</h5>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex gap-1 flex-wrap">
                                    <a class="btn btn-success add-btn" href="{{ route('backend.thuonghieu.create') }}"><i
                                            class="ri-add-line align-bottom me-1"></i>Thêm thương hiệu
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border border-dashed border-end-0 border-start-0">
                        <form method="GET" action="{{ route('backend.thuonghieu.search') }}">
                            <div class="row g-3">
                                <div class="col-xxl-5 col-sm-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" name="search"
                                            placeholder="Nhập mã thương hiệu, tên thương hiệu...">
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
                                            <th>Mã thương hiệu</th>
                                            <th>Tên thương hiệu</th>
                                            <th>Mô tả</th>
                                            <th>Hình ảnh</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($dsThuongHieu as $th)
                                            <tr>
                                                <td class="id">{{ $th->math }}</td>
                                                <td class="customer_name">{{ $th->tenth }}</td>
                                                <td class="product_name"
                                                    style="max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    {{ $th->mota }}
                                                </td>
                                                <td>
                                                    <div>
                                                        <img src="/storage/uploads/thuonghieu/img/{{ $th->hinhanh }}"
                                                            class="img-fluid"
                                                            style="max-width: 50px; max-height: 50px; object-fit: cover;"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">

                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                            <a href="{{ route('backend.thuonghieu.edit', ['id' => $th->id]) }}"
                                                                class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-pencil-fill fs-20"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                            <a style="cursor: pointer;"
                                                                class=" text-danger d-inline-block remove-item-btn btn-delete"
                                                                data-id="{{ $th->id }}"
                                                                data-delete-url="{{ route('backend.thuonghieu.destroy', ['id' => $th->id]) }}">
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
                            {{-- <div class="d-flex justify-content-end">
                                {{ $dsThuongHieu->links() }}
                            </div> --}}


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
                                    btnDelete.closest('tr').remove();
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
