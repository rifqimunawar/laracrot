@section('title') {{ 'Posts' }}@endsection
    @extends('mobile.layout')
@section('content')

     <!-- App Header -->
     <div class="appHeader">
      <div class="left">
          <a href="{{ route('mobilePost') }}" class="headerButton goBack">
              <ion-icon name="chevron-back-outline"></ion-icon>
          </a>
      </div>
      <div class="pageTitle">
          Nu Online
      </div>
      <div class="right">
          <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#actionSheetShare">
              <ion-icon name="share-social-outline"></ion-icon>
          </a>
      </div>
  </div>
  <!-- * App Header -->

  
    <!-- App Capsule -->
    <div id="appCapsule">


     <div class="section mt-2">
         <h1>
          {{ $title }}
         </h1>
         <figure>
             <img src="{{ $full }}" alt="image" class="imaged img-fluid">
         </figure>
         <div class="blog-header-info mt-2 mb-2">
             <div>
                 {{-- <img src="{{ asset('storage/img/' . $post->user->img) }}" alt="img" class="imaged"
                 style="width:24px; height:24px; object-fit:cover; border-radius:50%"> --}}
                 Sumber: <a href="#">Nu Online</a>
             </div>
             <div>
              {{ $date }} 
             </div>
         </div>
         <div class="lead"><p style="background: transparent">
          {!! $preview  !!}
         </p>
         </div>
     </div>

     <div class="section">
         <a href="#" class="btn btn-block btn-primary" data-bs-toggle="modal" data-bs-target="#actionSheetShare">
             <ion-icon name="share-outline"></ion-icon> Share This Post
         </a>
     </div>


     <div class="section mt-3">
         <h2>Related Posts</h2>
         <div class="row mt-3">
          @foreach ($trending as $post)
              
          <div class="col-6 mb-2">
                 <a href="{{ route('mobilePostShow', $post->slug) }}">
                     <div class="blog-card">
                         <img src="{{ asset('storage/img/' . $post->image) }}" alt="image" class="imaged"
                         style="width:100%; height:200px; object-fit:cover;">
                         <div class="text">
                             <h4 class="title">{{ Str::limit($post->title, 30) }}</h4>
                         </div>
                     </div>
                 </a>
             </div>
             @endforeach 

         </div>
     </div>


 </div>
 <!-- * App Capsule -->
@endsection