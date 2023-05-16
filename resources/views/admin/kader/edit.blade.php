@section('title') {{ 'Kader' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center mb-2 mt-5">Edit Anggota Kader</h4>
        @if (Session::flash('update'))
            <div class="alert alert-primary" role="alert">
                Mantap sahabat!!! Kader Berhasil Diubah
            </div>
        @endif
            <form action="/admin/kader/{{ $kader->id }}" method="post"
            {{-- enctype="multipart/form-data" digunakan untuk mengupload gambar cmiwww --}}
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama"
                class="mb-3" value="{{ $kader->nama }}" required id="nama"</div>
            </div>
            
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <input type="textarea" name="alamat" class="form-control" id="alamat"
                class="mb-3" value="{{ $kader->alamat }}" id="alamat"</div>
            </div>
            
            <div class="mb-3">
                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" name="nim" id="nim"
                class="mb-3" value="{{ $kader->nim }}" id="nim"</div>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" aria-label="Jenis Kelamin">
                    <option value="">--Pilih--</option>
                    <option value="L" @if ( $kader->jenis_kelamin == "L" ) selected @endif >Laki-laki</option>
                    <option value="P" @if ( $kader->jenis_kelamin == "P" ) selected @endif >Perempuan</option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="t_lahir" class="form-label">Kota Kelahiran</label>
                <input type="text" class="form-control" name="t_lahir" id="t_lahir" value="t_lahir" >
            </div>
            
            <div class="mb-3">
                <label class="form-label">Profile Saat Ini</label>
                <img src="{{ asset('storage/uploads/'.$kader['photo']) }}" class="img-thumbnail" width="150" >
            </div>
        
            <div class="mb-3">
                <label for="photo" class="form-label">Pilih Foto Profile</label>
                <input name="photo" class="form-control" type="file" id="photo" value="{{ $kader->photo }}" required >
            </div>
            <div class="my-3">
                <a href="/admin/kader" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
            </form>
        </div>
    </div>
</div>


@endsection