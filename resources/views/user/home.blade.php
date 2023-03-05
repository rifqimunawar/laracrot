@extends('user.layout')
@section('content')




  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url({{ asset('storage/home/home2.jpg') }});"/>
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
                <p class="animate__animated animate__fadeInUp">Selamat Datang Di Website Resmi Pergerakan Mahasiswa Islam Indonesia 
                  Komisariat Universitas Islam Nusantara Cabang Kota Bandung, Mari Bergabung Bersama Kami! Bersama PMII Membangun 
                  Indonesia Yang Maju dan Sejahtera Cmiww.....
                </p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
        @foreach ($home as $hom)
        <div class="carousel-item" style="background-image: url({{ asset('storage/home/' . $hom['gambar']) }});">
          <div class="carousel-container">
            <div class="container position-absolute top-50 start-50 translate-middle">
              <h2 class="animate__animated animate__fadeInDown">{{ $hom['judul'] }}</h2>
              <p class="animate__animated animate__fadeInUp">{{ $hom['deskripsi'] }}</p>
              <a href="{{ $hom['link'] }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->



    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat. aliqua. Ut enim ad minim veniam.</p>
        </header>

      </div>
    </section><!-- End About Us Section -->

    
    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Keluarga PMII UNINUS</h3>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets_user/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-6.png" class="img-fluid" alt=""></div>
            {{-- <div class="swiper-slide"><img src="assets_user/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-8.png" class="img-fluid" alt=""></div> --}}
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->


    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

          <div class="col text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="6" class="purecounter"></span>
            <p>Kader Pasca Mapaba</p>
          </div>

          <div class="col text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="5" class="purecounter"></span>
            <p>Kader Pasca PKD</p>
          </div>

          <div class="col text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="4" class="purecounter"></span>
            <p>Kader Pasca PKL</p>
          </div>
{{-- 
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div> --}}

        </div>

        <div class="facts-img">
          <img src="assets/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- End Facts Section -->


{{-- 

    
    <!--  Chart start -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pie Chart</h5>

          <!-- Pie Chart -->
          <div id="pieChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#pieChart")).setOption({
                title: {
                  text: 'Referer of a Website',
                  subtext: 'Fake Data',
                  left: 'center'
                },
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  orient: 'vertical',
                  left: 'left'
                },
                series: [{
                  name: 'Access From',
                  type: 'pie',
                  radius: '50%',
                  data: [{
                      value: 1048,
                      name: 'Search Engine'
                    },
                    {
                      value: 735,
                      name: 'Direct'
                    },
                    {
                      value: 580,
                      name: 'Email'
                    },
                    {
                      value: 484,
                      name: 'Union Ads'
                    },
                    {
                      value: 300,
                      name: 'Video Ads'
                    }
                  ],
                  emphasis: {
                    itemStyle: {
                      shadowBlur: 10,
                      shadowOffsetX: 0,
                      shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                  }
                }]
              });
            });
          </script>
          <!-- End Pie Chart -->

        </div>
      </div>
    </div>
    <!--  Chart End -->
 --}}


@endsection