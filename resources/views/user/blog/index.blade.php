@section('title')
    {{ 'Blog' }}
@endsection
@extends('user.layout')
@section('content')
    <!-- Main News Slider Start -->
    <div class="container-fluid mt-5">
        <div class="row pt-4">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">

                    @foreach ($recent_posts->take(3) as $post)
                        <div class="position-relative overflow-hidden" style="height: 682px;">
                            @if ($post->image)
                                <img class="img-fluid h-100" src="{{ asset('storage/img/' . $post->image) }}"
                                    style="object-fit: cover;">
                            @endif

                            <div class="overlay">
                                <div class="mb-0 overflow-hidden">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}</a>
                                    <h8 style="color: #fff">
                                        {{ $post->created_at->diffForHumans() }}
                                    </h8>
                                </div>
                                <a class="h3 m-0 text-white font-weight-bold text-decoration-none"
                                    href="{{ route('post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">

                    @foreach ($trending->take(4) as $post)
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 341px;">
                                @if ($post->image)
                                    <img class="img-fluid w-100 h-100" src="{{ asset('storage/img/' . $post->image) }}"
                                        style="object-fit: cover;">
                                @endif
                                <div class="overlay">
                                    <div class="mb-0">
                                        <a class="badge badge-warning text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}</a>
                                        <h9 style="color: #fff">
                                            {{ $post->created_at->diffForHumans() }}
                                        </h9>
                                    </div>
                                    <a class="h6 m-0 text-white font-weight-semi-bold"
                                        href="{{ route('post', ['slug' => $post->slug]) }}">{{ Str::limit($post->title, 50) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-md-6 px-0">
                      <div class="position-relative overflow-hidden" style="height: 250px;">
                          <img class="img-fluid w-100 h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-0">
                                  <a class="badge badge-primary font-weight-semi-bold p-2 mr-2"
                                      href="">Business</a>
                                  <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                              </div>
                              <a class="h6 m-0 text-white font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 px-0">
                      <div class="position-relative overflow-hidden" style="height: 250px;">
                          <img class="img-fluid w-100 h-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-0">
                                  <a class="badge badge-primary font-weight-semi-bold p-2 mr-2"
                                      href="">Business</a>
                                  <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                              </div>
                              <a class="h6 m-0 text-white font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 px-0">
                      <div class="position-relative overflow-hidden" style="height: 250px;">
                          <img class="img-fluid w-100 h-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-0">
                                  <a class="badge badge-primary font-weight-semi-bold p-2 mr-2"
                                      href="">Business</a>
                                  <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                              </div>
                              <a class="h6 m-0 text-white font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                          </div>
                      </div>
                  </div> --}}


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
                        <div class="bg-danger text-light text-center font-weight-medium py-2" style="width: 170px;">Breaking
                            News !!!!</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 200px); padding-right: 100px;">
                            @foreach ($recent_posts->take(2) as $post)
                                <div class="text-truncate"><a class="text-white font-weight-semi-bold"
                                        href="{{ route('post', ['slug' => $post->slug]) }}">{{ Str::limit($post->title, 50) }}</a>
                                </div>
                            @endforeach

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
                <h4 class="m-0 font-weight-bold">Featured News</h4>
            </div>
            <div class="container">
                <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                    @foreach ($old_posts->take(7) as $post)
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            @if ($post->image)
                                <img class="img-fluid h-100" src="{{ asset('storage/img/' . $post->image) }}"
                                    style="object-fit: cover;">
                            @endif
                            <div class="overlay">
                                <div class="mb-0">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}</a>
                                </div>
                                <a class="h6 m-0 text-white font-weight-semi-bold"
                                    href="{{ route('post', ['slug' => $post->slug]) }}">{{ Str::limit($post->title, 50) }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Featured News Slider End -->


        <!-- Latest News Start -->
        <div class="container-fluid my-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h4 class="m-0 font-weight-bold">Latest News</h4>
                                    <a class="text-secondary font-weight-medium text-decoration-none" href="">View
                                        All</a>
                                </div>
                            </div>

                            @foreach ($recent_posts as $post)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                        @if ($post->image)
                                            <img class="img-fluid" src="{{ asset('storage/img/' . $post->image) }}"
                                                alt=""
                                                style="height:100px; width:150px; overflow:hidden; object-fit: cover;">
                                        @endif
                                        <div
                                            class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                            <div class="mb-0">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                    href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}</a>
                                            </div>
                                            <div class="mb-0">
                                                <a class="h6 m-0 text-secondary font-weight-bold"
                                                    href="{{ route('post', ['slug' => $post->slug]) }}">{{ Str::limit($post->title, 30) }}</a>
                                            </div>
                                            <h8 class="text-secondary"><small>
                                                    {{ $post->created_at->diffForHumans() }}
                                                </small></h8>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- Latest News end -->


                    <!-- Sidebar -->
                    @include('user.partials.sidebar')
                </div>
            </div>
        </div>

        <!-- Nu-Online Start -->
        <div class="container-fluid my-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 font-weight-bold">Nu Online</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none"
                                href="https://www.nu.or.id/indeks">View All</a>
                        </div>
                    </div>

                    @foreach ($data['users'] as $nuonline)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                @if (isset($nuonline['image']['thumbnail']))
                                    <img class="img-fluid" src="{{ $nuonline['image']['thumbnail'] }}" alt=""
                                        style="height: 100px; width: 150px; overflow: hidden; object-fit: cover;">
                                @endif
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-0">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            href="{{ route('nushow', ['slug' => $nuonline['slug']]) }}">{{ $nuonline['category']['name'] }}</a>
                                    </div>
                                    <div class="mb-0">
                                        <a class="h6 m-0 text-secondary font-weight-bold"
                                            href="{{ route('nushow', ['slug' => $nuonline['slug']]) }}">{{ Str::limit($nuonline['title'], 40) }}</a>
                                    </div>
                                    <p class="text-secondary"><small>{{ $nuonline['date']['published'] }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Nu-Online Start -->

    </div>
    </div>
@endsection
