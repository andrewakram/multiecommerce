<!DOCTYPE html>
@if(app()->getLocale() == 'ar')
    <html dir="rtl" direction="rtl" lang="ar">
    @else
        <html lang="en">
        @endif
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="Easy Cart">
            <meta name="keywords" content="Easy Cart">
            <meta property="og:title" content="Easy Cart" />
            <meta property="og:description" content="Easy Cart" />
            <meta property="og:keywords" content="Easy Cart" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
            {{-- generate seo info --}}
            {!! SEO::generate() !!}
            {!! JsonLdMulti::generate() !!}
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <!-- Favicon -->
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon.ico') }}"/>

            <!--
             Essential stylesheets
             =====================================-->
            @if(app()->getLocale() == 'ar')
                <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/bootstrap/ar-bootstrap.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/icofont/ar-icofont.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick.css') }}">
                <link rel="stylesheet"
                      href="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick-theme.css') }}">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
                <!-- Main Stylesheet -->
                <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/frontend/css/rtl.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/bootstrap/bootstrap.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/icofont/icofont.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick.css') }}">
                <link rel="stylesheet"
                      href="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick-theme.css') }}">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
                <!-- Main Stylesheet -->
                <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
        @endif
        <!--=====================================
         CSS LINK PART START
         =======================================-->
        {{ Helper::autoload_main_site_data() }}



        @stack('style')
        <!--=====================================
         CSS LINK PART END
         =======================================-->


        </head>
        <body id="top">
        <div id="cover">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!--=====================================
                     NAVBAR PART START
                     =======================================-->

        @if(Cache::has('marketing_tool'))
            @php
                $tools=Cache::get('marketing_tool');
                $tools=json_encode($tools);
                $tools=json_decode($tools ?? '');
            @endphp
            @isset($tools->fb_pixel_status)
                @if($tools->fb_pixel_status == 'on')
                    {!! facebook_pixel($tools->fb_pixel) !!}
                @endif
            @endisset

        @endif
        <header>
            @if(Cache::has('site_info'))
                @php
                    $site_info=Cache::get('site_info');
                @endphp
                <div class="header-top-bar">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <ul class="top-bar-info list-inline-item pl-0 mb-0">
                                    <li class="list-inline-item"><a href="mailto:{{ $site_info->email1 }}"><i
                                                class="icofont-support-faq mr-2"></i>{{ $site_info->email1 }}</a></li>
                                    <li class="list-inline-item"><i
                                            class="icofont-location-pin mr-2"></i>{{ $site_info->address }} </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                                    @if(Cache::has('active_languages'))
                                        @php
                                            $langs=Cache::get('active_languages');
                                        @endphp
                                        <form class="translate_form" action="{{ route('translate') }}">
                                            <select class="translate_option" name="local">
                                                @foreach($langs as $key=>$row)
                                                    <option value="{{ $key }}"
                                                            @if(Session::get('locale') == $key) selected @endif>{{ $row }}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <nav class="navbar navbar-expand-lg navigation  wow fadeIn" id="navbar">
                <div class="container">
                    <a class="navbar-brand wow swing" href="{{ url('/') }}">
                        <img src="{{ asset('uploads/logo.png') }}" alt="" class="img-fluid">
                    </a>

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarmain"
                            aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icofont-navigation-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarmain">
                        <ul class="navbar-nav mr-auto">
                            {{ Menu('header','nav-item dropdown','navbar-item','navbar-link','',true) }}
                        </ul>
                        <div class="lang">
                            @if(Cache::has('active_languages'))
                                @php
                                    $langs=Cache::get('active_languages');
                                @endphp
                                <form class="translate_form" action="{{ route('translate') }}">
                                    <select class="translate_option" name="local">
                                        @foreach($langs as $key=>$row)
                                            <option value="{{ $key }}"
                                                    @if(Session::get('locale') == $key) selected @endif>{{ $row }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </header>


        <!--=====================================
        NAVBAR PART END
        =======================================-->

        @yield('content')



        <!--=====================================
FOOTER PART START
=======================================-->

        <footer class="footer section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mr-auto col-sm-6">
                        <div class="widget mb-5 mb-lg-0 wow fadeIn" data-wow-delay="0.5s">
                            <div class="logo mb-4">

                                <a href="{{ url('/') }}"><img class="img-fluid wow swing"
                                                              src="{{ asset('uploads/logo.png') }}"
                                                              alt="{{ env('APP_NAME') }}"></a>
                            </div>
                            @if(Cache::has('site_info'))
                                @php
                                    $site_info=Cache::get('site_info');
                                @endphp
                                <p>
                                    @if(app()->getLocale() == "ar")
                                        {{ json_decode($site_info->site_description , true)['ar'] }}
                                    @else
                                        {{ json_decode($site_info->site_description , true)['en'] }}
                                    @endif
                                </p>

                                <ul class="list-inline footer-socials mt-4">
                                    @if(!empty($site_info->facebook))
                                        <li class="list-inline-item"><a href="{{ $site_info->facebook }}"><i
                                                    class="icofont-facebook"></i></a></li>
                                    @endif
                                    @if(!empty($site_info->twitter))
                                        <li class="list-inline-item"><a href="{{ $site_info->twitter }}"><i
                                                    class="icofont-twitter"></i></a></li>
                                    @endif
                                    @if(!empty($site_info->linkedin))
                                        <li class="list-inline-item"><a href="{{ $site_info->linkedin }}"><i
                                                    class="icofont-linkedin"></i></a></li>
                                    @endif
                                    @if(!empty($site_info->instagram))
                                        <li class="list-inline-item"><a href="{{ $site_info->instagram }}"><i
                                                    class="icofont-instagram"></i></a></li>
                                    @endif
                                    @if(!empty($site_info->youtube))
                                        <li class="list-inline-item"><a href="{{ $site_info->youtube }}"><i
                                                    class="icofont-youtube"></i></a></li>
                                    @endif
                                </ul>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6  wow fadeIn" data-wow-delay="1.00s">

                        {{ main_footer_menu('footer_left','','','','top',true) }}
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        {{ main_footer_menu('footer_center','','','','top',true) }}
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="2.00s">
                        {{ main_footer_menu('footer_right','','','','top',true) }}
                    </div>


                </div>

                <div class="footer-btm py-4 mt-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-12 text-center">
                            <div class="copyright">
                                &copy; Copyright Reserved by <a href="http://magic-solution.com/">{{ env('APP_NAME') }}</a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <a class="backtop js-scroll-trigger" href="#top">
                                <i class="icofont-long-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!--=====================================
        FOOTER PART END
        =======================================-->
        <!--=====================================
        JS LINK PART START
        =======================================-->
        <script src="{{ asset('assets/frontend/plugins/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            wow = new WOW({
                mobile: true, // default
            })
            wow.init();
            $(window).on('load', function () {
                $('#cover').fadeOut(1000);
            })
        </script>

        @stack('js')

        @if(Cache::has('marketing_tool'))
            @php
                $tools=Cache::get('marketing_tool');
                $tools=json_encode($tools);
                $tools=json_decode($tools ?? '');
            @endphp
            @isset($tools->google_status)
                @if($tools->google_status == 'on')
                    {!! google_analytics($tools->ga_measurement_id) !!}
                @endif
            @endisset

        @endif
        </body>
        </html>
