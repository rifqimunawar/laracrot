@section('title') {{ 'Category' }}@endsection
@extends('user.layout')
@section('content')

  <!-- Latest News Start -->
  <div class="container-fluid my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Posts by category "{{ $category->title }}"</h4>
                        </div>
                    </div>

                    @foreach ($posts as $post)
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                          @if ($post->image)
                          <img class="img-fluid" src="{{ asset('storage/img/' . $post->image) }}" alt="" style="height:100px; width:150px; overflow:hidden; object-fit: cover;">
                          @endif
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}</a>
                                </div>
                                <div class="mb-2">
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{ route('post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                </div>
                                <h8 class="text-secondary"><small>
                                  {{ $post->created_at }}
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

@endsection