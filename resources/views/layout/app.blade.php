<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PUKIMAYYY</title>
        <link href="{{ asset('theme/assets/css/lib/calendar2/semantic.ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('theme/assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('theme/assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('theme/assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/lib/helper.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        @include('inc.sidebar')
        <!-- /# sidebar -->

        @include('inc.navbar')
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1>@yield('title')</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                    <section id="main-content">
                        @yield('content')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                    <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- jquery vendor -->
        <script src="{{ asset('theme/assets/js/lib/jquery.min.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
        <!-- nano scroller -->
        <script src="{{ asset('theme/assets/js/lib/menubar/sidebar.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/preloader/pace.min.js') }}"></script>
        <!-- sidebar -->

        <!-- bootstrap -->

        <script src="{{ asset('theme/assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('theme/assets/js/lib/calendar-2/semantic.ui.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('theme/assets/js/lib/calendar-2/prism.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('theme/assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('theme/assets/js/lib/calendar-2/pignose.init.js') }}"></script>
        <!-- scripit init-->


        <script src="{{ asset('theme/assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/weather/weather-init.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/chartist/chartist.min.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/chartist/chartist-init.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('theme/assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
        <script src="{{ asset('theme/assets/js/scripts.js') }}"></script>
        <!-- scripit init-->
    </body>

</html>
