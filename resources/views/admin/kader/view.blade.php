@section('title') {{ 'Kader' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center mb-2 mt-5">Detail Anggota Kader</h4>
        <div class="row">
            <div class="col-sm-6">
                <form action="/admin/kader/{{ $kader->id }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama"
                        class="mb-3" readonly value="{{ $kader->nama }}" required id="nama"</div>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username"
                        class="mb-3" readonly value="{{ $user->username }}" required id="username"</div>
                    </div> --}}
                    
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Lengkap</label>
                        <input type="textarea" name="alamat" class="form-control" id="alamat"
                        class="mb-3" readonly value="{{ $kader->alamat }}" id="alamat"</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control" name="nim" id="nim"
                        class="mb-3" readonly value="{{ $kader->nim }}" id="nim"</div>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="jenis_kelamin" readonly value="{{ $kader->jenis_kelamin }}">
                    </div>
                    <div class="mb-3">
                        <label for="t_lahir">Kota Kelahiran Kader</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="t_lahir" readonly value="{{ $kader->t_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label for="ttl">Tanggal Lahir Kader</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="ttl" readonly value="{{ $kader->ttl }}">
                    </div>
                    <div class="mb-3">
                        <label for="wa">Nomor Whats Apps</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="jenis_kelamin" readonly value="{{ $kader->wa }}">
                    </div>
                    <div class="mb-3">
                        <label for="sma">Nama SMA/SMK/MAN/Sederajat</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="sma" readonly value="{{ $kader->sma }}">
                    </div>
                    <div class="mb-3">
                        <label for="pesantren">Alumni Pondok Pesantren</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="pesantren" readonly value="{{ $kader->pesantren }}">
                    </div>
                    <div class="mb-3">
                        <label for="thn_lulus">Tahun Lulus SMA/SMK/MAN/Sederajat</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="thn_lulus" readonly value="{{ $kader->thn_lulus }}">
                    </div>
                    <div class="mb-3">
                        <label for="thn_kuliah">Tahun Masuk Kuliah</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="thn_kuliah" readonly value="{{ $kader->thn_kuliah }}">
                    </div>
                    <div class="mb-3">
                        <label for="fakultas">Fakultas</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="fakultas" readonly value="{{ $kader->fakultas }}">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan">Jurusan Kuliah</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="jurusan" readonly value="{{ $kader->jurusan }}">
                    </div>
                    <div class="mb-3">
                        <label for="thn_mapaba">Tahun Mapaba</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="jurusan" readonly value="{{ $kader->thn_mapaba }}">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_pkd">Tahun PKD</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="tahun_pkd" readonly value="{{ $kader->thn_pkd }}">
                    </div>
                    <div class="mb-3">
                        <label for="thn_pkl">Tahun PKL</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="thn_pkl" readonly value="{{ $kader->thn_pkl }}">
                    </div>
                    <div class="mb-3">
                        <label for="thn_pkn">Tahun PKN</label>
                        <input type="text" class="form-control" class="mb-3" 
                        name="thn_pkn" readonly value="{{ $kader->thn_pkn }}">
                    </div>
                        
                        
    
    
    
    
    
    
                        <div class="mt-3">
                            <a href="/admin/kader" class="btn btn-warning btn-sm">Kembali</a>
                        </div>
                    
                </form>
            </div>
            <div class="col-sm-6">
                <div class="text-center">
                    <img src="{{ asset('storage/uploads/'.$kader['photo']) }}" width="100%" class="mt-5" class="img-thumbnail" style="border-radius: 25px" >
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection