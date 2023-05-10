@section('title') {{ 'Pengurus' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
      <h4 class="text-center mb-2 mt-5">Edit Pengurus</h4>
      <div class="row">
        <div class="col-lg-8">
          <form action="/admin/pengurus/{{ $penguruses->id }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            <div class="my-3">
              <label for="img">Gambar Pengurus</label>
            <input type="file" class="form-control my-4" name="img" id="img" value="{{ $penguruses->img }}">
            </div>

            <div class="my-3">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $penguruses->name }}">
            </div>

            <div class="my-3">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $penguruses->jabatan }}">
            </div>

            <div class="my-3">
              <label for="ig">Link Profile Instagram </label>
              <input type="text" class="form-control" name="ig" id="ig" value="{{ $penguruses->ig }}">
            </div>

            <div class="my-3">
              <label for="fb">Link Profile Facebook </label>
              <input type="text" class="form-control" name="fb" id="fb" value="{{ $penguruses->fb }}">
            </div>

            <div class="my-3">
              <label for="twt">Link Profile Tweeter </label>
              <input type="text" class="form-control" name="twt" id="twt" value="{{ $penguruses->twt }}">
            </div>

            <div class="my-3">
                <a href="/admin/pengurus" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
        </form>
        </div>
        <div class="col-lg-4">
          <div class="text-center">
            <img class="pt-4" src="{{ asset('storage/img/' . $penguruses->img ) }}" alt="img" 
            style="width: 300px; height:300px; object-fit:contain;">
          </div>
        </div>
      </div>
    </div>
</div>
@endsection