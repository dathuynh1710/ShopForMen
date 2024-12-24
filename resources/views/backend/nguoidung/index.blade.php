@extends('backend.layouts.master')

@section('title')
    Danh sách người dùng
@endsection

@section('main-content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Quản lý Người dùng</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Quản lý người dùng</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="customerList">
                    <div class="card-header border-bottom-dashed">
                        <div class="row g-4 align-items-center">
                            <div class="col-sm">
                                <div>
                                    <h5 class="card-title mb-0">Danh sách người dùng</h5>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <div class="d-flex flex-wrap align-items-start gap-2">
                                    <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i
                                            class="ri-delete-bin-2-line"></i></button>
                                    <button type="button" class="btn btn-success add-btn" id="create-btn">
                                        <i class="ri-add-line align-bottom me-1"></i> Thêm
                                    </button>

                                    <script>
                                        document.getElementById('create-btn').addEventListener('click', function() {
                                            window.location.href = "{{ route('backend.nguoidung.create') }}";
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-card mb-1">
                                <table class="table align-middle" id="customerTable">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th data-sort="customer_name">Họ tên</th>
                                            <th data-sort="email">Email</th>
                                            <th data-sort="phone">Số ĐT</th>
                                            <th data-sort="status">Trạng thái</th>
                                            <th data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($dsNguoiDung as $nd)
                                            <tr>
                                                <td data-column-id="product">
                                                    <span>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-sm bg-light rounded p-1">
                                                                    <img src="/storage/uploads/nguoidung/img/{{ $nd->hinhanh }}"
                                                                        alt="" class="img-fluid d-block" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h5 class="fs-15 mb-1">
                                                                    <a href="#!" class="text-body">{{ $nd->hoten }}
                                                                    </a>
                                                                </h5>
                                                                <p class="text-muted mb-0">Loại :
                                                                    @if ($nd->loai == 0)
                                                                        <span>Admin</span>
                                                                    @elseif ($nd->loai == 1)
                                                                        <span>Staff</span>
                                                                    @else
                                                                        <span>User</span>
                                                                    @endif
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td class="email">{{ $nd->email }}</td>
                                                <td class="phone">{{ $nd->sodienthoai }}</td>
                                                <td>
                                                    <form action="{{ route('backend.nguoidung.doitrangthai', $nd->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <button style=" all: unset; cursor: pointer;  " type="submit">
                                                            @if ($nd->trangthai == 1)
                                                                <span
                                                                    class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                                            @else
                                                                <span
                                                                    class="badge bg-danger-subtle text-danger text-uppercase">Block</span>
                                                            @endif
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        {{-- btn-edit --}}
                                                        <li class="list-inline-item edit" data-bs-placement="top"
                                                            title="Edit">
                                                            <a href="{{ route('backend.nguoidung.edit', ['id' => $nd->id]) }}"
                                                                class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-pencil-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                        {{-- btn-remove --}}
                                                        <li class="list-inline-item"title="Remove">
                                                            <a style="cursor: pointer;"
                                                                class="text-danger d-inline-block remove-item-btn btn-delete"
                                                                data-id="{{ $nd->id }}"
                                                                data-delete-url="{{ route('backend.nguoidung.destroy', ['id' => $nd->id]) }}">
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
                            <div class="d-flex justify-content-end">
                                {{-- <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div> --}}
                                {{ $dsNguoiDung->links() }}
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
