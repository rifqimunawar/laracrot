@section('title') {{ 'Home' }}@endsection
@extends('user.layout')
@section('content')

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="20000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ asset('storage/home/homepage.jpg') }});">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang</h2>
                {{-- <p class="animate__animated animate__fadeInUp">Selamat Datang Di Website Resmi Pergerakan Mahasiswa Islam Indonesia 
                  Komisariat Universitas Islam Nusantara Cabang Kota Bandung, Mari Bergabung Bersama Kami! <br> Bersama PMII Membangun 
                  Indonesia Yang Maju dan Sejahtera Cmiww.....
                </p> --}}
                <a href="/login" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
        @foreach ($home as $hom)
        <div class="carousel-item" style="background-image: url({{ asset('storage/img/' . $hom->gambar ) }});">
          <div class="carousel-container">
            <div class="container position-absolute top-50 start-50 translate-middle">
              <h2 class="animate__animated animate__fadeInDown">{{ $hom['judul'] }}</h2>
              {{-- <p class="animate__animated animate__fadeInUp">{{ $hom['deskripsi'] }}</p> --}}
              <a href="/login" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
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
          <h5 class="text-center">PMII merupakan organisasi gerakan dan kaderisasi yang berlandaskan islam ahlussunah waljamaah. 
            Berdiri sejak tanggal 17 April 1960 di Surabaya dan hingga lebih dari setengah abad kini PMII 
            terus eksis untuk memberikan kontribusi bagi kemajuan bangsa dan negara.</h5>

      </div>
    </section><!-- End About Us Section -->

    
    {{-- <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Rayon-Rayon <br> PMII UNINUS</h3>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets_user/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section --> --}}


    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Data Kader PMII UNINUS </p>
        </header>

        <div class="row counters text-center" >

          <div class="col text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $user_mapaba }}" data-purecounter-duration="6" class="purecounter"></span>
            <p>Kader Pasca Mapaba</p>
          </div>

          <div class="col text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $user_pkd }}" data-purecounter-duration="5" class="purecounter"></span>
            <p>Kader Pasca PKD</p>
          </div>

          <div class="col text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $user_pkl }}" data-purecounter-duration="4" class="purecounter"></span>
            <p>Kader Pasca PKL</p>
          </div>

          <div class="col text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $user_pkn }}" data-purecounter-duration="3" class="purecounter"></span>
            <p>Kader Pasca PKN</p>
          </div>

        </div>

        <div class="facts-img">
          <img src="assets/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- End Facts Section -->


            <!-- Reports -->
    <div class="col-12 p-4"  data-aos="fade-up">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">Data Mapaba <span>Dari Tahun Ke Tahun</span></h5>

          <!-- Line Chart -->
          <div id="reportsChart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              new ApexCharts(document.querySelector("#reportsChart"), {
                series: [{
                  name: 'Mapaba',
                  data: [{{ $mapaba_2018 }}, {{ $mapaba_2019 }}, {{ $mapaba_2020 }}, 
                  {{ $mapaba_2021 }}, {{ $mapaba_2022 }}, {{ $mapaba_2023 }}, {{ $mapaba_2023 }}],
                }, 

                ],
                chart: {
                  height: 350,
                  type: 'area',
                  toolbar: {
                    show: false
                  },
                },
                markers: {
                  size: 4
                },
                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                fill: {
                  type: "gradient",
                  gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.3,
                    opacityTo: 0.4,
                    stops: [0, 90, 100]
                  }
                },
                dataLabels: {
                  enabled: false
                },
                stroke: {
                  curve: 'smooth',
                  width: 2
                },
                xaxis: {
                  type: 'datetime',
                  categories: ["2018", "2019", "2020", "2021", "2022", "2023",]
                },
                tooltip: {
                  x: {
                    format: 'yyyy'
                  },
                },
              }).render();
            });
          </script>
          <!-- End Line Chart -->

        </div>

      </div>
    </div><!-- End Reports -->


    {{-- <div class="row p-5"> --}}
    <div class="p-4"  data-aos="fade-up">
      <!-- Website Traffic -->
      <div class="col-12 mb-2">
        <div class="card">
          <div class="card-body pb-0">
            <h5 class="card-title">Kader Berdasarkan <span>| Jenis Kelamin </span></h5>
            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: {{ $user_kelamin_p }},
                        name: 'Perempuan'
                      },
                      {
                        value: {{ $user_kelamin_l }},
                        name: 'Kader Laki-Laki'
                      },
                    ]
                  }]
                });
              });
            </script>
          </div>
        </div>
      </div>
      <!-- End Website Traffic -->
    
      <!-- Start Pie Chart -->
      <div class="col-12 mb-2"  data-aos="fade-up">
        <div class="card">
          <div class="card-body">
          <h5 class="card-title">Kader Berdasarkan <span>| Rayon </span></h5>
          <!-- Pie Chart -->
          <div id="pieChart" style="min-height: 600px;" class="echart"></div>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#pieChart")).setOption({
                title: {
                  // text: 'Referer of a Website',
                  // subtext: 'Fake Data',
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
                      value: {{ $user_rayon_1 }},
                      name: 'Teknik'
                    },
                    {
                      value: {{ $user_rayon_2 }},
                      name: 'Hukum'
                    },
                    {
                      value: {{ $user_rayon_3 }},
                      name: 'Ulul Albab'
                    },
                    {
                      value: {{ $user_rayon_4 }},
                      name: 'Ekonomi'
                    },
                    {
                      value: {{ $user_rayon_5 }},
                      name: 'Fikom'
                    },
                    {
                      value: {{ $user_rayon_6 }},
                      name: 'Fkip'
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
        </div>
        <!-- End Pie Chart -->
      </div>
    </div>


    <div class="col-lg-12 mb-2"  data-aos="fade-up">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Produktivitas Rayon</h5>

          <!-- Vertical Bar Chart -->
          <div id="verticalBarChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              const formalData = [{{ $formalTeknik }}, {{ $formalHukum }}, {{ $formalFai }}, {{ $formalFikom }}, {{ $formalFkip }}, {{ $formalEkonomi }}];
              const nonFormalData = [{{ $nonformalTeknik }}, {{ $nonformalHukum }}, {{ $nonformalFai }}, {{ $nonformalFikom }}, {{ $nonformalFkip }}, {{ $nonformalEkonomi }}];
              const informalData = [{{ $informalTeknik }}, {{ $informalHukum }}, {{ $informalFai }}, {{ $informalFikom }}, {{ $informalFkip }}, {{ $informalEkonomi }}];
          
              formalData.reverse();
              nonFormalData.reverse();
              informalData.reverse();
          
              echarts.init(document.querySelector("#verticalBarChart")).setOption({
                tooltip: {
                  trigger: 'axis',
                  axisPointer: {
                    type: 'shadow'
                  }
                },
                legend: {},
                grid: {
                  left: '3%',
                  right: '4%',
                  bottom: '3%',
                  containLabel: true
                },
                xAxis: {
                  type: 'value',
                  boundaryGap: [0, 0.01]
                },
                yAxis: {
                  type: 'category',
                  data: ['Teknik', 'Hukum', 'Fai', 'Fikom', 'Fkip', 'Ekonomi'].reverse()
                },
                series: [
                  {
                    name: 'Formal',
                    type: 'bar',
                    data: formalData
                  },
                  {
                    name: 'Non Formal',
                    type: 'bar',
                    data: nonFormalData
                  },
                  {
                    name: 'Informal',
                    type: 'bar',
                    data: informalData
                  }
                ]
              });
            });
          </script>
          
          <!-- End Vertical Bar Chart -->

        </div>
      </div>
    </div>




    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header py-5">
          <h3>Galeri Terbaru</h3>
        </header>

      <div class="row portfolio-container pt-4 mt-4" data-aos="fade-up" data-aos-delay="200">

        @foreach ($galeries->take(3) as $galeri)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{ asset('storage/img/' . $galeri->img ) }}" class="img-fluid" alt="" style="width: 120%; height:120%; object-fit:cover; box-shadow: 0px 0px 5px 0px rgba(0,0,5,10);">
              <a href="{{ asset('storage/img/' . $galeri->img ) }}" data-lightbox="portfolio" data-title="{{ $galeri->judul }}" class="link-preview"><i class="bi bi-plus"></i></a>
              <a href="/galeri" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4>{{ $galeri->judul }}</h4>
              <a href="/profile/{{ $galeri->user->slug }}"><p style="text-transform: lowercase; text-decoration:none">{{ $galeri->user->username }}</p></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      </div>
    </section><!-- End Portfolio Section -->

    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header py-5">
          <h3>Tulisan Kader</h3>
        </header>

      <div class="row portfolio-container pt-4 mt-4" data-aos="fade-up" data-aos-delay="200">

        {{-- @dd($recent_posts) --}}
        @foreach ($recent_posts->take(3) as $post)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{ asset('storage/img/' . $post->image ) }}" class="img-fluid" alt="" style="width: 120%; height:120%; object-fit:cover; box-shadow: 0px 0px 5px 0px rgba(0,0,5,10);">
              <a href="{{ asset('storage/img/' . $post->image ) }}" data-lightbox="portfolio" data-title="{{ $post->title }}" class="link-preview"><i class="bi bi-plus"></i></a>
              <a href="{{ route('post', ['slug' => $post->slug]) }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <a href="{{ route('post', ['slug' => $post->slug]) }}"><h4>{{ Str::limit($post->title, '15') }}</h4></a> 
              <a href="{{ route('category', $post->category->slug) }}"><p style="text-transform: none; text-decoration:none">{{ $post->category->title }}</p></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      </div>
    </section><!-- End Portfolio Section -->


    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="text-transform:inherit">Quote Of The Day</h3>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($quotes as $quote)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('storage/img/'. $quote->img ) }}" class="testimonial-img" 
                alt="" style="width: 110px; height:110px; object-fit:cover">
                <h3>{{ $quote->name }}</h3>
                <h4>{{ $quote->who }}</h4>
                <p>
                  <img src="{{ asset('assets_user/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                  {{ $quote->quote }}
                  <img src="{{ asset('assets_user/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                </p>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Kotak Aspirasi</h3>
          <p>Kritik saran dan masukan akan sangat berharga bagi kami</p>
        </div>

        <div class="form">
          <form action="/contact/store" method="post" >
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              {{-- <div class="loading">Loading</div> --}}
            </div>
            <div class="text-center" ><button class="text-center btn btn-success" type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </div>
    </section><!-- End Contact Section -->


    <!-- script for chart --> 
    <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/assets/vendor/echarts/echarts.min.js"></script>
@endsection