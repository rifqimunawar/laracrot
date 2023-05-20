@section('title') {{ 'Category Books' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center mb-2 mt-5">Tambah Category Books</h4>
        <form action="/admin/categorybooks/store" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="my-3">
              <label for="title">Nama Category Buku</label>
              <input type="text" class="form-control my-4" name="title" id="title" required>
            </div>

            <div class="my-3">
                <a href="/admin/categorybooks/" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection