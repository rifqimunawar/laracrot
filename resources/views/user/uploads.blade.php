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

        <div class="col-xl-12">

          <div class="card">

            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-statistik">Statistik</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-settings">Tulisan</button>
                </li>
                
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-gambar">Galeri</button>
                </li>
                
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-perpus">Perpustakaan</button>
                </li>


              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('storage/img/profile-img.jpg') }}" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="USA">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
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
                            <input type="file" class="form-control my-4" name="pdf" id="pdf" 
                            accept="application/pdf,application/vnd.ms-word">
                            
                            <label for="image">Masukan Cover Buku</label>
                            <input type="file" class="form-control my-4" name="image" id="image">
                            <div class="my-3"></div>
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Max 15 Huruf">

                            <label for="penulis">Penulis Buku</label>
                            <input type="text" class="form-control" name="penulis" id="penulis">
                            <div class="my-3"></div>
                
                            <label for="penerbit">Penerbit Buku</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit">
                            <div class="my-3"></div>
                
                            <label for="thn_terbit">Tahun Terbit</label>
                            <input type="text" class="form-control" name="thn_terbit" id="thn_terbit">
                            <div class="my-3"></div>
                
                            <label for="isbn">Nomor ISBN</label>
                            <input type="text" class="form-control" name="isbn" id="isbn">
                            <div class="my-3"></div>
                
                            <label for="bahasa">Bahasa Yang Digunakan</label>
                            <input type="text" class="form-control" name="bahasa" id="bahasa">
                            <div class="my-3"></div>
                
                            
                            <label for="categorybook_id">Category Buku</label>
                            <select name="categorybook_id" class="form-select" required aria-label="categorybook_id">
                              <option value="1">--- Category Buku ---</option>
                              @foreach ($category as $item)
                              <option value="{{ $item->id }}">{{ $item->title }}</option>
                              @endforeach
                            </select>
                            <div class="my-3"></div>
                
                            <label for="halaman">Jumlah Halaman</label>
                            <input type="number" class="form-control" name="halaman" id="halaman">
                            <div class="my-3"></div>
                
                            <label for="deskripsi">Deskripsi Buku</label>
                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <div class="my-3"></div>
                
                            
                            <div class="my-3">
                                <button type="submit" class="btn btn-primary btn-sm mx-3">Upload Buku</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade show active  pt-3" id="profile-statistik">
                  <!-- Settings Form -->
                  <div class="card info-card sales-card">
                    <div class="container">
                        <h4 class="text-center my-4">Statistik Saya</h4>
                
                        <div class="col-lg-12">
                          <div class="card">
                            <div class="card-body">
                              {{-- <h5 class="card-title">Pie Chart</h5> --}}
                
                              <!-- Pie Chart -->
                              <div id="pieChart" style="min-height: 500px;" class="echart"></div>
                
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
                                          value: {{ $galeriCount }},
                                          name: 'Foto'
                                        },
                                        {
                                          value: {{ $postCount }},
                                          name: 'Tulisan'
                                        },
                                        {
                                          value: {{ $perpusCount }},
                                          name: 'Buku'
                                        },
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

                    </div>
                  </div>
                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>


          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</div>

    {{-- script for chart  --}}
    <script src="/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/assets/vendor/echarts/echarts.min.js"></script>
    
    {{-- script untuk editor post txt area  --}}
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>

    
    {{-- script untuk ckfinder  --}}
  <script src="{{ asset('assets/admin/js/admin.js') }}"></script>
  <script src="{{ asset('assets/admin/ckeditor5/build/ckeditor.js') }}"></script>
  <script src="{{ asset('assets/admin/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
  ClassicEditor
      .create(document.querySelector('#content'), {
          ckfinder: {
              uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
          },
          image: {
              // You need to configure the image toolbar, too, so it uses the new style buttons.
              toolbar: ['imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight'],

              styles: [
                  // This option is equal to a situation where no style is applied.
                  'full',

                  // This represents an image aligned to the left.
                  'alignLeft',

                  // This represents an image aligned to the right.
                  'alignRight'
              ]
          },
          toolbar: {
              items: [
                  'heading',
                  '|',
                  'bold',
                  'italic',
                  'link',
                  'bulletedList',
                  'numberedList',
                  '|',
                  'indent',
                  'outdent',
                  'alignment',
                  '|',
                  'blockQuote',
                  'insertTable',
                  'undo',
                  'redo',
                  'CKFinder',
                  'mediaEmbed'
              ]
          },
          language: 'ru',
          table: {
              contentToolbar: [
                  'tableColumn',
                  'tableRow',
                  'mergeTableCells'
              ]
          },
      })
      .catch(function (error) {
          console.error(error);
      });
</script>
  @endsection