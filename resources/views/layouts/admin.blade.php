<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

        @yield('css')

    </head>

<body class="blank-page">


    <!-- Start: Main -->
            <div id="main">

        <!-- Start: Header -->
        @include('layouts.template.header')
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary affix">
            <!-- Start: Sidebar Left Content -->
            <div class="sidebar-left-content nano-content">
                <!-- Start: Sidebar Menu -->
                @include('layouts.template.sidebar_menu')
                <!-- End: Sidebar Menu -->
            </div>
            <!-- End: Sidebar Left Content -->
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar -->
            @include('layouts.template.top_bar')
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">
                @yield('content')
            </section>
            <!-- End: Content -->

        </section>

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

    <!-- Theme Javascript -->
    <script src="{{ asset('assets/js/utility/utility.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('js')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core
            Core.init();
        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
