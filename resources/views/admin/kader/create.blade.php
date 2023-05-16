@section('title') {{ 'Kader' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

        <h4 class="text-center my-3">Tambah Anggota</h4>
        <form action="/admin/kader/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" class="mb-3" required id="nama" </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <input type="textarea" name="alamat" class="form-control" id="alamat" class="mb-3" id="alamat" </div>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" name="nim" id="nim" class="mb-3" id="nim" </div>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" aria-label="Jenis Kelamin">
                    <option value="">--Pilih--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="t_lahir" class="form-label">Kota Kelahiran</label>
                <input type="text" class="form-control" name="t_lahir" id="t_lahir">
            </div>
            <div class="mb-3">
                <label for="ttl" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="ttl" id="ttl">
            </div>
            <div class="mb-3">
                <label for="wa" class="form-label">Nomor WhatsApp</label>
                <input type="text" class="form-control" name="wa" id="wa">
            </div>
            <div class="mb-3">
                <label for="hobi" class="form-label">Golongan Hobi</label>
                <select name="hobi" class="form-select" required aria-label="hobi">
                    <option value="Bermain Game">Bermain Game Online</option>
                    <option value="Bermusik">Bermusik: Mendengarkan/Bermain Musik/ Bernyayi</option>
                    <option value="Olahraga">Berolahraga: Basket, sepak bola, atau Olahraga fisik lainnya</option>
                    <option value="Travelling ">Travelling: Jalan-jalan, Touring, naik gunung, mantai</option>
                    <option value="Membaca ">Membaca: Buku, Novel, Al-qur'an, atau yang lainnya</option>
                    <option value="Seni dan kreativitas "> Seni dan kreativitas : melukis, menggambar, fotografi, atau membuat video atau konten kreatif lainnya.</option>
                    <option value="Menonton film dan serial TV "> Menonton : film, drakor, anime, serial TV </option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="sma" class="form-label">Alumni SMA/Sederajat</label>
                <input type="text" class="form-control" name="sma" id="sma">
            </div>
            <div class="mb-3">
                <label for="thn_lulus" class="form-label">Tahun Lulus SMA/Sederajat</label>
                <input type="text" class="form-control" name="thn_lulus" id="thn_lulus">
            </div>
            <div class="mb-3">
                <label for="pesantren" class="form-label">Pesantren</label>
                <input type="text" class="form-control" name="pesantren" id="pesantren"
                placeholder="Jika belum pernah isi dengan strip saja bat (-)">
            </div>
            <div class="mb-3">
                <label for="thn_kuliah" class="form-label">Tahun Masuk Kuliah</label>
                <input type="text" class="form-control" name="thn_kuiah" id="thn_kuliah">
            </div>
            <div class="mb-3">
                <label for="fakultas">Rayon/Fakultas</label>
                <select name="fakultas" class="form-select" required aria-label="fakultas">
                    <option value=" ">--Pilih--</option>
                    <option value="Teknik">Teknik</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Fkip">Fkip</option>
                    <option value="Ulul Albab">Ulul Albab</option>
                    <option value="Hukum">Hukum</option>
                    <option value="Fikom">Fikom</option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" class="form-select" required aria-label="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="thn_mapaba">Mapaba Tahun</label>
                <select name="thn_mapaba" class="form-select" required aria-label="thn_mapaba">
                    <option value="2016">Sebelum 2017</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    {{-- <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option> --}}
                </select><br>
            </div>
            <div class="mb-3">
                <label for="penyelenggara_mapaba">Rayon Penyelenggara Mapaba</label>
                <select name="penyelenggara_mapaba" class="form-select" required aria-label="penyelenggara_mapaba">
                    <option value="Teknik">Teknik</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Fkip">Fkip</option>
                    <option value="Ulul Albab">Ulul Albab</option>
                    <option value="Hukum">Hukum</option>
                    <option value="Fikom">Fikom</option>
                    <option value="Luar Uninus">Luar Uninus</option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="thn_pkd" class="form-label">Tahun PKD</label>
                <select name="thn_pkd" class="form-select" required aria-label="thn_pkd">
                    <option value="Belum PKD">BELUM PKD</option>
                    <option value="2016">Sebelum 2017</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    {{-- <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option> --}}
                </select><br>
            </div>
            <div class="mb-3">
                <label for="thn_pkl" class="form-label">Tahun PKL</label>
                <select name="thn_pkl" class="form-select" required aria-label="thn_pkl">
                    <option value="Belum PKL">BELUM PKL</option>
                    <option value="2016">Sebelum 2017</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    {{-- <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option> --}}
                </select><br>
            </div>

            <div class="mb-3">
                <label for="thn_pkn" class="form-label">Tahun PKN</label>
                <select name="thn_pkn" class="form-select" required aria-label="thn_pkn">
                    <option value="Belum PKN">BELUM PKN</option>
                    <option value="2016">Sebelum 2017</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    {{-- <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option> --}}
                </select><br>
            </div>

            <div class="mb-3">
                <label for="informal" class="form-label">Berapa kali anda mengikuti sekolah informal</label>
                <select name="informal" class="form-select" required aria-label="informal">
                    <option value="0">Belum Pernah</option>
                    <option value="1">Pernah Sekali</option>
                    <option value="2">Pernah 2 Kali</option>
                    <option value="3">Pernah 3 Kali</option>
                    <option value="4">Pernah 4 Kali</option>
                    <option value="5">Pernah 5 Kali</option>
                    <option value="6">Pernah 6 Kali</option>
                    <option value="7">Pernah 7 Kali</option>
                    <option value="8">Pernah 8 Kali</option>
                    <option value="9">Pernah 9 Kali</option>
                    <option value="10">Pernah 10 Kali</option>
                    <option value="11">Lebih dari 10 Kali</option>
                </select><br>
            </div>
            
            <div class="mb-3">
                <label for="penyelenggara_informal">Rayon Penyelenggara Sekolah Informal Terbaik</label>
                <select name="penyelenggara_informal" class="form-select" required aria-label="penyelenggara_informal">
                    <option value="Teknik">Teknik</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Fkip">Fkip</option>
                    <option value="Ulul Albab">Ulul Albab</option>
                    <option value="Hukum">Hukum</option>
                    <option value="Fikom">Fikom</option>
                    <option value="Komisariat Uninus">Komisariat Uninus</option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="nonformal" class="form-label">Berapa kali anda mengikuti sekolah nonformal</label>
                <select name="nonformal" class="form-select" required aria-label="nonformal">
                    <option value="0">Belum Pernah</option>
                    <option value="1">Pernah Sekali</option>
                    <option value="2">Pernah 2 Kali</option>
                    <option value="3">Pernah 3 Kali</option>
                    <option value="4">Pernah 4 Kali</option>
                    <option value="5">Pernah 5 Kali</option>
                    <option value="6">Pernah 6 Kali</option>
                    <option value="7">Pernah 7 Kali</option>
                    <option value="8">Pernah 8 Kali</option>
                    <option value="9">Pernah 9 Kali</option>
                    <option value="10">Pernah 10 Kali</option>
                    <option value="11">Lebih dari 10 Kali</option>
                </select><br>
            </div>
            <div class="mb-3">
                <label for="penyelenggara_nonformal">Rayon Penyelenggara Sekolah Nonformal</label>
                <select name="penyelenggara_nonformal" class="form-select" required aria-label="penyelenggara_nonformal">
                    <option value="Teknik">Teknik</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Fkip">Fkip</option>
                    <option value="Ulul Albab">Ulul Albab</option>
                    <option value="Hukum">Hukum</option>
                    <option value="Fikom">Fikom</option>
                    <option value="Komisariat Uninus">Komisariat Uninus</option>
                </select><br>
            </div>


            <div class="mb-3">
                <label for="photo" class="form-label">Pilih Foto Profile</label>
                <input name="photo" class="form-control" type="file" id="photo">
            </div>
            <div class="mb-3">
                <a href="/admin/kader" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </form>
    </div>
</div>


@endsection