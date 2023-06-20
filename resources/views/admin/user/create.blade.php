@section('title') {{ 'User' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

      <div class="text-center pt-5 mt-5">
        <h4>Tambah Kader</h4>
      </div>
      <div class="row pt-4 mt-5">
        <div class="col-md-6">

          <form action="{{ route('store.user') }}" method="post" enctype="multipart/form-data" >
            @csrf 

            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap Sesuai KTP</label>
              <input type="text" name="name" class="form-control
              @error('name') is-invalid @enderror" id="name">
              
              @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" name="nim"id="nim"  class="form-control
              @error('nim') is-invalid @enderror" id="nim" required>
              
              @error('nim')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="pt-3 text-end">
              <a href="/admin/user" class="btn btn-warning btn-sm">Kembali</a>
              <button type="submit" class="btn btn-success btn-sm" >Simpan</button>
            </div>

          </form>

        </div>
        
        {{-- <div class="col-md-6">
          <div class="text-center">
            <img src="{{ asset('storage/img/' . $user->img ) }}" class="rounded" alt="..." 
            style="width: 80%; border-radius:20px;box-shadow: 4px 5px 8px rgba(0, 0, 0, 0.3)">
          </div>
        </div> --}}
    </div>

</div>
@endsection