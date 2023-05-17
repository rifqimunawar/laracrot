@section('title') {{ 'Quotes' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center mb-2 mt-5">Tambah Quotes</h4>
        <form action="/admin/quotes/store" method="post"
            enctype="multipart/form-data">
            @csrf
            
            <div class="my-3">
              <label for="img">Gambar Tokoh</label>
            <input type="file" class="form-control my-4" name="img" id="img" required>
            </div>

            <div class="my-3">
              <label for="name">Nama Tokoh</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="my-3">
              <label for="who">Jabatan/Status/Peran tokoh</label>
              <input type="text" class="form-control" name="who" id="who" 
              placeholder="ex:Pahlawan Nasional / ketua PMII Uninus 2024" required>
            </div>

            <div class="my-3">
              <label for="quote">Quotes/Kata-kata</label>
              <textarea class="form-control" 
              id="floatingTextarea2" name="quote" style="height: 100px" required></textarea>
            </div>

            <div class="my-3">
                <a href="/admin/quotes" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection