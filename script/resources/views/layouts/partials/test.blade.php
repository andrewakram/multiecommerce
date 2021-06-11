<!doctype html>
@if(app()->getLocale() == 'ar')
    <html dir="rtl" direction="rtl" lang="ar">
    @else
        <html lang="en">
        @endif
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>{{ config('app.name', 'Laravel') }}</title>
            @if(app()->getLocale() == 'ar')
                <link rel="stylesheet" href="{{ asset('assets/frontend/css/ar-bootstrap.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/fontawsome/ar-all.min.css') }}">
                {{--                <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800" rel="stylesheet">--}}
                <link rel="stylesheet" href="{{ asset('assets/css/ar-style.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/font/ar-flaticon.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/ar-components.css') }}">
                <link href="https://fonts.googleapis.com/css2?family=Tajawal" rel="stylesheet">
            @else
                <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/fontawsome/all.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/font/flaticon.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
            @endif
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon.ico') }}"/>
            @stack('style')
        </head>

        <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="navbar-bg"></div>
            @include('layouts/partials/header')
            @include('layouts/partials/sidebar')
            <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        @yield('head')
                        <div class="section-body">
                        </div>
                    </section>
                    @yield('content')
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; {{ date('Y') }}
                        <div class="bullet"></div>
                        Powered By <a href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
                    </div>

                </footer>
            </div>
        </div>
        <!-- General JS Scripts -->
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset('assets/js/moment.min.js')}}"></script>
        <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
        @stack('js')
        <script src="{{ asset('assets/js/stisla.js') }}"></script>
        <!-- Template JS File -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        </body>
        </html>
