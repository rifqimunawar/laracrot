@section('title') {{ 'Profile' }}@endsection
@extends('user.layout')
@section('content')
    
<div class="container my-4" style="padding-top: 4rem">
  
  <header>
		<div class="container mt-4">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="profile-image" >
						<img src="{{ asset('storage/img/blog_-1680510690.jpg') }}" alt="Profile Image" class="rounded-circle">
					</div>
				</div>
				<div class="col-md-9 col-sm-12">
					<div class="profile-info">
						<h1>Who Am I</h1>
						<p>siapa_aku?</p>
                        <div class="li">
                            <li><b>0</b> post</li>
                            <li><b>1960</b> followers</li>
                            <li><b>63</b> following</li>
                        </div>
                        <li>Profile Isntagram</li>
                        <li><i>Siapa Anak Teknik?</i></li>
                        <li><i>Teknik Yang Mana?</i></li>
						<button class="btn btn-primary">Edit Profile</button>
                        <br>
					</div>
          <div class="ststistik">statistik</div>
				</div>
			</div>
		</div>
	</header>
	<br>
	<section class="galeri">
		<div class="galeri-info">
			<div class="li-2">
				<ul class="list-inline">
					<li><b>0</b> post</li>
					<li><b>1960</b> followers</li>
					<li><b>63</b> following</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="galeri-item">
						<img src="https://tse3.mm.bing.net/th?id=OIP.1rXqIJSOYCJGm9x9xk2Z3gHaJQ&pid=Api&P=0" alt="Gallery Image" class="img-fluid">
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="galeri-item">
						<img src="https://tse2.mm.bing.net/th?id=OIP.Tiz1sbGfyPFwhfRwKYOfJAHaJQ&pid=Api&P=0" alt="Gallery Image" class="img-fluid">
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="galeri-item">
						<img src="https://tse2.mm.bing.net/th?id=OIP.ER4k-d8XgZaDGDDLXgJ-rwAAAA&pid=Api&P=0" alt="Gallery Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
  </div>
	</section>

  @endsection
