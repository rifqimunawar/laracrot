            <!-- Website Traffic -->
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
  
              <div class="card-body pb-0">
                <h5 class="card-title">Kader Berdasarkan <span>| Jenis Kelamin </span></h5>
  
                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
  
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Access From',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [{
                            value: {{ $user_kelamin_p }},
                            name: 'Perempuan'
                          },
                          {
                            value: {{ $user_kelamin_l }},
                            name: 'Kader Laki-Laki'
                          },
                        ]
                      }]
                    });
                  });
                </script>
  
              </div>
            </div><!-- End Website Traffic -->

            <!-- Start Pie Chart -->
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kader Berdasarkan <span>| Rayon </span></h5>

              <!-- Pie Chart -->
              <div id="pieChart" style="min-height: 600px;" class="echart"></div>

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
                          value: {{ $user_rayon_1 }},
                          name: 'Teknik'
                        },
                        {
                          value: {{ $user_rayon_2 }},
                          name: 'Hukum'
                        },
                        {
                          value: {{ $user_rayon_3 }},
                          name: 'Ulul Albab'
                        },
                        {
                          value: {{ $user_rayon_4 }},
                          name: 'Ekonomi'
                        },
                        {
                          value: {{ $user_rayon_5 }},
                          name: 'Fikom'
                        },
                        {
                          value: {{ $user_rayon_6 }},
                          name: 'Fkip'
                        }
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
            </div>
              <!-- End Pie Chart -->

            </div>



{{--   
            <!-- News & Updates Traffic -->
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
  
              <div class="card-body pb-0">
                <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>
  
                <div class="news">
                  <div class="post-item clearfix">
                    <img src="assets/img/news-1.jpg" alt="">
                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/news-2.jpg" alt="">
                    <h4><a href="#">Quidem autem et impedit</a></h4>
                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/news-3.jpg" alt="">
                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/news-4.jpg" alt="">
                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                  </div>
  
                  <div class="post-item clearfix">
                    <img src="assets/img/news-5.jpg" alt="">
                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                  </div>
  
                </div><!-- End sidebar recent posts-->
  
              </div>
            </div><!-- End News & Updates --> --}}

          </div><!-- End Right side columns --> 
          
          
          