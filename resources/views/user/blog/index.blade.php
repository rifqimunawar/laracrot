@extends('user.layout')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    @foreach ($blog as $blok)
<div class="container">
  <div class="row">
      <div class="col-sm-5 col-md-6">
        {{-- kolom pertama --}}
        <article>
          <h5>{{ $blok['judul'] }}</h5><br>
          <img src="{{ asset('storage/uploads/galeri_1677566612.jpeg' ) }}" width="100%">
          <h7>By: Penulis, 29 Februarui 2023 07.30 WIB, Category</h7><br>
          <a href="/blog/{{ $blok->id }}/show" type="button" class="btn btn-secondary btn-sm">Read More</a>
        </article>
      </div>
      {{-- <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
        <div class="card info-card sales-card">
        kolom kedua
        <img src="{{ asset('storage/uploads/galeri_1677566612.jpeg' ) }}" width="25%">
        <h8>{{ $blok['judul'] }}</h8><br>
      </div> --}}
    </div>
  </div>
  @endforeach
@endsection