<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/userlogin.css')}}">
    <link rel="stylesheet" href="{{ asset('css/userreg.css')}}">
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/products.css')}}">
    <link rel="stylesheet" href="{{ asset('css/adminlog.css')}}">
    <link rel="stylesheet" href="{{ asset('css/category.css')}}">

    <!-- Scripts -->
   
</head>
<body>
   
        {{View::make('layouts.nav')}}
        <main class="py-4">
            @yield('content')
        </main>
        {{View::make('layouts.footer')}}
</body>
</html>
