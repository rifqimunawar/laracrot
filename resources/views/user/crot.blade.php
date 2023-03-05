@extends('.user.layout')
@section('content')
    
    <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-5">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12">
                  <div class="d-flex justify-content-between">
                      <div class="section-title border-right-0 mb-0" style="width: 180px;">
                          <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                      </div>
                      <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                          style="width: calc(100% - 180px); padding-right: 100px;">
                          <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                          <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Breaking News End -->


  <!-- News With Sidebar Start -->
  <div class="container-fluid">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <!-- News Detail Start -->
                  <div class="position-relative mb-3">
                      <img class="img-fluid w-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                      <div class="bg-white border border-top-0 p-4">
                          <div class="mb-3">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                  href="">Business</a>
                              <a class="text-body" href="">Jan 01, 2045</a>
                          </div>
                          <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">Lorem ipsum dolor sit amet elit vitae porta diam...</h1>
                          <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                              magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                              amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                              sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                              aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                              sit stet no diam kasd vero.</p>
                          <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                              vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                              nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                              ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                              clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                              justo dolore sit invidunt.</p>
                          <h3 class="text-uppercase font-weight-bold mb-3">Lorem ipsum dolor sit amet elit</h3>
                          <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/news-800x500-1.jpg">
                          <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                              invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                              lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                              rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                              sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                              lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                              sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                              dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                              sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                              duo tempor sea kasd clita ipsum et.</p>
                          <h5 class="text-uppercase font-weight-bold mb-3">Lorem ipsum dolor sit amet elit</h5>
                          <img class="img-fluid w-50 float-right mr-4 mb-2" src="img/news-800x500-2.jpg">
                          <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                              invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                              lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                              rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                              sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                              lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                              sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                              dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                              sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                              duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat
                              aliquyam et ut.</p>
                      </div>
                      <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                          <div class="d-flex align-items-center">
                              <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                              <span>John Doe</span>
                          </div>
                          <div class="d-flex align-items-center">
                              <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                              <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                          </div>
                      </div>
                  </div>
                  <!-- News Detail End -->

                  <!-- Comment List Start -->
                  <div class="mb-3">
                      <div class="section-title mb-0">
                          <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                      </div>
                      <div class="bg-white border border-top-0 p-4">
                          <div class="media mb-4">
                              <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                              <div class="media-body">
                                  <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                  <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                      accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                  <button class="btn btn-sm btn-outline-secondary">Reply</button>
                              </div>
                          </div>
                          <div class="media">
                              <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                              <div class="media-body">
                                  <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                  <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                      accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                  <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                  <div class="media mt-4">
                                      <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                          style="width: 45px;">
                                      <div class="media-body">
                                          <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                          <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                              labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                              eirmod ipsum.</p>
                                          <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Comment List End -->

                  <!-- Comment Form Start -->
                  <div class="mb-3">
                      <div class="section-title mb-0">
                          <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                      </div>
                      <div class="bg-white border border-top-0 p-4">
                          <form>
                              <div class="form-row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label for="name">Name *</label>
                                          <input type="text" class="form-control" id="name">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label for="email">Email *</label>
                                          <input type="email" class="form-control" id="email">
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="website">Website</label>
                                  <input type="url" class="form-control" id="website">
                              </div>

                              <div class="form-group">
                                  <label for="message">Message *</label>
                                  <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                              </div>
                              <div class="form-group mb-0">
                                  <input type="submit" value="Leave a comment"
                                      class="btn btn-primary font-weight-semi-bold py-2 px-3">
                              </div>
                          </form>
                      </div>
                  </div>
                  <!-- Comment Form End -->
              </div>

              <div class="col-lg-4">
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

                  <!-- Ads Start -->
                  <div class="mb-3">
                      <div class="section-title mb-0">
                          <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                      </div>
                      <div class="bg-white text-center border border-top-0 p-3">
                          <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                      </div>
                  </div>
                  <!-- Ads End -->

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

                  <!-- Newsletter Start -->
                  <div class="mb-3">
                      <div class="section-title mb-0">
                          <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                      </div>
                      <div class="bg-white text-center border border-top-0 p-3">
                          <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                          <div class="input-group mb-2" style="width: 100%;">
                              <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                              <div class="input-group-append">
                                  <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                              </div>
                          </div>
                          <small>Lorem ipsum dolor sit amet elit</small>
                      </div>
                  </div>
                  <!-- Newsletter End -->

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
              </div>
          </div>
      </div>
  </div>
  <!-- News With Sidebar End -->

@endsection