@section('title') {{ 'Details' }}@endsection
@extends('admin.layout')
@section('content')

<div class="row">
  <div class="col-lg-12 card my-3">
    <h4 class="text-center my-2">Profile Details</h4>
  </div>
</div>
{{-- @foreach ($users as $kader) --}}
    
<div class="row">
  <div class="col-lg-4">
    <div class="card mb-4">
      <div class="card-body text-center">
        <img src="{{ asset('storage/img/' . $users->img ) }}" alt="avatar"
          class="rounded-circle img-fluid" style="width: 150px; height:150px; object-fit:cover">
        <h5 class="my-3">{{ $users->name }}</h5>
        {{-- <h6 class="my-3">Kelamin : {{ $users->kelamin }}</h6> --}}
        <h6 class="my-3">Kaderisasi {{ $users->kaderisasi }}</h6>
        <h6 class="my-3">Rayon {{ $users->rayon->rayon }}</h6>
        <h6 class="my-3">Prodi {{ $users->prodi }}</h6>

        {{-- @if ($users->slug)
            <a href="/profile/{{ $users->slug }}" class="btn btn-secondary sm">Profile</a>
        @else
            <button class="btn btn-danger">Belum Regis</button>
        @endif --}}

        <div class="d-flex justify-content-center mb-2">
          {{-- <button type="button" class="btn btn-primary">Profile</button> --}}
          {{-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-8">
    <div class="card mb-4">
      <div class="card-body">

        <div class="row pt-3">
          <div class="col-sm-3">
            <p class="mb-0">Nama Lengkap</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->name }}</p>
          </div>
        </div><hr>

        <div class="row pt-3">
          <div class="col-sm-3">
            <p class="mb-0">NIM</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->nim }}</p>
          </div>
        </div><hr>
        
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Alamat</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">
              {{ $provinsi->name ?? '' }},
              {{ $city->name ?? '' }},
              {{ $kecamatan->name ?? '' }}, 
              {{ $kelurahan->name ?? '' }} <br> (
                  {{ $users->alamat ?? '' }}
              )           

              
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Pesantren</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->pesantren }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Tempat Tgl Lahir</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->t_lahir }}, {{ $users->ttl}}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">SMA/Sederajat</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->sma }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Tahun Lulus</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->thn_lulus }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Tahun Kuliah</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->thn_kuliah }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Rayon</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->rayon->rayon }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Mapaba Tahun</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->thn_mapaba }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">PKD Tahun</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->thn_pkd }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">PKL Tahun</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->pkl }}</p>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">PKN Tahun</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">{{ $users->pkn }}</p>
          </div>
        </div><hr>

        <div class="text-center">
          <a href="{{ route('user.index') }}" class="btn btn-warning sm">Kembali</a>
          <a href="/admin/user/download-pdf/{{ $users->id }}" class="btn btn-success sm">Unduh KTA</a>
        </div>

      </div>
      
      
      </div>
    </div>
  </div>
  {{-- @endforeach --}}

</div>
        
        

    </div>
</div>
@endsection