@section('title') {{ 'Rayon' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Data Rayon</h2>

        <div class="my-3 col-12 col-sm-8 col-md-6 ">
          <form action="/admin/rayon/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="rayon" class="form-label">Nama Rayon Baru</label>
                <input type="text" name="rayon" class="form-control" id="rayon" class="mb-3" required id="rayon">
            </div>
            
            <div class="mb-3">
                <a href="/admin/rayon" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </form>
        </div>
    </div>

</div>
@endsection