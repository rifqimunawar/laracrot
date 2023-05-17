@section('title') {{ 'Pengurus' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center mb-2 mt-5">Tambah Pengurus</h4>
        <form action="/admin/pengurus/store" method="post"
            enctype="multipart/form-data">
            @csrf
            
            <div class="my-3">
              <label for="img">Gambar Pengurus</label>
            <input type="file" class="form-control my-4" name="img" id="img" required>
            </div>

            <div class="my-3">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="my-3">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" id="who" required>
            </div>

            <div class="my-3">
              <label for="ig">Link Profile Instagram </label>
              <input type="text" class="form-control" name="ig" id="ig">
            </div>

            <div class="my-3">
              <label for="fb">Link Profile Facebook </label>
              <input type="text" class="form-control" name="fb" id="ig">
            </div>

            <div class="my-3">
              <label for="twt">Link Profile Tweeter </label>
              <input type="text" class="form-control" name="twt" id="ig">
            </div>

            <div class="my-3">
                <a href="/admin/perngurus" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection