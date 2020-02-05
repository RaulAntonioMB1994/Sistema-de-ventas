<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../assets/img/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Sistema de ventas')</title>

    @include('layouts.css')

</head>

<body>
    <div id="app" class="wrapper">

        <div class="sidebar" data-color="white" data-active-color="danger">
            @include('layouts.sidebar')
        </div>

        <div class="main-panel">

            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                @include('layouts.navbar')
            </nav>

            @yield('content')

            <footer class="footer footer-black  footer-white">
                @include('layouts.footer')
            </footer>

        </div>

    </div>


    @include('layouts.js')

</body>

</html>