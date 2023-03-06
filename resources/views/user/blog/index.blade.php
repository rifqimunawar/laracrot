@section('title') {{ 'Blog' }}@endsection
@extends('user.layout')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    {{-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section> --}}
    <!-- End Breadcrumbs -->
    {{-- @foreach ($blog as $blok) --}}


  

    <!-- Main News Slider Start -->
    <div class="container-fluid mt-5">
      <div class="row pt-4">
          <div class="col-lg-7 px-0">
              <div class="owl-carousel main-carousel position-relative">

                  <div class="position-relative overflow-hidden" style="height: 500px;">
                      <img class="img-fluid h-100" src="img/news-800x500-1.jpg" style="object-fit: cover;">
                      <div class="overlay">
                          <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                  href="">Business</a>
                              <a class="text-white" href="">Jan 01, 2045</a>
                          </div>
                          <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                      </div>
                  </div>
                  <div class="position-relative overflow-hidden" style="height: 500px;">
                      <img class="img-fluid h-100" src="img/news-800x500-2.jpg" style="object-fit: cover;">
                      <div class="overlay">
                          <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                  href="">Business</a>
                              <a class="text-white" href="">Jan 01, 2045</a>
                          </div>
                          <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                      </div>
                  </div>
                  <div class="position-relative overflow-hidden" style="height: 500px;">
                      <img class="img-fluid h-100" src="img/news-800x500-3.jpg" style="object-fit: cover;">
                      <div class="overlay">
                          <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                  href="">Business</a>
                              <a class="text-white" href="">Jan 01, 2045</a>
                          </div>
                          <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-5 px-0">
              <div class="row mx-0">
                  <div class="col-md-6 px-0">
                      <div class="position-relative overflow-hidden" style="height: 250px;">
                          <img class="img-fluid w-100 h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-2">
                                  <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                      href="">Business</a>
                                  <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                              </div>
                              <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 px-0">
                      <div class="position-relative overflow-hidden" style="height: 250px;">
                          <img class="img-fluid w-100 h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-2">
                                  <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                      href="">Business</a>
                                  <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                              </div>
                              <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 px-0">
                      <div class="position-relative overflow-hidden" style="height: 250px;">
                          <img class="img-fluid w-100 h-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-2">
                                  <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                      href="">Business</a>
                                  <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                              </div>
                              <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 px-0">
                      <div class="position-relative overflow-hidden" style="height: 250px;">
                          <img class="img-fluid w-100 h-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-2">
                                  <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                      href="">Business</a>
                                  <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                              </div>
                              <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Main News Slider End -->


  <!-- Breaking News Start -->
  <div class="container-fluid bg-dark py-3 mb-3">
      <div class="container">
          <div class="row align-items-center bg-dark">
              <div class="col-12">
                  <div class="d-flex justify-content-between">
                      <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                      <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                          style="width: calc(100% - 170px); padding-right: 90px;">
                          <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                          <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Breaking News End -->

  <!-- Featured News Slider Start -->
  <div class="container-fluid pt-5 mb-3">
      <div class="container">
          <div class="section-title">
              <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
          </div>
          <div class="container">
          <div class="owl-carousel news-carousel carousel-item-4 position-relative">
              <div class="position-relative overflow-hidden" style="height: 300px;">
                  <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                  <div class="overlay">
                      <div class="mb-2">
                          <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                              href="">Business</a>
                          <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                      </div>
                      <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                  </div>
              </div>
              <div class="position-relative overflow-hidden" style="height: 300px;">
                  <img class="img-fluid h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                  <div class="overlay">
                      <div class="mb-2">
                          <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                              href="">Business</a>
                          <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                      </div>
                      <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                  </div>
              </div>
              <div class="position-relative overflow-hidden" style="height: 300px;">
                  <img class="img-fluid h-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">
                  <div class="overlay">
                      <div class="mb-2">
                          <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                              href="">Business</a>
                          <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                      </div>
                      <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                  </div>
              </div>
              <div class="position-relative overflow-hidden" style="height: 300px;">
                  <img class="img-fluid h-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">
                  <div class="overlay">
                      <div class="mb-2">
                          <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                              href="">Business</a>
                          <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                      </div>
                      <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                  </div>
              </div>
              <div class="position-relative overflow-hidden" style="height: 300px;">
                  <img class="img-fluid h-100" src="img/news-700x435-5.jpg" style="object-fit: cover;">
                  <div class="overlay">
                      <div class="mb-2">
                          <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                              href="">Business</a>
                          <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                      </div>
                      <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Featured News Slider End -->


  <!-- News With Sidebar Start -->
  <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="row">
                      <div class="col-12">
                          <div class="section-title">
                              <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                              <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                          </div>
                      </div>

                      @foreach ($blog as $blo)
                      <div class="col-lg-6">
                          <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                              <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                              <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                  <div class="mb-2">
                                      <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Category</a>
                                  </div>
                                  <div class="mb-2">
                                      <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ $blo['judul'] }}</a>
                                  </div>
                                  <a class="text-body" href=""><small>{{ $blo['created_at'] }}</small></a>
                              </div>
                          </div>
                      </div>
                      @endforeach

                  </div>
              </div>
              
              <div class="col-lg-4">
                
                  <!-- Popular News Start -->
                  <div class="mb-3">
                      <div class="section-title mb-0">
                          <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                      </div>
                      <div class="bg-white border border-top-0 p-3">
                          <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                              <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                              <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                  <div class="mb-2">
                                      <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                      <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                  </div>
                                  <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                              </div>
                          </div>
                          <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                              <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
                              <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                  <div class="mb-2">
                                      <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                      <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                  </div>
                                  <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                              </div>
                          </div>
                          <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                              <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">
                              <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                  <div class="mb-2">
                                      <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                      <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                  </div>
                                  <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                              </div>
                          </div>
                          <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                              <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">
                              <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                  <div class="mb-2">
                                      <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                      <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                  </div>
                                  <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                              </div>
                          </div>
                          <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                              <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">
                              <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                  <div class="mb-2">
                                      <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                      <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                  </div>
                                  <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Popular News End -->

                  <!-- Tags Start -->
                  <div class="mb-3">
                      <div class="section-title mb-0">
                          <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                      </div>
                      <div class="bg-white border border-top-0 p-3">
                          <div class="d-flex flex-wrap m-n1">
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                              <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                          </div>
                      </div>
                  </div>
                  <!-- Tags End -->

                  
                  <!-- Social Follow Start -->
                  <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Fans</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Connects</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                            <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Subscribers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                            <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->


              </div>
          </div>
      </div>
  </div>
  <!-- News With Sidebar End -->
</div>
@endsection