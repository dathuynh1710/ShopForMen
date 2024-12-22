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
                                        <form method="post" action="{{ route('login') }}" class="needs-validation"
                                            novalidate>
                                            @csrf
                                            @if (session('warning'))
                                                <div class="alert alert-danger fs-base" role="alert">
                                                    <i class="ci-close-circle me-2"></i>{{ session('warning') }}
                                                </div>
                                            @endif
                                            @if ($errors->has('email'))
                                                <div class="alert alert-danger fs-base" role="alert">
                                                    <i class="ci-close-circle me-2"></i>{{ $errors->first('email') }}
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <input class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                    type="text" required name="email" id="email"
                                                    placeholder="Your Email" value="{{ old('email') }}">
                                            </div>
                                            <div class="form-group">
                                                <input required type="password" name="password" id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="Password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember"><span>Remember
                                                                me</span></label>
                                                    </div>
                                                </div>
                                                @if (Route::has('password.request'))
                                                    <a class="text-muted" href="#">Forgot password?</a>
                                                @endif

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
                                <img src="{{ asset('fassets/imgs/login.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
