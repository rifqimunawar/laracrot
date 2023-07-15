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
            @foreach ($posts as $post)
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

          <div>
              <a href="#" class="btn btn-block btn-primary btn-lg mb-3">Nu Online</a>
          </div>

          <div class="row">
           @foreach ($data['users'] as $nuonline)
             <div class="col-6 mb-2">
                 <a href="{{ route('nuShow', ['slug' => $nuonline['slug']]) }}">
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
<!-- Share Action Sheet -->
<div class="modal fade action-sheet inset" id="actionSheetShare" tabindex="-1" role="dialog">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title">Share with</h5>
         </div>
         <div class="modal-body">
             <ul class="action-button-list">
                 <li>
                     <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                         <span>
                             <ion-icon name="logo-facebook"></ion-icon>
                             Facebook
                         </span>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                         <span>
                             <ion-icon name="logo-twitter"></ion-icon>
                             Twitter
                         </span>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                         <span>
                             <ion-icon name="logo-instagram"></ion-icon>
                             Instagram
                         </span>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                         <span>
                             <ion-icon name="logo-linkedin"></ion-icon>
                             Linkedin
                         </span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
</div>
<!-- * Share Action Sheet -->
@endsection