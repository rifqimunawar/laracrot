@section('title') {{ 'Profile' }}@endsection
@extends('user.layout')
@section('content')
    
<div class="container my-4" style="padding-top: 4rem">
  <main id="main" class="main">

    <div class="pagetitle mt-4">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">{{ $user->role->role }}</li>
          <li class="breadcrumb-item active">foto</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row"> 
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              
              <img src="{{ asset('storage/img/' . $user->img ) }}" alt="Profile" class="rounded-circle" style="height:200px; width:200px; object-fit: cover;">
              <h2></h2>
                  
              <h3>{{ $user ->username }}</h3>
              <div class="social-links mt-2">
                <a href="{{ $user->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{ $user->fb }}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{ $user->ig }}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://api.whatsapp.com/send/?phone=62{{ $user->wa }}" class="linkedin"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">

            
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" >

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $user ->email }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenajang Kaderisasi</div>
                    <div class="col-lg-9 col-md-8">{{ $user->kaderisasi }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">Indonesia</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Rayon</div>
                    <div class="col-lg-9 col-md-8">Rayon {{ $user->rayon->rayon }}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                </div>

              </div><!-- End Bordered Tabs -->

            </div>

          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</div>
<script>
$('textarea#summernote').summernote({
  placeholder: 'Sahabat bisa membuat tulisan disini',
  tabsize: 2,
  height: 100,
  toolbar: [
        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link', 'picture', 'hr']],
        ['view', ['fullscreen', 'codeview']],
      ],
    });
</script>
  @endsection