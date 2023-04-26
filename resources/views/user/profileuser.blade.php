@section('title') {{ 'Profile' }}@endsection
@extends('user.layout')
@section('content')
    
<div class="container my-4" style="padding-top: 4rem">
  <main id="main" class="main">

    <div class="pagetitle mt-4">
      <h1>Profile</h1>

      <div class="profile-header">
        <div class="profile-picture">
          <img src="profile-picture.jpg" alt="Profile">
        </div>
        <div class="profile-info">
          <h1>Jane Doe</h1>
          <p>123 Followers | 456 Following</p>
          <button>Follow</button>
        </div>
      </div>
      
      <div class="post-gallery">
        <div class="post-gallery-header">
          <button>Posts</button>
          <button>Galleries</button>
        </div>
        <div class="post-gallery-body">
          <!-- List of posts or galleries goes here -->
        </div>
      </div>
      

    </div>

  </main><!-- End #main -->
</div>

  @endsection