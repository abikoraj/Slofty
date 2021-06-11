<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Admin Panel</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/agency-studio/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/charts-c3/plugin.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/morrisjs/morris.min.css') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/Aero/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/summernote/dist/summernote.css') }}" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/multi-select/css/multi-select.css') }}">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/select2/select2.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/dropify/css/dropify.min.css') }}">

    <!-- Light Gallery Plugin Css -->
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/light-gallery/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Aero/plugins/fullcalendar/fullcalendar.min.css') }}">
</head>

<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/Aero/images/loader.svg') }}"
                    width="48" height="48" alt="Admin"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Left Sidebar -->
    @include('layouts.backend.sidebar')

    @yield('content')



    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/Aero/bundles/libscripts.bundle.js') }}"></script>
    <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="{{ asset('assets/Aero/bundles/vendorscripts.bundle.js') }}"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="{{ asset('assets/Aero/plugins/light-gallery/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/Aero/bundles/fullcalendarscripts.bundle.js') }}"></script>

    <!--/ calender javascripts -->
    <script src="{{ asset('assets/Aero/js/pages/medias/image-gallery.js') }}"></script>
    <script src="{{ asset('assets/Aero/js/pages/calendar/calendar.js') }}"></script>

    <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="{{ asset('assets/Aero/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('assets/Aero/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
    <script src="{{ asset('assets/Aero/bundles/c3.bundle.js') }}"></script>

    <script src="{{ asset('assets/Aero/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/Aero/js/pages/index.js') }}"></script>

    <script src="{{ asset('assets/Aero/plugins/summernote/dist/summernote.js') }}"></script>
    <script src="{{ asset('assets/Aero/js/pages/ticket-page.js') }}"></script>

    <script src="{{ asset('assets/Aero/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/Aero/js/pages/forms/dropify.js') }}"></script>

    <script src="{{ asset('assets/Aero/plugins/multi-select/js/jquery.multi-select.js') }}"></script>
    <!-- Multi Select Plugin Js -->
    <script src="{{ asset('assets/Aero/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
    @yield('scripts')
</body>


</html>
