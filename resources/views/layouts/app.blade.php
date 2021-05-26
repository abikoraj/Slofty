<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Author -->
    <meta name="author" content="Slofty Technologies">
    <!-- description -->
    <meta name="description" content="Slofty Technologies">
    <!-- keywords -->
    <meta name="keywords" content="Slofty Technologies">
    <!-- Page Title -->
    <title>Document</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/agency-studio/img/favicon.ico') }}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/vendor/css/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/vendor/css/revolution-settings.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/vendor/css/LineIcons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/vendor/css/cubeportfolio.min.css') }}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/agency-studio/css/style.css') }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!-- Loader -->

    <div class="loader">
        <div class="loader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <section class="page_content_parent_section">
        <h2 class="d-none"></h2>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('assets/agency-studio/vendor/js/bundle.min.js') }}"></script>

    <!-- Plugin Js -->
    <script src="{{ asset('assets/agency-studio/vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/vendor/js/wow.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/vendor/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/vendor/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/vendor/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/vendor/js/parallaxie.min.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('assets/agency-studio/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('assets/agency-studio/vendor/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    <!-- contact form js -->
    <script src="{{ asset('assets/agency-studio/vendor/js/contact_us.js') }}"></script>

    <script src="{{ asset('assets/agency-studio/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/agency-studio/js/script.js') }}"></script>

</body>

</html>
