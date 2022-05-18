<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('bk/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('bk/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('bk/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('bk/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
    <link href="{{ asset('bk/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('bk/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('bk/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('bk/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bk/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bk/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bk/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('bk/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('bk/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('bk/css/header-colors.css') }}" />
    <title>Shree College of Management - ACCA and CIMA</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">

            @include('admin/layouts/sidebar') ;
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>

            @include('admin/layouts/header') ;

        </header>
        <!--end header -->
        <!--start page wrapper -->




        @yield('contents')





        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">


            @include('admin/layouts/footer') ;


        </footer>
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="{{ asset('bk/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('bk/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bk/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('bk/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('bk/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('bk/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('bk/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('bk/plugins/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('bk/plugins/highcharts/js/exporting.js') }}"></script>
    <script src="{{ asset('bk/plugins/highcharts/js/variable-pie.js') }}"></script>
    <script src="{{ asset('bk/plugins/highcharts/js/export-data.js') }}"></script>
    <script src="{{ asset('bk/plugins/highcharts/js/accessibility.js') }}"></script>
    <script src="{{ asset('bk/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('bk/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('bk/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar('.customers-list');
        new PerfectScrollbar('.store-metrics');
        new PerfectScrollbar('.product-list');
    </script>
</body>

</html>
