@section('title') {{ 'Quotes' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
      <h4 class="text-center mb-2 mt-5">Edit Quotes</h4>
      <div class="row">
        <div class="col-lg-8">
          <form action="/admin/quotes/{{ $quotes->id }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            
            <div class="my-3">
              <label for="img">Gambar Tokoh</label>
            <input type="file" class="form-control my-4" name="img" id="img">
            </div>

            <div class="my-3">
              <label for="name">Nama Tokoh</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $quotes->name }}">
            </div>

            <div class="my-3">
              <label for="who">Jabatan/Status/Peran tokoh</label>
              <input type="text" class="form-control" name="who" id="who" 
              placeholder="ex:Pahlawan Nasional / Ketua PMII Uninus 2024" value="{{ $quotes->who }}">
            </div>

            <div class="my-3">
              <label for="quote">Quotes/Kata-kata</label>
              <textarea class="form-control" 
              id="floatingTextarea2" name="quote" style="height: 100px">{{ $quotes->quote }}</textarea>
            </div>

            <div class="my-3">
                <a href="/admin/quotes" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
        </form>
        </div>
        <div class="col-lg-4">
          <div class="text-center">
            <img class="pt-4" src="{{ asset('storage/img/' . $quotes->img ) }}" alt="tokoh" 
            style="width: 300px; height:300px; object-fit:contain;">
          </div>
        </div>
      </div>
    </div>
</div>
@endsection