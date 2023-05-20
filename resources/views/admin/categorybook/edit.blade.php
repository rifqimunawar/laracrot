@section('title') {{ 'Quotes' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
      <h4 class="text-center mb-2 mt-5">Edit Category</h4>
      <div class="row">
        <div class="col-lg-8">
          <form action="{{ route('categorybooks.update', $categorybook->id) }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            <div class="my-3">
              <label for="title">Nama Category Buku</label>
              <input type="text" class="form-control my-4" name="title" id="title" required
              value="{{ $categorybook->title }}">
            </div>

            <div class="my-3">
                <a href="/admin/categorybooks/" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
      </div>
    </div>
</div>
@endsection