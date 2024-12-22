@extends('clients/layouts/master')
@section('title', 'Sign Up')
@section('content')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Register
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Create an Account</h3>
                                        </div>
                                        <form action="{{ route('postdangky') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required name="hoten" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" required name="sodienthoai" placeholder="Phone"
                                                    pattern="^(0[3-9]\d{8}|(\+84)[3-9]\d{8})$">
                                            </div>
                                            <div class="form-group">
                                                <input required type="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input required type="password" placeholder="Confirm password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="exampleCheckbox12" value="">
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>I
                                                                agree to terms &amp; Policy.</span></label>
                                                    </div>
                                                </div>
                                                <a href="#!"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean
                                                    more</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up"
                                                    name="login">Submit &amp; Register</button>
                                            </div>
                                        </form>
                                        <div class="text-muted text-center">Already have an account? <a
                                                href="{{ route('user.dangnhap') }}">Sign
                                                in now</a></div>
                                    </div>
                                </div>
                            </div>
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
