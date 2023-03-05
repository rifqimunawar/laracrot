@extends('user.layout')
@section('content')
<div class="text-center my-5 pt-3">
  <h4 class="pt-5">Galeri Kader</h4>
</div>
<!-- Gallery -->
<div class="container my-4">
  <div class="row">
    @foreach ($galeri as $galer)
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
      <div class="col-md-4 col-sm-6 mb-4 mb-lg-0">
          <div class="box mb-3">
              <img src="{{ asset('storage/uploads/' . $galer->galeri ) }}"class="position-absolute top-50 start-50 translate-middle" >
              <div class="box-content mr-2">
                <span class="post">{{ $galer->judul }}</span>
                <h3 class="title">User uploads</h3>
                  <ul class="icon mt-4">
                      <li><a href="#"><i class="fa fa-search"></i></a></li>
                      {{-- <li><a href="#"><i class="fa fa-link"></i></a></li> --}}
                  </ul>
              </div>
          </div>
      </div>
    @endforeach
  </div>
</div>
@endsection