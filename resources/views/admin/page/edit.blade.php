@section('title') {{ 'Page' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-5">Edit Gambar Utama</h2>
            <form action="/admin/page/{{ $pages->id }}" method="post"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul"
                    class="mb-3" value="{{ $pages->judul }}" required id="judul">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="textarea" class="form-control" name="deskripsi" id="deskripsi" value="{{ $pages->deskripsi }}" >
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link Tombol</label>
                    <input type="text" class="form-control" name="link" id="link" value="{{ $pages->link }}" >
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label>
                    <img src="{{ asset('storage/img/'.$pages['gambar']) }}" class="img-thumbnail" width="3000" >
                </div>
            
                <div class="mb-3">
                    <label for="gambar" class="form-label">Pilih Gambar Terbaru</label>
                    <input name="gambar" class="form-control" type="file" id="gambar" value="{{ $pages->gambar }}" required >
                </div>
                <div class="my-3">
                    <a href="/admin/page" class="btn btn-warning btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                </div>
            </form>
    </div>
</div>
@endsection