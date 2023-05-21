@section('title') {{ 'Hari Besar' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Hari Besar Nasional</h4>

        <form action="{{ route('hbn.store') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="my-3">
              <label for="title">Hari Besar</label>
              <input type="text" class="form-control my-4" name="title" id="title" placeholder="ex:idul fitri" required>
            </div>

            <div class="my-3">
              <label for="date">Tanggal </label>
              <input type="date" class="form-control my-4" name="date" id="date" placeholder="ex:2023-07-01" required>
            </div>

            <div class="my-3">
              <label for="deskripsi">Deskripsi</label>
              <textarea name="deskripsi" class="form-control my-4" name="deskripsi" id="deskripsi" 
              placeholder="Optional" cols="30" rows="3"></textarea>
              {{-- <input type="text" class="form-control my-4" name="deskripsi" id="deskripsi" placeholder="Optional"> --}}
            </div>

            <div class="my-3">
                <a href="{{ route('hbn.index') }}" class="btn btn-warning btn-sm ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm mx-3">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection