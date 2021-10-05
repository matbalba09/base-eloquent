<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clever Minds - Enrichment Beyond the Classroom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('front-assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front-assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('front-assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('front-assets/css/custom.css') }}" rel="stylesheet">
</head>

<body>

  @include('front.layouts.nav')

  @yield('front-content')

  @include('front.layouts.footer')
  @include('front.layouts.anchor')

  <!-- Vendor JS Files -->
  <script src="{{ asset('front-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('front-assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front-assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('front-assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front-assets/js/main.js') }}"></script>

</body>

</html>
