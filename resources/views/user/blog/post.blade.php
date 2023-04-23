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
                    <header class="mb-4 pt-5">
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
                            <i class="bi bi-person-fill mx-2"> Upload by:</i>{{ $post->user->username }}
                            <i class="bi bi-eye-fill mx-2"> Dilihat: </i>  {{ $post->views }} Kali
                        </div>
                    </header>
                    
                    <section class="mb-5">
                        <p class="fs-5 mb-4">
                            {!! $post->content !!}
                        </p>
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
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            <form method="POST" class="mb-4" action="{{ route('comments.store') }}">
                              @csrf
                              <input type="hidden" name="post_id" value="{{ $post->id }}">
                              <textarea name="comment" required class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                              <button type="submit" class="btn">Kirim Komentar</button>
                            </form>
                            {{-- <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form> --}}
                            <!-- Comment with nested comments-->
                            
                            @foreach($post->comments as $comment)
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                  <img class="rounded-circle" style="width: 50px" src="{{ asset('storage/img/user.png') }}" alt=""/></div>
                                <div class="ms-3">
                                    <h6 class="fst-italic fw-semibold">{{ $comment->user->username }}</h6>
                                    <h6 class="fw-medium">{{ $comment->comment }}</h6>
                                    <h8 class="fw-light">{{ $comment->created_at->diffForHumans() }}</h8>
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
