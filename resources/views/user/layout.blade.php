<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraWeb | </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="assets_user/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets_user/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets_user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets_user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    {{-- link untuk hover galeri  --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- css murni  --}}
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="assets_user/css/style.css">
  </head>

  <body>

    @include('user.partials.navbar')
    @yield('content')
    @include('user.partials.footer')
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Vendor JS Files -->
    <script src="assets_user/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets_user/vendor/aos/aos.js"></script>
    <script src="assets_user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets_user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets_user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets_user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets_user/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets_user/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets_user/js/main.js"></script>
  </body>

  </html>