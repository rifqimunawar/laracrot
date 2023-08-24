<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') | PMII UNINUS </title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!--link dari google adsense-->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7116013508016238" 
  crossorigin="anonymous"></script>


  <!-- Favicons -->
  <link href="{{ asset('assets_user/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets_user/img/favicon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!--link dari google adsense-->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7116013508016238" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets_user/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_user/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets_user/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- Font Awesome icon Centang biru -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-B2tEivVN/4VghK2ejzVWzW3FkmvHqfN98+Mu7H6QgJY1X1LzOD0PTtIP2Hs5mV6C3y8SvA04O7j/VoIcN44+pw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Font Awesome icon news -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

  {{-- link untuk hover galeri  --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  {{-- <link rel="stylesheet" href="css/style.css"> --}}
  <link rel="stylesheet" href="{{ asset ('assets_user/css/style.css') }}">

  {{-- link css for news ================================================== penyebab error hamburger --}}
  <link rel="stylesheet" href="{{ asset('css/stylenews.css') }}">
  
  <!-- Libraries Stylesheet carausel news ==================================  penyebab error hamburger-->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  {{-- calendar agenda  --}}
  <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
  <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
  {{-- <link rel="stylesheet" href="css_calendar/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="css_calendar/style.css">

  {{-- link for summernote ini penyebab ============================================= error hamburger --}}
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> --}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

  @vite ([])

  <script>
    $(document).ready(function(){
      $("#myModal").modal('show');
    });
  </script>

</head>


  <body>
    <!-- Uncomment below i you want to use a preloader -->
    <div id="preloader"></div>




    {{-- <section>
      <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-center" >SENSUS ANGGOTA</h5>
                </div>
                <div class="modal-body">
                  <p>Pastikan Anda Sudah Di Daftarkan Oleh Rayon Anda Sebagai Anggota Kader PMII UNINUS.</p>
                  <img style="width: 100%" src="{{ asset('storage/img/sensus.png') }}" alt="">
                  <a href="#"  target="_blank" class="btn btn-success mt-3 mb-2" 
                  style="width: 100%">Pastikan Anda Sudah Di Daftarkan Oleh Rayon Anda Sebagai Anggota Kader PMII UNINUS.</a>
              </div>
            </div>
        </div>
    </div>
    </section> --}}




    @include('user.partials.navbar')
    @yield('content')
    @include('user.partials.footer')
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Vendor JS Files -->
    
    <script src="{{ asset('assets_user/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/php-email-form/validate.js') }}"></script>
  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File News Papper -->
    <script src="js/main.js"></script>

    {{-- script sweet alert  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_user/js/main.js') }}"></script>

  </body>

  </html>