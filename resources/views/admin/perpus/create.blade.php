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
            <label for="categorybook_id">Category Buku</label>
            <select name="categorybook_id" class="form-select" required aria-label="categorybook_id">
              <option value="1">--- Category Buku ---</option>
              @foreach ($category as $item)
              <option value="{{ $item->id }}">{{ $item->title }}</option>
              @endforeach
              {{-- <option value="Lantai 1 | 1A" @if ( $edit->posisi == "Lantai 1 | 1A" ) selected @endif>Lantai 1 | 1A</option> --}}
            </select>
            
            <div class="my-3">
                <a href="/admin/perpus" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Upload Buku</button>
            </div>
        </form>
    </div>
</div>
@endsection