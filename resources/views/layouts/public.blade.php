<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href="{{ asset('menu/images/bpbd.png') }}" rel="icon">
    <link href="{{ asset('public/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('template/assets/css/font-awesome.min.css')}}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

    @yield('custom_head')

    <style>
        #header {
            background: #f7750c;
        }
        #header a {
            color: white
        }
        #header a:hover {
            color: #4154f1
        }
        #header .getstarted a:hover {
            color: white
        }
    </style>

    <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <x-header />

    @yield('content')

    <x-footer />

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @yield('custom_html')

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('custom_js')

    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil!',
                '{{ session()->get('success') }}',
                'success'
            )

        </script>
    @endif

</body>

</html>
