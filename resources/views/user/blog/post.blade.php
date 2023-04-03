@section('title') {{ 'Blog' }}@endsection
@extends('user.layout')
@section('content')
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">
                            <i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }}
                        </div>
                        <!-- Post tags-->
                        @if($post->tags->count())
                            <i class="bi bi-tags"></i> Tags:
                            @foreach($post->tags as $tag)
                                <a class="badge bg-secondary text-decoration-none link-light"
                                   href="{{ route('tag', $tag->slug) }}">{{ $tag->title }}</a>
                            @endforeach
                        @endif
                    </header>
                    @if($post->image)
                        <!-- Preview image figure-->
                        <figure class="mb-4">
                            <img class="img-fluid rounded" src="{{ asset($post->image) }}" alt="..."/>
                        </figure>
                        <!-- Post content-->
                    @endif
                    <section class="mb-5">
                        <p class="fs-5 mb-4">
                            {!! $post->content !!}
                        </p>
                    </section>
                </article>
                <!-- Comments section-->
                {{--                <section class="mb-5">--}}
                {{--                    <div class="card bg-light">--}}
                {{--                        <div class="card-body">--}}
                {{--                            <!-- Comment form-->--}}
                {{--                            <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>--}}
                {{--                            <!-- Comment with nested comments-->--}}
                {{--                            <div class="d-flex mb-4">--}}
                {{--                                <!-- Parent comment-->--}}
                {{--                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>--}}
                {{--                                <div class="ms-3">--}}
                {{--                                    <div class="fw-bold">Commenter Name</div>--}}
                {{--                                    If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.--}}
                {{--                                    <!-- Child comment 1-->--}}
                {{--                                    <div class="d-flex mt-4">--}}
                {{--                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>--}}
                {{--                                        <div class="ms-3">--}}
                {{--                                            <div class="fw-bold">Commenter Name</div>--}}
                {{--                                            And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <!-- Child comment 2-->--}}
                {{--                                    <div class="d-flex mt-4">--}}
                {{--                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>--}}
                {{--                                        <div class="ms-3">--}}
                {{--                                            <div class="fw-bold">Commenter Name</div>--}}
                {{--                                            When you put money directly to a problem, it makes a good headline.--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <!-- Single comment-->--}}
                {{--                            <div class="d-flex">--}}
                {{--                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>--}}
                {{--                                <div class="ms-3">--}}
                {{--                                    <div class="fw-bold">Commenter Name</div>--}}
                {{--                                    When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </section>--}}
            </div>

            @include('user.partials.sidebar')

        </div>
    </div>
@endsection
