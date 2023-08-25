@section('title') {{ 'Blog' }}@endsection
@extends('user.layout')
@section('content')
    <!-- Page content-->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article class="my-5">
                    <!-- Post header-->
                    <header class="mb-4">
                        @if($post->image)
                        <!-- Preview image figure-->
                        <figure class="mb-4">
                            <img class="img-fluid rounded" src="{{ asset('storage/img/' . $post->image) }}" alt="..."/>
                        </figure>
                        <!-- Post content-->
                        @endif
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted my-2">
                            <i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }} 
                            <i class="bi bi-person-fill mx-2"> Upload by:</i> <a href="/profile/{{ $post->user->slug }}"> 
                              {{ $post->user->username }} @if($post->user->centang == '1') <i class="fas fa-check-circle text-primary"></i>@endif</a>
                            <i class="bi bi-eye-fill mx-2"> Dilihat: </i>  {{ $post->views }} Kali
                        </div>
                    </header>
                    
                    <section class="mb-5">
                      <div class="card bg-light">
                        <div class="card-body" style="color: black">
                          <p class="fs-5 mb-4">
                              {!! $post->content !!}
                            </p>
                          </div>
                        </div>
                    </section>
                    <!-- Post tags-->
                    @if($post->tags->count())
                        <i class="bi bi-tags"></i> Tags:
                            @foreach($post->tags as $tag)
                                <a class="badge bg-secondary text-decoration-none link-light"
                                        href="{{ route('tag', $tag->slug) }}">{{ $tag->title }}</a>
                            @endforeach
                    @endif
                </article>

                <div class="row justify-center pt-30">
                  <div class="col-xl-8 col-lg-9 col-md-11">
                      <div class="row y-gap-20 justify-between items-center">
                          <div class="col-auto">
                              <div class="d-flex items-center">
                                  <div class="lh-1 text-dark-1 fw-500 mr-20 ">Share</div>
                                  <div class="d-flex x-gap-15">
                                      <a target="_blank"
                                          href="https://www.facebook.com/sharer.php?u={{ route('post.details', $post->slug) }}"
                                          title="Share To Facebook">
                                          <i class="fab fa-facebook-f pl-2 pr-2 ml-3 mb-2 btn btn-success sm-btn rounded"></i>
                                      </a>
                                      <a target="_blank"
                                          href="https://api.whatsapp.com/send?text={{ route('post.details', $post->slug) }} {{ $post->title }}"
                                          title="Share To Whatsapp">
                                          <i class="fab fa-whatsapp pl-2 pr-2 ml-3 mb-2 btn btn-success sm-btn rounded"></i>
                                      </a>
                                      <a target="_blank"
                                          href="https://twitter.com/share?url={{ route('post.details', $post->slug) }}&text={{ $post->title }}"
                                          title="Share To Twitter">
                                          <i class="fab fa-twitter pl-2 pr-2 ml-3 mb-2 btn btn-success sm-btn rounded"></i></a>
                                      <a target="_blank"
                                          href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('post.details', $post->slug) }}&title={{ $post->title }}"
                                          title="Share To Linkedin">
                                          <i class="fab fa-linkedin-in pl-2 pr-2 ml-3 mb-2 btn btn-success sm-btn rounded"></i>
                                      </a>
                                      <a target="_blank"
                                          href="mailto:?subject={{ $post->title }}&body=Check out this site: {{ route('post.details', $post->slug) }}"
                                          title="Share by Email';" title="Share Via Email">
                                          <i class="far fa-envelope pl-2 pr-2 ml-3 mb-2 btn btn-success sm-btn rounded"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            <form method="POST" class="mb-4" action="{{ route('comments.store') }}">
                              @csrf
                              <input type="hidden" name="post_id" value="{{ $post->id }}">
                              <textarea name="comment" required class="form-control" rows="3" placeholder="Komentar Anda...."></textarea>
                              <button type="submit" class="btn btn-success">Komentar</button>
                            </form>
                            
                            @foreach($post->comments as $comment)
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                  <img class="rounded-circle" style="width: 50px; height:50px; object-fit:cover" src="{{ asset('storage/img/' . $comment->user->img ) }}" alt=""/></div>
                                <div class="ms-3">
                                    <h6 class="fst-italic fw-semibold"> <a href="/profile/{{ $comment->user->slug }}">{{ $comment->user->username }} @if($comment->user->centang == '1') <i class="fas fa-check-circle text-primary"></i>@endif</a></h6>
                                    <p class="fst-normal">{{ $comment->comment }}</p>
                                    <p class="fw-light">{{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>

            @include('user.partials.sidebar')

        </div>
    </div>
@endsection
