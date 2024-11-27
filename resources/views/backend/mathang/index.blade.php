@extends('backend.layouts.master')

@section('title')
    Danh sách mặt hàng
@endsection

@section('main-content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Quản lý Mặt hàng</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý mặt hàng</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row g-4">
                        <div class="col-sm-auto">
                            <div>
                                <a href="{{ route('backend.mathang.create') }}" class="btn btn-success"
                                    id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" id="searchProductList"
                                        placeholder="Search Products...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all"
                                        role="tab">
                                        Tất cả
                                        <span
                                            class="badge bg-danger-subtle text-danger align-middle rounded-pill ms-1">{{ $totalMH }}
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published"
                                        role="tab">
                                        Nổi bật <span
                                            class="badge text-bg-primary bg-primary align-middle rounded-pill ms-1">{{ $soMHNoiBat }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="productnav-all" role="tabpanel">
                            <div id="table-product-list-all" class="table-card gridjs-border-none">
                                <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                    <div class="gridjs-wrapper" style="height: auto">
                                        <table role="grid" class="gridjs-table" style="height: auto">
                                            <thead class="gridjs-thead">
                                                <tr class="gridjs-tr">
                                                    <th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 360px">
                                                        <div class="gridjs-th-content">Tên mặt hàng</div>
                                                    </th>
                                                    <th data-column-id="stock" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 150px">
                                                        <div class="gridjs-th-content">Số lượng</div>
                                                    </th>
                                                    <th data-column-id="price" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 101px">
                                                        <div class="gridjs-th-content">Giá gốc </div>
                                                    </th>
                                                    <th data-column-id="orders" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 84px">
                                                        <div class="gridjs-th-content">Giá bán</div>
                                                    </th>
                                                    <th data-column-id="rating" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 105px">
                                                        <div class="gridjs-th-content">Nổi bật</div>
                                                    </th>
                                                    <th data-column-id="published"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 150px">
                                                        <div class="gridjs-th-content">Thương hiệu</div>
                                                    </th>
                                                    <th data-column-id="action" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 100px">
                                                        <div class="gridjs-th-content">Action</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="gridjs-tbody">
                                                @foreach ($dsMatHang as $mh)
                                                    <tr class="gridjs-tr">
                                                        <td data-column-id="product" class="gridjs-td">
                                                            <span>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <div class="avatar-sm bg-light rounded p-1">
                                                                            <img src="/storage/uploads/mathang/img/{{ $mh->hinhanh }}"
                                                                                alt=""
                                                                                class="img-fluid d-block" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h5 class="fs-15 mb-1">
                                                                            <a href="#!"
                                                                                class="text-body">{{ $mh->tenmathang }}
                                                                            </a>
                                                                        </h5>
                                                                        <p class="text-muted mb-0">Danh mục : <span
                                                                                class="fw-medium">{{ $mh->danhmuc->tendanhmuc }}</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </td>
                                                        <td data-column-id="stock" class="gridjs-td">
                                                            {{ $mh->soluongton }}</td>
                                                        <td data-column-id="price" class="gridjs-td">
                                                            <span>{{ $mh->giagoc }}</span>
                                                        </td>
                                                        <td data-column-id="orders" class="gridjs-td">
                                                            {{ $mh->giaban }}</td>
                                                        <td data-column-id="rating" class="gridjs-td">
                                                            @if ($mh->noibat == 1)
                                                                <span class="badge text-bg-primary">Có</span>
                                                            @else
                                                                <span
                                                                    class="badge bg-primary-subtle text-primary">Không</span>
                                                            @endif
                                                        </td>
                                                        <td data-column-id="published" class="gridjs-td">
                                                            <span>{{ $mh->thuonghieu->tenth }}</span>
                                                        </td>
                                                        <td data-column-id="action" class="gridjs-td">
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="View">
                                                                    <a href="{{ route('backend.mathang.show', $mh->id) }}"
                                                                        class="text-primary d-inline-block">
                                                                        <i class="ri-eye-fill fs-16"></i>
                                                                    </a>
                                                                </li>


                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Edit">
                                                                    <a href="{{ route('backend.mathang.edit', ['id' => $mh->id]) }} "
                                                                        class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a style="cursor: pointer;"
                                                                        class="text-danger
                                                                        d-inline-block remove-item-btn btn-delete"
                                                                        data-bs-toggle="modal"
                                                                        data-id="{{ $mh->id }}"
                                                                        data-delete-url="{{ route('backend.mathang.destroy', ['id' => $mh->id]) }}">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="productnav-published" role="tabpanel">
                            <div id="table-product-list-published" class="table-card gridjs-border-none">
                                <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                    <div class="gridjs-wrapper" style="height: auto">
                                        <table role="grid" class="gridjs-table" style="height: auto">
                                            <thead class="gridjs-thead">
                                                <tr class="gridjs-tr">
                                                    <th data-column-id="product"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 360px">
                                                        <div class="gridjs-th-content">Tên mặt hàng</div>
                                                    </th>
                                                    <th data-column-id="stock" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 150px">
                                                        <div class="gridjs-th-content">Số lượng</div>
                                                    </th>
                                                    <th data-column-id="price" class="gridjs-th gridjs-th-sort text-muted"
                                                        tabindex="0" style="width: 101px">
                                                        <div class="gridjs-th-content">Giá gốc </div>
                                                    </th>
                                                    <th data-column-id="orders"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 84px">
                                                        <div class="gridjs-th-content">Giá bán</div>
                                                    </th>
                                                    <th data-column-id="rating"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 105px">
                                                        <div class="gridjs-th-content">Nổi bật</div>
                                                    </th>
                                                    <th data-column-id="published"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 150px">
                                                        <div class="gridjs-th-content">Thương hiệu</div>
                                                    </th>
                                                    <th data-column-id="action"
                                                        class="gridjs-th gridjs-th-sort text-muted" tabindex="0"
                                                        style="width: 100px">
                                                        <div class="gridjs-th-content">Action</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="gridjs-tbody">
                                                @foreach ($dsMatHang as $mh)
                                                    @if ($mh->noibat == 1)
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="product" class="gridjs-td">
                                                                <span>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="avatar-sm bg-light rounded p-1">
                                                                                <!-- Hiển thị ảnh chính từ thư mục public/storage -->
                                                                                <img src="{{ asset('storage/uploads/mathang/img/' . $mh->hinhanh) }}"
                                                                                    alt=""
                                                                                    class="img-fluid d-block" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="fs-15 mb-1">
                                                                                <a href="#!"
                                                                                    class="text-body">{{ $mh->tenmathang }}</a>
                                                                            </h5>
                                                                            <p class="text-muted mb-0">Danh mục :
                                                                                <span
                                                                                    class="fw-medium">{{ $mh->danhmuc->tendanhmuc }}</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </td>

                                                            <td data-column-id="stock" class="gridjs-td">
                                                                {{ $mh->soluongton }}</td>
                                                            <td data-column-id="price" class="gridjs-td">
                                                                <span>{{ $mh->giagoc }}</span>
                                                            </td>
                                                            <td data-column-id="orders" class="gridjs-td">
                                                                {{ $mh->giaban }}</td>
                                                            <td data-column-id="rating" class="gridjs-td">
                                                                @if ($mh->noibat == 1)
                                                                    <span class="badge text-bg-primary">Có</span>
                                                                @else
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Không</span>
                                                                @endif
                                                            </td>
                                                            <td data-column-id="published" class="gridjs-td">
                                                                <span>{{ $mh->thuonghieu->tenth }}</span>
                                                            </td>
                                                            <td data-column-id="action" class="gridjs-td">
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                        data-bs-trigger="hover" data-bs-placement="top"
                                                                        title="View">
                                                                        <a href="{{ route('backend.mathang.show', $mh->id) }}"
                                                                            class="text-primary d-inline-block">
                                                                            <i class="ri-eye-fill fs-16"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item edit"
                                                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                        data-bs-placement="top" title="Edit">
                                                                        <a href="#showModal" data-bs-toggle="modal"
                                                                            class="text-primary d-inline-block edit-item-btn">
                                                                            <i class="ri-pencil-fill fs-16"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                        data-bs-trigger="hover" data-bs-placement="top"
                                                                        title="Remove">
                                                                        <a style="cursor: pointer;"
                                                                            class="text-danger
                                                                        d-inline-block remove-item-btn "
                                                                            data-bs-toggle="modal">
                                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $dsMatHang->withQueryString()->links('pagination::bootstrap-5') !!}
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
                                console.error('Lỗi chi tiết:', e); // In chi tiết lỗi ra console
                                Swal.fire(
                                    'Lỗi!',
                                    'Có lỗi xảy ra trong quá trình xóa: ' + (e.responseJSON
                                        ?.message || 'Không xác định.'),
                                    'error'
                                );
                            });
                    }
                });
            });
        });
    </script>
@endsection
