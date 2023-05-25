@section('title') {{ 'Book' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
      <h4 class="text-center mb-2 mt-5">Edit Buku</h4>
      <div class="row">
        <div class="col-lg-6">
          <form action="/admin/perpus/{{ $perpus->id }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            <label for="pdf">Masukan Buku Pdf/ Karya Tulis Word atau Karya Ilmiah Lainnya</label>
            <input type="file" class="form-control my-4" name="pdf" id="pdf" 
            accept="application/pdf,application/vnd.ms-word" value="{{ $perpus->pdf }}">

            <label for="image">Masukan Cover Buku</label>
            <input type="file" class="form-control my-4" name="image" id="image" value="{{ $perpus->image }}">
            <div class="my-3"></div>

            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Max 15 Huruf" 
            value="{{ $perpus->judul }}"><div class="my-3"></div>

            <label for="penulis">Penulis Buku</label>
            <input type="text" class="form-control" name="penulis" id="penulis" value="{{ $perpus->penulis }}">
            <div class="my-3"></div>

            <label for="penerbit">Penerbit Buku</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit"value="{{ $perpus->penulis }}">
            <div class="my-3"></div>

            <label for="thn_terbit">Tahun Terbit</label>
            <input type="text" class="form-control" name="thn_terbit" id="thn_terbit"value="{{ $perpus->thn_terbit }}">
            <div class="my-3"></div>

            <label for="isbn">Nomor ISBN</label>
            <input type="text" class="form-control" name="isbn" id="isbn" value="{{ $perpus->isbn }}">
            <div class="my-3"></div>

            <label for="bahasa">Bahasa Yang Digunakan</label>
            <input type="text" class="form-control" name="bahasa" id="bahasa" value="{{ $perpus->bahasa }}">
            <div class="my-3"></div>

            <label for="categorybook_id">Category Buku</label>
            <select name="categorybook_id" class="form-select" required aria-label="categorybook_id">
              <option value="1">--- Category Buku ---</option>
              @foreach ($category as $item)
              <option value="{{ $item->id }}"{{ $item->id == $item->id ? ' selected' : '' }}>{{ $item->title }}</option>
              @endforeach
            </select>
            <div class="my-3"></div>

            <label for="halaman">Jumlah Halaman</label>
            <input type="number" class="form-control" name="halaman" id="halaman" value="{{ $perpus->halaman }}">
            <div class="my-3"></div>

            <label for="deskripsi">Deskripsi Buku</label>
            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $perpus->deskripsi }}</textarea>
            <div class="my-3"></div>
            

            
            <div class="my-3">
                <a href="/admin/perpus" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
        </form>
        </div>
        <div class="col-lg-6">
          <div class="text-center">
            <img class="pt-6" src="{{ asset('storage/img/' . $perpus->image ) }}" alt="cover" 
            style="width: 90%; ; object-fit:contain;">
          </div>
        </div>
      </div>
    </div>
</div>
@endsection