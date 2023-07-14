@section('title') {{ 'Posts' }}@endsection
    @extends('mobile.layout')
@section('content')

    <!-- App Header -->
    <div class="appHeader">
     <div class="left">
         <a href="#" class="headerButton goBack">
             <ion-icon name="chevron-back-outline"></ion-icon>
         </a>
     </div>
     <div class="pageTitle">
         Blog & News
     </div>
     <div class="right">
         <a href="#" class="headerButton toggle-searchbox">
             <ion-icon name="search-outline"></ion-icon>
         </a>
     </div>
 </div>
 <!-- * App Header -->

 
    <!-- Search Component -->
    <div id="search" class="appHeader">
     <form class="search-form">
         <div class="form-group searchbox">
             <input type="text" class="form-control" placeholder="Search...">
             <i class="input-icon icon ion-ios-search"></i>
             <a href="#" class="ms-1 close toggle-searchbox"><i class="icon ion-ios-close-circle"></i></a>
         </div>
     </form>
 </div>
 <!-- * Search Component -->

     <!-- App Capsule -->
     <div id="appCapsule">

      <div class="section tab-content mt-2 mb-2">

          <div class="row">
            @foreach ($posts as $posts)
              <div class="col-6 mb-2">
                  <a href="">
                      <div class="blog-card">
                          <img src="{{ asset('storage/img/' . $posts->image) }}" alt="image" class="imaged"
                          style="width:100%; height:200px; object-fit:cover;">
                          <div class="text">
                              <h4 class="title">{{ Str::limit($posts->title, 30) }}</h4>
                          </div>
                      </div>
                  </a>
              </div>
              @endforeach
          </div>

          <div>
              <a href="#" class="btn btn-block btn-primary btn-lg">Nu Online</a>
          </div>

          <div class="row">
           @foreach ($data['users'] as $nuonline)
             <div class="col-6 mb-2">
                 <a href="">
                     <div class="blog-card">
                         <img src="{{ $nuonline['image']['thumbnail']  }}" alt="image" class="imaged"
                         style="width:100%; height:200px; object-fit:cover;">
                         <div class="text">
                             <h4 class="title">{{ Str::limit($nuonline['title'], 30) }}</h4>
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