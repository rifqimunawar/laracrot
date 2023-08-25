@section('title') {{ 'Admin' }}@endsection
@extends('.admin.layout')
@section('content')



{{-- MODAL SENSUS --}}
  {{-- <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
              <div class="modal-header text-center">
                  <h5 class="modal-title text-center">SENSUS ANGGOTA</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
              {{-- </div>
              <div >
                  <p>Pastikan Anda Sudah Di Daftarkan Oleh Rayon Anda Sebagai Anggota Kader PMII
                      UNINUS.</p>
                  <img style="width: 100%" src="{{ asset('storage/img/sensus.png') }}" alt="">
                  <a href="{{ route('create.user') }}" class="btn btn-success mt-3 mb-2"
                      style="width: 100%">Daftarkan Kader Sekarang !</a>
              </div>
          </div>
      </div>
  </div> --}}
{{-- END MODAL SENSUS --}}

{{-- JS MODAL SENSUS --}}
{{-- <script>
$(document).ready(function () {
  $("#myModal").modal('show');
});
</script> --}}
{{-- END JS MODAL SENSUS --}}

{{-- <div >
  <img style="width: 100%" src="{{ asset('storage/img/sensus.png') }}" alt="">
  <a href="{{ route('create.user') }}" class="btn btn-danger mt-3 mb-2"
      style="width: 100%">Daftarkan Kader Sekarang !</a>
</div> --}}

        <!-- Left side columns -->
          <div class="row">

            <!-- Total Mapaba -->
            <div class="col">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Pasca <span>| Mapaba</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user_mapaba }}</h6>
                      <span class="text-primary small pt-1 fw-bold"></span><span class="text-muted small pt-2 ps-1"></span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Mapaba-->


            <!-- pkd Card -->
            <div class="col">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Kader <span>| PKD</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user_pkd }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End pkd Card -->

            <!-- pkl Card -->
            <div class="col">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Kader <span>| PKL</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user_pkl }}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End pkl Card -->

            <!-- pkl Card -->
            <div class="col">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Kader <span>| PKN</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user_pkn }}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End pkl Card -->
            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

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

            <!-- Top Kader belum diverifikasi -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

            <!-- Top Gamber belum diverifikasi -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Data Gambar <span>Belum Diverifikasi</span></h5>
                  <table class="table table-striped table-hover">
                    <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Judul</td>
                        <td class="text-start">Upload By:</td>
                        <td class="text-center">Gambar</td>
                        <td class="text-center">Keterangan</td>
                        <td class="text-center"> Aksi</td>
                        <td class="text-center">  </td>
                    </tr>
                    @foreach ($galeri as $galer)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $galer['judul'] }}</td>
                        <td>{{ $galer->user->username }}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/img/'.$galer['img']) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                        </td>
                        <td>
                          @if($galer->status == 1)
                              Aktif
                          @else
                              Nonaktif
                          @endif
                      </td>
                      <td>
                        <form action="{{ route('admin.galeri.update', $galer->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="status" value="{{ $galer->status == 1 ? 0 : 1 }}">
                          @if($galer->status == 1)
                              <button type="submit" class="btn btn-sm btn-success">Nonaktifkan</button>
                              @else
                              <button type="submit" class="btn btn-sm btn-warning">Aktifkan</button>
                            @endif
                      </form>
                      </td>
                        <td class="text-center">
                            <form action="{{ route('admin_destroy', $galer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                                ('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

              </div>
            </div><!-- End Top Selling -->
        </div><!-- End Left side columns -->

            <!-- Top Post belum diverifikasi -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Data Post <span>Belum Diverifikasi</span></h5>
                  <table class="table table-bordered table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th style="width: 30px">#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ Str::limit($post->title, 50) }}</td>
                            <td>{{ $post->category->title }}</td>
                            <td>{{ $post->user->username }}</td>
                            <td>
                                @if($post->active === 1)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Nonaktif</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('posts.destroy', $post->id) }}"
                                      method="post"
                                      class="float-left">
                                    <a href="{{ url('article') }}/{{$post->slug}}"
                                        class="btn btn-info btn-sm float-left mr-1"
                                        target="_blank">
                                        <i class="ri-eye-fill"></i>
                                    </a>
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="btn btn-primary btn-sm float-left mr-1">
                                        <i class="ri-edit-box-fill"></i>
                                    </a>
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Do you really want to ' +
                                              'delete post!')">
                                        <i class="ri-delete-bin-2-line"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

              </div>
            </div><!-- End Top Selling -->
        </div><!-- End Left side columns -->

                  @include('admin.partials.rightside')

@endsection