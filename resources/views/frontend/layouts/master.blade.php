<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!---- title -->
    <title>ShopForMen</title>

    <!---- customer css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!---- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    @include('frontend/layouts/partials/header')

    @yield('content')

    <!---- footer section start -->
    @include('frontend/layouts/partials/footer')

    <!---- customer js file -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
