@extends('clients/layouts/master')
@section('title', 'Login')
@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Login
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-5">
                                <div
                                    class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Login</h3>
                                        </div>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" required="" name="email"
                                                    placeholder="Your Email">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password"
                                                    placeholder="Password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                                            id="exampleCheckbox1" value="">
                                                        <label class="form-check-label"
                                                            for="exampleCheckbox1"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="#">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                    name="login">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-6">
                                <img src="assets/imgs/login.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
<h2 class="h4 mb-1">Đăng nhập</h2>
<div class="py-3">
    <h3 class="d-inline-block align-middle fs-base fw-medium mb-2 me-2">Đăng nhập với:</h3>
    <div class="d-inline-block align-middle">
        <a class="btn-social bs-google me-2 mb-2" href="{{ route('google.login') }}" data-bs-toggle="tooltip"
            title="Đăng nhập với Google">
            <i class="ci-google"></i>
        </a>
        <a class="btn-social bs-facebook me-2 mb-2" href="#" data-bs-toggle="tooltip"
            title="Đăng nhập với Facebook">
            <i class="ci-facebook"></i>
        </a>
        <a class="btn-social bs-twitter me-2 mb-2" href="#" data-bs-toggle="tooltip"
            title="Đăng nhập với Twitter">
            <i class="ci-twitter"></i>
        </a>
    </div>
</div>

<form method="post" action="{{ route('login') }}" class="needs-validation" novalidate>
    @csrf
    @if (session('warning'))
        <div class="alert alert-danger fs-base" role="alert">
            <i class="ci-close-circle me-2"></i>{{ session('warning') }}
        </div>
    @endif
    @if ($errors->has('email') || $errors->has('username'))
        <div class="alert alert-danger fs-base" role="alert">
            <i
                class="ci-close-circle me-2"></i>{{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}
        </div>
    @endif
    <div class="input-group mb-3">
        <i class="ci-user position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
        <input type="text"
            class="form-control rounded-start {{ $errors->has('email') || $errors->has('username') ? 'is-invalid' : '' }}"
            id="email" name="email" value="{{ old('email') }}" placeholder="Email, Tên đăng nhập hoặc Điện thoại"
            required />
    </div>
    <div class="input-group mb-3">
        <i class="ci-locked position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
        <div class="password-toggle w-100">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" placeholder="Mật khẩu" required />
            <label class="password-toggle-btn" aria-label="Hiện/Ẩn mật khẩu">
                <input class="password-toggle-check" type="checkbox" />
                <span class="password-toggle-indicator"></span>
            </label>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-between">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }} />
            <label class="form-check-label" for="remember">Duy trì đăng nhập</label>
        </div>
        @if (Route::has('register'))
            <a class="nav-link-inline fs-sm" href="{{ route('user.dangky') }}">Chưa có tài khoản?</a>
        @endif
        @if (Route::has('password.request'))
            <a class="nav-link-inline fs-sm" href="#">Quên mật khẩu?</a>
        @endif
    </div>
    <hr class="mt-4">
    <div class="text-end pt-4">
        <button class="btn btn-primary" type="submit"><i class="ci-sign-in me-2 ms-n21"></i>Đăng nhập</button>
    </div>
</form>
