<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    {{-- <title>ShopForMen</title> --}}
    <title>@yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fassets/fonts/fontawesome-free-6.7.2/css/all.min.css') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fassets/imgs/theme/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('fassets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('fassets/css/custom.css') }}">
</head>

<body>
    @include('clients/layouts/partials/header')

    @include('clients/layouts/partials/header-mobile')

    @yield('content')

    @include('clients/layouts/partials/footer')
    <!-- Vendor JS-->
    <script src="{{ asset('fassets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('fassets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('fassets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('fassets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('fassets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('fassets/js/main.js?v=3.3') }}"></script>
    <script src="{{ asset('fassets/js/shop.js?v=3.3') }}"></script>
    @yield('custom-js')
</body>

</html>
