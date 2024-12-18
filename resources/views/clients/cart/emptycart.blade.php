@extends('clients/layouts/master')
@section('title', 'Giỏ hàng rỗng')

@section('content')

    <div class="container py-5 mb-lg-3">
        <div class="row justify-content-center pt-lg-4 text-center">
            <div class="col-lg-7 col-md-8 col-sm-9">
                <img class="d-block mx-auto mb-5" src="{{ asset('fassets/imgs/cart/bag.svg') }}" width="340" />
                <h1 class="h3 mt-3">Giỏ hàng rỗng</h1>
                <h3 class="h5 fw-normal mb-4">
                    Quay lại cửa hàng để tìm nhiều sản phẩm thú vị trên cửa hàng của chúng tôi.
                </h3>
            </div>
            <div class="col-12 text-center mt-3">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Khám phá ngay</a>
            </div>
        </div>
    </div>

@endsection
