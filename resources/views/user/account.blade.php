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
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>
                
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade profile-overview" id="profile-overview">

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $user ->email }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Rayon</div>
                    <div class="col-lg-9 col-md-8">{{ $user->rayon_id }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">Indonesia</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">no wa</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                  </div>

                </div>

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('storage/img/' . $user->img ) }}" alt="Profile" style="height:200px">
                        <div class="pt-2">
                         <p class="text-danger">Maximal 4 MB <br> Format: jpg png jpeg </p>
                         <div class="mb-3">
                            <div class="mb-3">
                              <label for="formFileSm" class="form-label"></label>
                              <input class="form-control form-control" id="formFileSm" type="file" name="img">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="bio" class="col-md-4 col-lg-3 col-form-label">Biografi</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="bio" type="text" class="form-control" id="bio" value="{{ $user->bio }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="{{ $user->username }}" readonly>
                        </div>
                      </div>

                      
                      <div class="row mb-3">
                        <label for="nim" class="col-md-4 col-lg-3 col-form-label">NIM</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nim" type="text" class="form-control" id="nim" value="{{ $user->nim }}" readonly>
                        </div>
                      </div>
                      
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Rayon</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="{{ $user->rayon->rayon }}" readonly>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Jenjang Kaderisasi</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="{{ $user->kaderisasi }}" readonly>
                      </div>
                    </div>

                      <div class="row mb-3">
                      <label for="kelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" name="kelamin" aria-label="Default select example">
                          <option value="" disabled selected>--- Jenis Kelamin ---</option>
                          <option value="L" {{ $user->kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                          <option value="P" {{ $user->kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="alamat" type="text" class="form-control" id="alamat" value="{{ $user->alamat }}" required>
                        <p class="text-danger"></p>
                       </div>
                    </div>

                    <div class="row mb-3">
                      <label for="ttl" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="ttl" type="date" class="form-control" id="ttl" value="{{ $user->ttl }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="hobi" class="col-md-4 col-lg-3 col-form-label">Hobi</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" name="hobi" aria-label="Default select example">
                          <option value="" disabled selected>--- Pilih Golongan Hobi ---</option>
                          <option value="Bermain Game" {{ $user->hobi == 'Bermain Game' ? 'selected' : '' }}>Bermain Game Online</option>
                          <option value="Bermusik" {{ $user->hobi == 'Bermusik' ? 'selected' : '' }}>Bermusik: Mendengarkan/Bermain Musik/ Bernyayi</option>
                          <option value="Olahraga"{{ $user->hobi == 'Olahraga' ? 'selected' : '' }}>Berolahraga: Basket, sepak bola, atau Olahraga fisik lainnya</option>
                          <option value="Travelling "{{ $user->hobi == 'Travelling' ? 'selected' : '' }}>Travelling: Jalan-jalan, Touring, naik gunung, mantai</option>
                          <option value="Membaca "{{ $user->hobi == 'Membaca' ? 'selected' : '' }}>Membaca: Buku, Novel, Al-qur'an, atau yang lainnya</option>
                          <option value="Seni dan kreativitas "{{ $user->hobi == 'Seni dan kreativitas' ? 'selected' : '' }}> Seni dan kreativitas : melukis, menggambar, fotografi, atau membuat video atau konten kreatif lainnya.</option>
                          <option value="Menonton film dan serial TV "{{ $user->hobi == 'Menonton film dan serial TV' ? 'selected' : '' }}> Menonton : film, drakor, anime, serial TV </option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="sma" class="col-md-4 col-lg-3 col-form-label">SMA/Sederajat</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="sma" type="text" class="form-control" id="sma" value="{{ $user->sma }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="thn_lulus" class="col-md-4 col-lg-3 col-form-label">Tahun Lulus SMA/Sederajat</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="thn_lulus" type="text" class="form-control" id="thn_lulus" value="{{ $user->thn_lulus }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="thn_kuliah" class="col-md-4 col-lg-3 col-form-label">Tahun Kuliah Di Uninus</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="thn_kuliah" type="text" class="form-control" id="thn_kuliah" value="{{ $user->thn_kuliah }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="wa" class="col-md-4 col-lg-3 col-form-label">Nomor WhatApps</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="wa" type="text" class="form-control" id="wa" value="{{ $user->wa }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{ $user->email }}" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="twitter" value="{{ $user->twitter }}" placeholder="link profile twitter anda" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fb" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fb" type="text" class="form-control" id="fb" value="{{ $user->fb }}" placeholder="link profile facebook anda" required> 
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="ig" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="ig" type="text" class="form-control" id="ig" value="{{ $user->ig }}" placeholder="link profile instagram anda" required>
                      </div>
                    </div>

                    <div class="text-center">
                     <p class="text-danger">Pastikan semua data sudah diisi dengan benar</p>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">
                  <!-- Settings Form -->
                  <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Post</h3>
                    </div>
                    <!-- /.card-header -->

                    <form role="form" method="post" 
                    action="/profile/post/storepost" 
                    enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @include('admin.posts.form')
                          </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
                <!-- /.card -->
                </div>

                <div class="tab-pane fade pt-3" id="profile-gambar">
                  <form action="/profile/galeri/store" method="post"
                  enctype="multipart/form-data">
                  @csrf
                  <label for="galeri">Gambar yang di upload lanccape</label>
                  <input type="file" class="form-control my-4" name="img" id="img">
                  <div class="my-3"></div>
                  <label for="judul">Judul Gambar</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Max 15 Huruf">


                    <div class="my-3">
                      <a href="/admin/galeri" class="btn btn-warning btn-sm ">Kembali</a>
                      <button type="submit" class="btn btn-primary btn-sm mx-3">Upload Gambar</button>
                    </div>
                  </form>

                </div>

                <div class="tab-pane fade pt-3" id="profile-perpus">
                  <!-- Settings Form -->
                  <div class="card info-card sales-card">
                    <div class="container">
                        <h4 class="text-center my-4">Tambah Buku Perpustakaan</h4>
                
                        <form action="/profile/perpus/storeperpus" method="post"
                            enctype="multipart/form-data">
                            @csrf
                
                            <label for="pdf">Masukan Buku Pdf/ Karya Tulis Word atau Karya Ilmiah Lainnya</label>
                            <input type="file" class="form-control my-4" name="pdf" id="pdf">
                            
                            <label for="image">Masukan Cover Buku</label>
                            <input type="file" class="form-control my-4" name="image" id="image">
                            <div class="my-3"></div>
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Max 15 Huruf">
                            
                            <div class="my-3">
                                <button type="submit" class="btn btn-primary btn-sm mx-3">Upload Buku</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="POST" action="{{ route('change-password') }}">
                    @csrf
                
                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" id="currentPassword">
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPassword">
                            @error('new_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="reenter_password" type="password" class="form-control @error('reenter_password') is-invalid @enderror" id="renewPassword">
                            @error('reenter_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
                
                  <!-- End Change Password Form -->

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