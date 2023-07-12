@section('title') {{ 'Search' }}@endsection
@extends('mobile.layout')
@section('content')


    <!-- App Header -->
    <div class="appHeader">
     <div class="left">
         <a href="#" class="headerButton goBack">
             <ion-icon name="chevron-back-outline"></ion-icon>
         </a>
     </div>
     <div class="pageTitle">Search</div>
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

 <!-- Extra Header -->
 <div class="extraHeader">
     <form class="search-form">
         <div class="form-group searchbox">
             <input type="text" class="form-control">
             <i class="input-icon">
                 <ion-icon name="search-outline"></ion-icon>
             </i>
         </div>
     </form>
 </div>
 <!-- * Extra Header -->

    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active full-height">


     <div class="section mt-1 mb-2">
         <div class="section-title">Found 43 results for "<span class="text-primary">Deposit</span>"</div>
         <div class="card">
             <ul class="listview image-listview media transparent flush">
                 <li>
                     <a href="#" class="item">
                         <div class="imageWrapper">
                             <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
                         </div>
                         <div class="in">
                             <div>
                                 What will be the value of bitcoin in the next...
                                 <div class="text-muted">Lorem ipsum dolor sit amet...</div>
                             </div>
                         </div>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="item">
                         <div class="imageWrapper">
                             <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w64">
                         </div>
                         <div class="in">
                             <div>
                                 Rules you need to know in business
                                 <div class="text-muted">Lorem ipsum dolor sit amet...</div>
                             </div>
                         </div>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="item">
                         <div class="imageWrapper">
                             <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w64">
                         </div>
                         <div class="in">
                             <div>
                                 10 easy ways to save your money
                                 <div class="text-muted">Lorem ipsum dolor sit amet...</div>
                             </div>
                         </div>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="item">
                         <div class="imageWrapper">
                             <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w64">
                         </div>
                         <div class="in">
                             <div>
                                 Follow the financial agenda with...
                                 <div class="text-muted">Lorem ipsum dolor sit amet...</div>
                             </div>
                         </div>
                     </a>
                 </li>
                 <li>
                     <a href="#" class="item">
                         <div class="imageWrapper">
                             <img src="assets/img/sample/photo/5.jpg" alt="image" class="imaged w64">
                         </div>
                         <div class="in">
                             <div>
                                 Does it make sense to invest in cryptocurrencies
                                 <div class="text-muted">Lorem ipsum dolor sit amet...</div>
                             </div>
                         </div>
                     </a>
                 </li>
             </ul>
         </div>
     </div>

     <div class="section mb-2">
         <a href="#" class="btn btn-block btn-secondary">Load More</a>
     </div>




 </div>
 <!-- * App Capsule -->