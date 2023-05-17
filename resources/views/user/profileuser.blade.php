@section('title') {{ 'Profile' }}@endsection
@extends('user.layout')
@section('content')
    
<div class="container my-4" style="padding-top: 5rem">
  
  <header class="pt-3 pb-5 bg-white">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="{{ asset('storage/img/'. $profile->img) }}" alt="Profile Image" class="rounded-circle mr-4 profile-image-desktop" style="width: 125px; height: 125px; object-fit: cover;">
            <div class="d-flex flex-column">
                <h1 class="h4 font-weight-bold">
                  {{ $profile->username }} 
                  @if($profile->centang == '1')
                    <i class="fas fa-check-circle text-primary"></i>
                  @endif
                </h1>
                <div class="d-flex align-items-center">
                    <span class="mr-4"><strong>{{ $countpost }}</strong> posts</span>
                    <span class="mr-4"><strong>{{ $countgaleri }}</strong> photos</span>
                    <span><strong>{{ $countperpus }}</strong> library</span>
                </div>
                  @if($profile->kaderisasi == 'Belum Mapaba')
                    <button class="btn btn-danger">Belum Mapaba</button>
                  @endif   
                  @if($profile->kaderisasi == 'Mapaba')
                    <button class="btn btn-success">Kader Muttaqid</button>
                  @endif   
                  @if($profile->kaderisasi == 'PKD')
                    <button class="btn btn-success">Kader Mujjahid</button>
                  @endif   
                  @if($profile->kaderisasi == 'PKL')
                    <button class="btn btn-success">Kader Mujtahid</button>
                  @endif   
                  @if($profile->kaderisasi == 'PKN')
                    <button class="btn btn-success">Kader PKN</button>
                  @endif   
                <p class="mt-2">{{ $profile->bio }}</p>
            </div>
        </div>
    </div>
</header>

	<br>
	<section class="galeri">
		<div class="galeri-info">
			<div class="li-2">
				<ul class="list-inline">
					<li><b><hr></b></li>
					<li><b></b></li>
					<li><b>{{ $countgaleri }}</b> Foto Terbaru</li>
					<li><b></b>dari {{ $profile->username }}</li>
          <li><b><hr></b></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="galeri-grid">

        @foreach ($profilegaleri as $item)
        <div class="galeri-item">
          <img src="{{ asset('storage/img/'. $item->img) }}" alt="Gallery Image" class="img-fluid">
        </div>
      @endforeach

			</div>
		</div>
  </div>
	</section>

  @endsection
