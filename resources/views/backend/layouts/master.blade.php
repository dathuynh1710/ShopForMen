
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/socialv.css?v=4.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome-line-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">  
</head>
<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        {{-- Sidebar --}}
        @include('backend.layouts.partials.sidebar')
        {{-- Header (Top navbar) --}}
        @include('backend.layouts.partials.header')   

        {{-- <div class="right-sidebar-mini right-sidebar">
            <div class="right-sidebar-panel p-0">
                <div class="card shadow-none">
                    <div class="card-body p-0">
                        <div class="media-height p-3" data-scrollbar="init">
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Anna Sthesia</h6>
                                <p class="mb-0">Just Now</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Paul Molive</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Anna Mull</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Paige Turner</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Bob Frapples</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Barb Ackue</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-online">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Greta Life</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-away">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Ira Membrit</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="iq-profile-avatar status-away">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Pete Sariya</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="iq-profile-avatar">
                                <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">Monty Carlo</h6>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                        </div>
                        <div class="right-sidebar-toggle bg-primary text-white mt-3">
                        <i class="ri-arrow-left-line side-left-icon"></i>
                        <i class="ri-arrow-right-line side-right-icon"><span class="ms-3 d-inline-block">Close Menu</span></i>
                        </div>
                    </div>
                </div>
            </div>
            </div>        --}}
        <div id="content-page" class="content-page">
            <div class="container">
                <div class="row">
                        @yield('main-content')
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <!-- Footer -->
    @include('backend.layouts.partials.footer')
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/libs.min.js') }}"></script>
    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <!-- masonry JavaScript --> 
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/enchanter.js') }}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/charts/weather-chart.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/lottie.js') }}"></script>
    

    <!-- offcanvas start -->

    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="d-flex flex-wrap align-items-center">
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/08.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Facebook</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/09.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Twitter</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/10.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Instagram</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/11.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>Google Plus</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/13.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>In</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="{{ asset('assets/images/icon/12.png') }}" class="img-fluid rounded mb-2" alt="">
                    <h6>YouTube</h6>
                </div>
            </div>
        </div>
    </div>
</body>
</html>