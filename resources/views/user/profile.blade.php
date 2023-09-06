@section('title') {{ 'Profile' }}@endsection
@extends('user.layout')
@section('content')
<div class="container my-4" style="padding-top: 5rem">
  
  <header class="pt-3 pb-5 bg-white">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="{{ asset('storage/img/'. $profile->img) }}" alt="Profile Image" class="rounded-circle mr-4 profile-image-desktop" style="width: 125px; height: 125px; object-fit: cover;">
            <div class="d-flex flex-column">
                <h3 class="h4 font-weight-bold">
                  {{ $profile->username }} 
                  @if($profile->centang == '1')
                    <i class="fas fa-check-circle text-primary"></i>
                  @endif
                </h3><br>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <a href="/account" class="btn btn-dark sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" >Edit profile</a>
                  @auth 
                    @if (in_array(auth()->user()->role_id, [1, 2, 3]))
                      <a href="/uploads" class="btn btn-dark sm m-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" >Uploads</a>
                    @endif
                  @endauth
                  <a href="/kta/user/download/pdf/{{ $profile->id }}/my-kta/" class="btn btn-dark sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" >KTA</a>
                </div>
                <div class="d-flex align-items-center">
                    <span class="mr-4"><strong>{{ $countpost }}</strong> posts</span>
                    <span class="mr-4"><strong>{{ $countgaleri }}</strong> photos</span>
                    <span><strong>{{ $countperpus }}</strong> library</span>
                </div>
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
<script>
$('textarea#summernote').summernote({
  placeholder: 'Sahabat bisa membuat tulisan disini',
  tabsize: 2,
  height: 100,
  toolbar: [
        ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link', 'picture', 'hr']],
        ['view', ['fullscreen', 'codeview']],
      ],
    });
</script>
  @endsection