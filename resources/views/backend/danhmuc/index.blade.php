@extends('backend.layouts.master')

@section('title')
    Danh sách danh mục
@endsection

@section('main-content')
    <h1>Danh sách danh mục</h1>
    <a class="btn btn-primary" href="{{ route('backend.danhmuc.create') }}">Thêm mới</a>
    <table class="mt-3 table table-bordered">
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
        @foreach ($dsDanhMuc as $dm)
            <tr style="vertical-align: middle;">
                <td>{{ $dm->madanhmuc }}</td>
                <td>{{ $dm->tendanhmuc }}</td>
                <td style="max-width:200px;">{{ $dm->mota }}</td>
                <td class="mx-auto" style="max-width:200px;">
                    <div class="mx-auto"><img src="/storage/uploads/danhmuc/img/{{ $dm->hinhanh }}" class="img-fuild w-100  "
                            alt="">
                    </div>
                </td>
                <td>
                    <a href='#!' class='btn btn-info m-r-1em'>Read</a>
                    <a href="{{ route('backend.danhmuc.edit', ['id' => $dm->id]) }}" class="btn btn-primary m-r-1em">
                        Edit</a>
                    <button type="button" class=" btn btn-danger btn-delete" data-id="{{ $dm->id }}"
                        data-delete-url="{{ route('backend.danhmuc.destroy', ['id' => $dm->id]) }}"> Delete</button>
                </td>

            </tr>
        @endforeach
    </table>
    <div class="mt-4">{{ $dsDanhMuc->links('pagination::bootstrap-5') }}</div>
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
