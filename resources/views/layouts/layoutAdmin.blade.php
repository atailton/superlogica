<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ingresso Fácil - A melhor solução para organizar os seus eventos.">

    <!-- NATIVO -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Challenge</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- NATIVO -->


    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('template/admin-page-resources/source/assets/plugins/simplebar/simplebar.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('template/admin-page-resources/source/assets/plugins/nprogress/nprogress.css') }}"
        rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link
        href='{{ asset('template/admin-page-resources/source/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}'
        rel='stylesheet'>
    <link href='{{ asset('template/admin-page-resources/source/assets/plugins/daterangepicker/daterangepicker.css') }}'
        rel='stylesheet'>
    <link href='{{ asset('template/admin-page-resources/source/assets/plugins/toastr/toastr.min.css') }}'
        rel='stylesheet'>
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet"
        href="{{ asset('template/admin-page-resources/theme/assets/css/sleek.css') }}" />
    <!-- FAVICON -->
    <link href="" rel="shortcut icon" />
    <script src="{{ asset('template/admin-page-resources/source/assets/plugins/nprogress/nprogress.js') }}"></script>



</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <!--<script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>
    <div id="toaster"></div>-->

    <div class="wrapper">
        
        <!-- LEFT SIDEBAR WITH OUT FOOTER -->
        @include('admin.components.leftSidebar')

        <div class="page-wrapper">
            <!-- Header -->
            @include('admin.components.header')
            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->
        </div>


    </div>

    <script src="{{ asset('template/admin-page-resources/source/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/admin-page-resources/source/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/admin-page-resources/source/assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src='{{ asset('template/admin-page-resources/source/assets/plugins/charts/Chart.min.js') }}'></script>
    <script src='{{ asset('template/admin-page-resources/theme/assets/js/chart.js') }}'></script>
    <script
        src='{{ asset('template/admin-page-resources/source/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}'>
    </script>
    <script
        src='{{ asset('template/admin-page-resources/source/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}'>
    </script>
    <script src='{{ asset('template/admin-page-resources/source/js/vector-map.js') }}'></script>
    <script src='{{ asset('template/admin-page-resources/source/assets/plugins/daterangepicker/moment.min.js') }}'>
    </script>
    <script src='{{ asset('template/admin-page-resources/source/assets/plugins/daterangepicker/daterangepicker.js') }}'>
    </script>
    <script src='{{ asset('template/admin-page-resources/theme/assets/js/date-range.js') }}'></script>
    <script src='{{ asset('template/admin-page-resources/source/assets/plugins/toastr/toastr.min.js') }}'></script>
    <script src="{{ asset('template/admin-page-resources/theme/assets/js/sleek.js') }}"></script>

</html>
