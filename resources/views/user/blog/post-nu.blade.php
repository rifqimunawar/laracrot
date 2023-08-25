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
                        <!-- Preview image figure-->
                        <figure class="mb-4">
                           <img class="img-fluid rounded" src="{{ $full }}" alt="...">
                       </figure>                     
                        <!-- Post content-->
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted my-2">
                            <i class="bi bi-clock"></i> {{ $date }} 
                            <i class="bi bi-person-fill mx-2"> Upload by: {{ $author }}</i>
                            <i class="bi bi-info-square"> Sumber: </i>  <a href="https://www.nu.or.id/">NuOnline</a>
                        </div>
                    </header>
                    
                    <section class="mb-5">
                      <div class="card bg-light">
                       <div class="card-body" style="color: black">
                          <p class="fs-5 mb-4" style="color: #222222">
                              {{ $preview }}
                            </p>
                            <a href="{{ $url }}">
                             <div class="text-center p-4">
                              <h5>Selengkapnya...</h5>
                             </div>
                           </div>
                            </a>
                            
                        </div>
                    </section>
                    <!-- Post tags-->
                    {{-- @if($post->tags->count())
                        <i class="bi bi-tags"></i> Tags:
                            @foreach($post->tags as $tag)
                                <a class="badge bg-secondary text-decoration-none link-light"
                                        href="{{ route('tag', $tag->slug) }}">{{ $tag->title }}</a>
                            @endforeach
                    @endif --}}
                </article>
{{-- 
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
              </div> --}}
{{-- 
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
                </section> --}}
            </div>

            <!-- Side Bar -->
            <div class="col-lg-4">
            
             <!-- Popular News Start -->
             <div class="mb-3">
                 <div class="section-title mb-0">
                     <h4 class="m-0 text-uppercase font-weight-bold">NuOnline</h4>
                 </div>
                 <div class="bg-white border border-top-0 p-3">
         
         
                  @foreach (array_slice($data['users'], 0, 6) as $nuonline)
                     <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                         @if (isset($nuonline['image']['thumbnail']))
                            <img class="img-fluid" src="{{ $nuonline['image']['thumbnail'] }}" alt="" style="height: 100px; width: 150px; overflow: hidden; object-fit: cover;">
                          @endif
                         <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                             <div class="">
                                 <a class="badge badge-primary text-uppercase font-weight-semi-bold pt-1 mr-2" href="{{ route('nushow', ['slug' => $nuonline['slug']]) }}">{{ $nuonline['category']['name'] }}</a>
                                 {{-- <p class="text-body" style="padding: 0px; margin: 0px" href="" ><small>{{ $pos->views }} Kali Dilihat</small></p> --}}
                             </div>
                             <a class="h6 m-0 text-secondary font-weight-bold" href="{{ route('nushow', ['slug' => $nuonline['slug']]) }}">{{ Str::limit($nuonline['title'], 30) }}</a>
                         </div>
                     </div>
                     @endforeach
             <!-- Popular News End -->
                </div>
            </div>
           </div>


        </div>
    </div>
@endsection
