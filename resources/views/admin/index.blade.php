@extends('.admin.layout')
@section('content')

        <!-- Left side columns -->
          <div class="row">
{{-- 
            <!-- pkn Card -->
            <div class="col">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Pengguna</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user_anggota_count }}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End pkn Card -->
            

            <!-- pkn Card -->
            <div class="col">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Belum <span>| Mapaba</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user_unmapaba }}</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End pkn Card -->
            --}}
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
                          // {
                          //   name: 'Revenue',
                          //   data: [11, 32, 45, 32, 34, 52, 41]
                          // }, {
                          //   name: 'Customers',
                          //   data: [15, 11, 32, 18, 9, 24, 11]
                          // }
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
                          categories: ["2018", "2019", "2020", "2021", "2022", "2023", "2024", "2025"]
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
{{-- 
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

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
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales --> --}}

            <!-- Top Selling -->
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
                  <h5 class="card-title">Data Kader <span>Belum Diverifikasi</span></h5>
                <table class="table table-striped table-hover">
                  <tr>
                      <td class="text-center">No</td>
                      <td class="text-center">Nama</td>
                      <td class="text-start"> Username:</td>
                      <td class="text-center">Nim</td>
                      <td class="text-center">Rayon</td>
                      <td class="text-center">Profile</td>
                      <td class="text-center"> Aksi</td>
                      <td class="text-center">  </td>
                  </tr>
                  @foreach ($kader as $user)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td class="text-center">{{ $user->nim }}</td>
                    <td class="text-center">{{ $user->rayon->rayon }}</td>
                    <td class="text-center">
                        <img src="{{ asset('storage/img/' . $user->img ) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                    </td>
                    <td class="text-center">
                        <a href="/admin/user/{{ $user->id }}/edit" class="btn btn-danger btn-sm">Verifikasi</a>
                    </td>
                </tr>
                  @endforeach
              </table>

              </div>
            </div><!-- End Top Selling -->
        </div><!-- End Left side columns -->

                  @include('admin.partials.rightside')

@endsection