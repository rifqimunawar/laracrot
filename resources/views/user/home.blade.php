@section('title') {{ 'Home' }}@endsection
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
          <p>Pergerakan Mahasiswa Islam Indonesia (PMII) adalah organisasi mahasiswa Islam terbesar dan tertua di 
            Indonesia. PMII didirikan pada tanggal 17 Februari 1961 di Yogyakarta oleh sekelompok mahasiswa yang ingin
              memperjuangkan kepentingan Islam dan kepentingan bangsa Indonesia. Tujuan utama PMII adalah untuk 
              memperjuangkan Islam sebagai agama, memperjuangkan kemerdekaan dan kebebasan rakyat Indonesia, 
              dan memperjuangkan kemerdekaan dan kebebasan Bangsa-bangsa di seluruh dunia.

            Sejak didirikan, PMII telah berjuang untuk mengembangkan pendidikan Islam, memperjuangkan hak-hak mahasiswa
            dan masyarakat, serta memperjuangkan reformasi politik dan sosial di Indonesia. PMII juga telah 
            menjadi tempat bagi banyak pemimpin dan tokoh Islam terkemuka di Indonesia, termasuk tokoh-tokoh 
            seperti Buya Hamka, Nurcholish Madjid, dan Amien Rais. Saat ini, PMII memiliki jaringan yang luas di 
            seluruh Indonesia dan terus berjuang untuk memperjuangkan kepentingan mahasiswa Islam dan bangsa 
            Indonesia secara keseluruhan.</p>
        </header>

      </div>
    </section><!-- End About Us Section -->

{{--     
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
            <div class="swiper-slide"><img src="assets_user/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets_user/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->
 --}}

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

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $user_pkn }}" data-purecounter-duration="3" class="purecounter"></span>
            <p>Kader Pasca PKN</p>
          </div>

        </div>

        <div class="facts-img">
          <img src="assets/img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- End Facts Section -->


    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Galeri Terbaru</h3>
        </header>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

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
              <p>{{ $galeri->user->username }}</p>
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
          <h3>Testimonials</h3>
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
          <h3>Contact Us</h3>
          <p>Hubungi kami jika anda membutuhkan informasi lebih mengenai PMII Komisariat Uninus Cabang Kota Bandung</p>
        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->


@endsection