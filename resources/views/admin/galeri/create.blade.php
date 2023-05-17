@section('title') {{ 'Galeri' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center mb-2 mt-5">Tambah Gambar</h4>
        <form action="/admin/galeri/store" method="post"
            enctype="multipart/form-data">
            @csrf
            <label for="galeri">Gambar yang di upload lanccape</label>
            <input type="file" class="form-control my-4" name="img" id="img">
            <div class="my-3"></div>
            <label for="judul">Judul Gambar</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Max 15 Huruf">
            
            <div class="my-3">
                <a href="/admin/galeri" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Upload Gambar</button>
            </div>
        </form>
    </div>
</div>
@endsection