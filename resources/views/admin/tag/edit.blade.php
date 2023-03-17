@section('title') {{ 'Edit Tag' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

        <h4 class="text-center my-3">Edit Tag Blog</h4>
        <form action="/admin/blog/tag/{{ $edit->id }}" method="post">
          @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tag Baru</label>
                <input type="text" name="name" class="form-control" id="name" class="mb-3" required id="name" value="{{ $edit->name }}">
            </div>
            <div class="mb-3">
                <a href="/admin/blog/tag" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection