@extends('clients/layouts/master')
@section('title', 'About')

@section('content')
    <main class="main single-page">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> About us
                </div>
            </div>
        </div>
        <section class="section-padding">
            <div class="container pt-25">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Về Chúng Tôi</h6>
                        <h1 class="font-heading mb-30">
                            Xây Dựng Nơi Truy Cập Mọi Thông Tin Bạn Cần
                        </h1>
                        <p>Chúng tôi luôn cam kết mang lại giá trị tốt nhất cho khách hàng thông qua các sản phẩm và dịch vụ
                            chất lượng cao.</p>
                        <p>Với đội ngũ chuyên nghiệp và sáng tạo, chúng tôi luôn nỗ lực không ngừng để đáp ứng nhu cầu của
                            khách hàng và phát triển bền vững.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="fassets/imgs/page/about-1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="section-padding">
            <div class="container pt-25">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">Một vài lời nhận xét
                        </h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">Khách hàng của chúng tôi<br> nói gì về dịch vụ?
                        </h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">Chúng tôi tự hào nhận được sự tin tưởng và
                            đánh giá cao từ khách hàng và đối tác.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted"
                                    src="fassets/imgs/page/avatar-1.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    H. Thành Đạt
                                </h5>
                                <p class="font-sm text-grey-5">Công ty Vinfast VN</p>
                                <p class="text-grey-3">"Dịch vụ tuyệt vời, đội ngũ hỗ trợ nhiệt tình và rất chuyên nghiệp.
                                    Tôi rất hài lòng!"</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted"
                                    src="fassets/imgs/page/avatar-2.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    N. Tiến Khoa
                                </h5>
                                <p class="font-sm text-grey-5">Công ty F88</p>
                                <p class="text-grey-3">"Dịch vụ của các bạn rất đáng tin cậy. Tôi chắc chắn sẽ giới thiệu
                                    cho bạn bè và đối tác."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted"
                                    src="fassets/imgs/page/avatar-3.jpg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    T. Duy Đăng
                                </h5>
                                <p class="font-sm text-grey-5">Công ty Gundam số 1 Server</p>
                                <p class="text-grey-3">"Tôi ấn tượng với sự chuyên nghiệp và chất lượng sản phẩm
                                    mà các bạn cung cấp."</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section class="section-padding">
            <div class="container pb-25">
                <h3 class="section-title mb-20 wow fadeIn animated text-center">Khách hàng <span>Nổi bật </span> </h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="fassets/imgs/banner/brand-1.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="fassets/imgs/banner/brand-2.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="fassets/imgs/banner/brand-3.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="fassets/imgs/banner/brand-4.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="fassets/imgs/banner/brand-5.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="fassets/imgs/banner/brand-6.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="fassets/imgs/banner/brand-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
