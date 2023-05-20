@section('title') {{ 'Perpus' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center my-4">Tambah Buku Perpustakaan</h4>

        <form action="/admin/perpus/store" method="post"
            enctype="multipart/form-data">
            @csrf

            <label for="pdf">Masukan Buku Pdf/ Karya Tulis Word atau Karya Ilmiah Lainnya</label>
            <input type="file" class="form-control my-4" name="pdf" id="pdf" 
            accept="application/pdf,application/vnd.ms-word">

            
            <label for="image">Masukan Cover Buku</label>
            <input type="file" class="form-control my-4" name="image" id="image">
            <div class="my-3"></div>

            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Max 15 Huruf">
            <div class="my-3"></div>

            <label for="penulis">Penulis Buku</label>
            <input type="text" class="form-control" name="penulis" id="penulis">
            <div class="my-3"></div>

            <label for="penerbit">Penerbit Buku</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit">
            <div class="my-3"></div>

            <label for="thn_terbit">Tahun Terbit</label>
            <input type="text" class="form-control" name="thn_terbit" id="thn_terbit">
            <div class="my-3"></div>

            <label for="isbn">Nomor ISBN</label>
            <input type="text" class="form-control" name="isbn" id="isbn">
            <div class="my-3"></div>

            <label for="bahasa">Bahasa Yang Digunakan</label>
            <input type="text" class="form-control" name="bahasa" id="bahasa">
            <div class="my-3"></div>

            
            <label for="categorybook_id">Category Buku</label>
            <select name="categorybook_id" class="form-select" required aria-label="categorybook_id">
              <option value="1">--- Category Buku ---</option>
              @foreach ($category as $item)
              <option value="{{ $item->id }}">{{ $item->title }}</option>
              @endforeach
            </select>
            <div class="my-3"></div>

            <label for="halaman">Jumlah Halaman</label>
            <input type="number" class="form-control" name="halaman" id="halaman">
            <div class="my-3"></div>

            <label for="deskripsi">Deskripsi Buku</label>
            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="my-3"></div>

            
            <div class="my-3">
                <a href="/admin/perpus" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Upload Buku</button>
            </div>
        </form>
    </div>
</div>
@endsection