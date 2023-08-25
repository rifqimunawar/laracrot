@section('title') {{ 'Books' }}@endsection
@extends('/user/layout')
@section('content')
<div class="text-center my-5 pt-3">
  <h4 class="pt-5">Perpustakaan Kader</h4>
        <div class="container card info-card sales-card mt-5">
            <div class="row" style="margin-left:0">
              
              <div class="row">
                <div class="col text-start p-5">
                  <h2 class="mt-4 pt-4">{{ $perpus->judul }}</h2>
                  <div class="movie-summary">
                  </div>
                  <dl class="row pt-5">
                    <dt class="col-sm-3">Judul</dt>
                    <dd class="col-sm-9">{{ $perpus->judul }}</dd>
                    <dt class="col-sm-3">Penulis</dt>
                    <dd class="col-sm-9">{{ $perpus->penulis }}</dd>
                    <dt class="col-sm-3">Tahun Terbit</dt>
                    <dd class="col-sm-9">{{ $perpus->thn_terbit }}</dd>
                    <dt class="col-sm-3">Halaman</dt>
                    <dd class="col-sm-9">{{ $perpus->halaman }}</dd>
                    <dt class="col-sm-3">ISBN</dt>
                    <dd class="col-sm-9">{{ $perpus->isbn }}</dd>
                    <dt class="col-sm-3">Category</dt>
                    <dd class="col-sm-9">{{ $perpus->categorybooks->title }}</dd>
                    <dt class="col-sm-3 text-truncate">Deskripsi</dt>
                    <dd class="col-sm-9">{{ $perpus->deskripsi }}</dd>

                </dl>             
                </div>
                <div class="col mt-5">
                  <figure class="movie-poster"><img width="300" src="{{ asset('storage/img/' . $perpus->image ) }}" alt="#" style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);"></figure>
                  <div class="pb-5 text-center">
                    <a href="/perpus"class="btn btn-warning btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px; margin-left: 5px;">Kembali</a>
                    <a href="{{ asset('storage/pdf/'.$perpus['pdf'])  }}" download type="button" class="btn btn-secondary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px; margin-left: 5px;">Download</a>
                    <a href="{{ asset('storage/pdf/'.$perpus['pdf'])  }}" type="button" class="btn btn-success btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px; margin-left: 5px;">Baca</a>
                  </div>
                </div>
              </div>
              
            </div>
        </div>
    </div>
@endsection