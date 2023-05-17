{{-- @dd($user->username); --}}
@section('title') {{ 'Pengurus' }}@endsection
@extends('user.layout')
@section('content')
<div class="text-center">
  <h4 class="pt-5"></h4>
</div>
<div class="container my-4">
  <div class="row">
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" >
      <div class="container" data-aos="fade-up">
        <header class="section-header" style="padding: 5rem">
          <h3 style="text-transform: none">PENGURUS 
              <br> PMII Komisariat <br>
              Universitas Islam Nusantara <br> 
              Masa Bakti 2023/2024</h3>
              <p>Kabinet PMII Maju dan Berkembang</p>
        </header>
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($penguruses as $pengurus)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('storage/img/' . $pengurus->img ) }}" class="img-fluid" alt="" style="width: 120%; height:120%; object-fit:cover; box-shadow: 0px 0px 5px 0px rgba(0,0,5,10);">
                <a href="{{ asset('storage/img/' . $pengurus->img ) }}" data-lightbox="portfolio" data-title="{{ $pengurus->name }}" class="link-preview"><i class="bi bi-plus"></i></a>
                <a href="{{ $pengurus->ig }}" class="link-details" title="More Details"><i class="bi bi-instagram"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4>{{ $pengurus->name }}</h4>
                <p>{{ $pengurus->jabatan }}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Team Section -->

  </div>
</div>
@endsection