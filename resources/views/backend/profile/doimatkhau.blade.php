@extends('backend.layouts.master')
@section('title')
    Đổi mật khẩu
@endsection
@section('main-content')
    <div class="card-body">
        <form name="account_edit_form" method="post" action="{{ route('backend.nguoidung.capnhatpassword') }}">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row gy-4">
                <div class="col-xxl-3 col-md-6">
                    <div>
                        <label for="exampleInputpassword" class="form-label">Mật khẩu cũ</label>
                        <input name="old_password" id="old_password" type="password" class="form-control"
                            value="{{ old('old_password') }}">
                    </div>
                    <div>
                        <label for="exampleInputpassword" class="form-label">Mật khẩu mới</label>
                        <input name="new_password" id="new_password" type="password" class="form-control"
                            value="{{ old('new_password') }}">
                    </div>
                    <div>
                        <label for="exampleInputpassword" class="form-label">Xác nhận mật khẩu </label>
                        <input name="new_password_confirmation" id="new_password_confirmation" type="password"
                            class="form-control" value="{{ old('new_password_confirmation') }}">
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('backend.nguoidung.profile') }}" class="btn btn-outline-secondary ">Quay về
                        hồ sơ
                    </a>
                    <button type="submit" class="btn btn-primary btn-save">Lưu</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('custom-js')
    <script>
        $(function() {
            $('.btn-save').on('click', function(e) {
                $('form[name="account_edit_form"]').submit();
                Swal.fire(
                    'Đã lưu!',
                    'Đổi mật khẩu thành công!!',
                    'success',
                );
            });
        });
    </script>
@endsection
