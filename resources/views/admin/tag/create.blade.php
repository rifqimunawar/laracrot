@section('title') {{ 'Tambah Tag' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

        <h4 class="text-center my-3">Tambah Tag Blog</h4>
        <form action="/admin/blog/tag/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tag Baru</label>
                <input type="text" name="name" class="form-control" id="name" class="mb-3" required id="name">
            </div>
            <div class="mb-3">
                <a href="/admin/blog/tag" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection