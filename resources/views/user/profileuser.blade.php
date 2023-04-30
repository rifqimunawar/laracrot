@section('title') {{ 'Profile' }}@endsection
@extends('user.layout')
@section('content')
    
<div class="container my-4" style="padding-top: 4rem">
  
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-4" style="width: 300px; height: 400px; margin: 0; padding: 0;">
        <img src="{{ asset('storage/img/blog_-1680510690.jpg') }}" class="img-fluid" style="object-fit: cover; width: 300px; height: 300px; overflow: hidden;">
      </div>
      <div class="col-md-4" style="width: 300px; height: 400px; padding:0px; margin:0px">
        <img src="{{ asset('storage/img/galeri_-1681307502.jpg') }}" class="img-fluid" style="object-fit: cover; width: 300px; height: 300px; overflow: hidden;">
      </div>
      <div class="col-md-4" style="width: 300px; height: 400px; padding:0px; margin:0px">
        <img src="{{ asset('storage/img/profile.png') }}" class="img-fluid" style="object-fit: cover; width: 300px; height: 300px; overflow: hidden;">
      </div>
    </div>
  </div>  

</main>
</div>

  @endsection
  