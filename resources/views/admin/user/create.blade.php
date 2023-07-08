<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User | PMII UNINUS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


@extends('admin.layout')
  @section('content')
  <div class="card info-card sales-card">
      <div class="container">
  
        <div class="text-center pt-5 mt-5">
          <h4>Tambah Kader</h4>
        </div>
        <div class="row pt-4 mt-5">
          <div class="col-md-6">
  
            <form action="{{ route('store.user') }}" method="post" enctype="multipart/form-data" >
              @csrf 
  
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap Sesuai KTP</label>
                <input type="text" name="name" class="form-control
                @error('name') is-invalid @enderror" id="name">
                
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
  
              <div class="mb-3">
                <label for="kelamin" class="form-label">Jenis Kelamin</label>
                <select name="kelamin" id="kelamin" class="form-select @error('kelamin') is-invalid @enderror">
                    <option disabled selected>Pilih jenis kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('kelamin')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
  
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim"id="nim"  class="form-control
                @error('nim') is-invalid @enderror" id="nim" required>
                
                @error('nim')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              
            <div class="mb-3">
             <label for="t_lahir" class="form-label">Kota Kelahiran</label>
             <input type="text" name="t_lahir"id="t_lahir"  class="form-control
             @error('t_lahir') is-invalid @enderror" id="t_lahir" >
             
             @error('t_lahir')
                 <div class="alert alert-danger">{{ $message }}</div>
             @enderror
           </div>

           <div class="mb-3">
             <label for="ttl" class="form-label">Tanggal Lahir</label>
             <input type="date" name="ttl"id="ttl"  class="form-control
             @error('ttl') is-invalid @enderror" id="ttl" required>
             
             @error('ttl')
                 <div class="alert alert-danger">{{ $message }}</div>
             @enderror
           </div>

               {{-- <fieldset>
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Pilih Provinsi</label>
                        {!! Form::select('provinsi', $provinsi, null, [
                            'class' => 'form-control',
                            'placeholder' => 'Pilih Provinsi',
                            'id' => 'province_id',
                            'name' => 'province_id',
                            'value' => 'name'
                        ]) !!}
                    </div>
            
                    <div class="form-group" name="cities" id="form-kota">
            
                    </div>
            
                    <div class="form-group" name="districts" id="form-kecamatan">
            
                    </div>
            
                    <div class="form-group" name="villages" id="form-kelurahan">
            
                    </div>
                </div>
            </fieldset>  --}}
            

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control 
              @error('alamat') is-invalid @enderror" rows="4" ></textarea>
            
              @error('alamat')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            

            <div class="mb-3">
              <label for="pesantren" class="form-label">Nama Pesantren</label>
              <input type="text" name="pesantren"id="pesantren"  class="form-control
              @error('pesantren') is-invalid @enderror" id="pesantren" placeholder="Jika Sempat Tinggal Di Pondok">
              
              @error('pesantren')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="sma" class="form-label">Nama SMA/Sederajat</label>
              <input type="text" name="sma"id="sma"  class="form-control
              @error('sma') is-invalid @enderror" id="sma" required>
              
              @error('sma')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="thn_lulus" class="form-label">Tahun Lulus SMA/Sederajat</label>
              <input type="number" name="thn_lulus"id="thn_lulus"  class="form-control
              @error('thn_lulus') is-invalid @enderror" id="thn_lulus" required>
              
              @error('thn_lulus')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="thn_kuliah" class="form-label">Tahun Kuliah</label>
              <input type="number" name="thn_kuliah"id="thn_kuliah"  class="form-control
              @error('thn_kuliah') is-invalid @enderror" id="thn_kuliah" required>
              
              @error('thn_kuliah')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

              <div class="mb-3">
                <label for="rayon" class="form-label">Rayon</label>
                <div >
                  <select id="rayon_id" name="rayon_id" class="form-select" required onchange="showOptions()">
                      <option disabled selected>== Pilih Rayon ==</option>
                      <option value="1" >Teknik</option>
                      <option value="2" >Hukum</option>
                      <option value="3" >Ulul Albab</option>
                      <option value="4" >Ekonomi</option>
                      <option value="5" >Fikom</option>
                      <option value="6" >Fkip</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label for="prodi" class="form-label">Jurusan</label>
                <div >
                  <select id="prodi" name="prodi" class="form-select" required onchange="showOptions()">
                      <option disabled selected>== Pilih Jurusan ==</option>
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Teknik Elektro" >Teknik Elektro</option>
                      <option value="Teknik Industri" >Teknik Industri</option>
                      <option disabled selected> </option>
                      <option value="Ilmu Hukum" >Ilmu Hukum</option>
                      <option disabled selected> </option>
                      <option value="Agroteknologi" >Agroteknologi</option>
                      <option disabled selected> </option>
                      <option value="PAI" >PAI</option>
                      <option value="Perbankan Syari'ah" >Perbankan Syari'ah</option>
                      <option value="PGMI" >PGMI</option>
                      <option disabled selected> </option>
                      <option value="KPI" >KPI</option>
                      <option value="Ilmu Komunikasi" >Ilmu Komunikasi</option>
                      <option value="Ilmu Perpustakaan" >Ilmu Perpustakaan</option>
                      <option disabled selected> </option>
                      <option value="Akuntansi" >Akuntansi</option>
                      <option value="Manajement" >Manajement</option>
                      <option disabled selected> </option>
                      <option value="Pd Luar Biasa" >Pd Luar Biasa</option>
                      <option value="Pd Luar Sekolah" >Pd Luar Sekolah</option>
                      <option value="Pd Guru dan Anak Usia Dini" >Pd Guru dan Anak Usia Dini</option>
                      <option value="Pd Bhs. dan Sastra Indonesia" >Pd Bhs. dan Sastra Indonesia</option>
                      <option value="Pd Bhs. Inggris" >Pd Bhs. Inggris</option>
                      <option value="Pd Bhs. Arab" >Pd Bhs. Arab</option>
                      <option value="Pd Matematika" >Pd Matematika</option>
                      <option value="PPKN" >PPKN</option>
                      <hr>

                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label for="kaderisasi" class="form-label">Jenjang Kaderisasi Saat Ini</label>
                <div >
                    <select id="kaderisasi" name="kaderisasi" class="form-select" onchange="showOptions()">
                        <option disabled selected>-- Jenjang Kaderisasi Formal Saat ini --</option>
                        <option value="Belum Mapaba" >Belum Mapaba</option>
                        <option value="Mapaba" >Mapaba</option>
                        <option value="PKD" >PKD</option>
                        <option value="PKL" >PKL</option>
                        <option value="PKN" >PKN</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6">
                    <select id="thn_mapaba" name="thn_mapaba" class="form-select" style="display:none;">
                        <option disabled selected >-- Mapaba Tahun Berapa --</option>
                        <option value="Sebelum 2018" >Mapaba Sebelum 2018</option>
                        <option value="2018" >Mapaba 2018</option>
                        <option value="2019" >Mapaba 2019</option>
                        <option value="2020" >Mapaba 2020</option>
                        <option value="2021" >Mapaba 2021</option>
                        <option value="2022" >Mapaba 2022</option>
                        <option value="2023" >Mapaba 2023</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6">
                    <select id="thn_pkd" name="thn_pkd" class="form-select" style="display:none;">
                        <option disabled selected >-- PKD Tahun Berapa --</option>
                        <option value="Sebelum 2018" >PKD Sebelum 2018</option>
                        <option value="2018" >PKD 2018</option>
                        <option value="2019" >PKD 2019</option>
                        <option value="2020" >PKD 2020</option>
                        <option value="2021" >PKD 2021</option>
                        <option value="2022" >PKD 2022</option>
                        <option value="2023" >PKD 2023</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6">
                    <select id="thn_pkl" name="thn_pkl" class="form-select" style="display:none;">
                        <option disabled selected >-- PKL Tahun Berapa --</option>
                        <option value="Sebelum 2018" >PKL Sebelum 2018</option>
                        <option value="2018" >PKL 2018</option>
                        <option value="2019" >PKL 2019</option>
                        <option value="2020" >PKL 2020</option>
                        <option value="2021" >PKL 2021</option>
                        <option value="2022" >PKL 2022</option>
                        <option value="2023" >PKL 2023</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6">
                    <select id="thn_pkn" name="thn_pkn" class="form-select" style="display:none;">
                        <option disabled selected>-- PKN Tahun Berapa --</option>
                        <option value="Sebelum 2018">PKN Sebelum 2018</option>
                        <option value="2018" >PKN 2018</option>
                        <option value="2019" >PKN 2019</option>
                        <option value="2020" >PKN 2020</option>
                        <option value="2021" >PKN 2021</option>
                        <option value="2022" >PKN 2022</option>
                        <option value="2023" >PKN 2023</option>
                    </select>
                </div>
            </div>
              {{-- jenjang kaderisasi end  --}}

              <div class="mb-3">
                <label for="informal" class="form-label">Kader Mengikuti Sekolah Informal</label>
                <div >
                  <select name="informal" class="form-select" required aria-label="informal">
                    <option value="0">Belum Pernah</option>
                    <option value="1">Pernah 1 kali</option>
                    <option value="2">Pernah 2 Kali</option>
                    <option value="3">Pernah 3 Kali</option>
                    <option value="4">Pernah 4 Kali</option>
                    <option value="5">Pernah 5 Kali</option>
                    <option value="6">Pernah 6 Kali</option>
                    <option value="7">Pernah 7 Kali</option>
                    <option value="8">Pernah 8 Kali</option>
                    <option value="9">Pernah 9 Kali</option>
                    <option value="10">Lebih dari 9 Kali</option>
                </select>
              </div>
            </div>

              <div class="mb-3">
                <label for="nonformal" class="form-label">Kader Mengikuti Sekolah Non-Formal</label>
                <div >
                  <select name="nonformal" class="form-select" required aria-label="nonformal">
                    <option value="0">Belum Pernah</option>
                    <option value="1">Pernah 1 kali</option>
                    <option value="2">Pernah 2 Kali</option>
                    <option value="3">Pernah 3 Kali</option>
                    <option value="4">Pernah 4 Kali</option>
                    <option value="5">Pernah 5 Kali</option>
                    <option value="6">Pernah 6 Kali</option>
                    <option value="7">Pernah 7 Kali</option>
                    <option value="8">Pernah 8 Kali</option>
                    <option value="9">Pernah 9 Kali</option>
                    <option value="10">Lebih dari 9 Kali</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
             <label for="wa" class="form-label">Telpone</label>
               <input type="text" name="wa" class="form-control" id="wa" >
           </div>

              {{-- Role Start --}}
              <div class="my-3">
                <label for="role_id" class="form-label">Status Keanggotaan</label><br>
                <div >
                  <select id="role_id" name="role_id" class="form-select">
                    @if (in_array(auth()->user()->role_id, [1]))
                    <option value="1">Admin Komisariat</option>
                    <option value="2">Admin Rayon</option>
                    @endif
                    <option value="3">Kader PMII Uninus</option>
                    {{-- <option value="4" >Pengjunjung</option>
                    <option value="5" >Bukan Kader PMII Uninus</option> --}}
                  </select>
              </div>
            </div>
            {{-- Role end  --}}



              <div class="pt-3 text-end">
                <a href="/admin/user" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-success btn-sm" >Simpan</button>
              </div>
  
            </form>
  
          </div>
          
          {{-- <div class="col-md-6">
            <div class="text-center">
              <img src="{{ asset('storage/img/' . $user->img ) }}" class="rounded" alt="..." 
              style="width: 80%; border-radius:20px;box-shadow: 4px 5px 8px rgba(0, 0, 0, 0.3)">
            </div>
          </div> --}}
      </div>
  
  </div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script>
$(document).ready(function() {
    $('body').on('change', '#province_id', function() {
        let id = $(this).val();
        let route = "{{ $route_get_kota }}";

        $.ajax({
            type: 'get',
            url: route,
            data: {
                province_id: id
            },
            success: function(data) {
                $('#form-kota').html(data);
            }
        })
    })

    $('body').on('change', '#city_id', function() {
        let id = $(this).val();
        let route = "{{ $route_get_kecamatan }}";

        $.ajax({
            type: 'get',
            url: route,
            data: {
                city_id: id
            },
            success: function(data) {
                $('#form-kecamatan').html(data);
            }
        })
    })

    $('body').on('change', '#kecamatan_id', function() {
        let id = $(this).val();
        let route = "{{ $route_get_kelurahan }}";

        $.ajax({
            type: 'get',
            url: route,
            data: {
                kecamatan_id: id
            },
            success: function(data) {
                $('#form-kelurahan').html(data);
            }
        })
    })
})
</script>


<script>
  function showOptions() {
      var kaderisasi = document.getElementById("kaderisasi").value;
      var thn_mapaba = document.getElementById("thn_mapaba");
      var thn_pkd = document.getElementById("thn_pkd");
      var thn_pkl = document.getElementById("thn_pkl");
      var thn_pkn = document.getElementById("thn_pkn");
      
      if (kaderisasi === "Belum Mapaba") {
          thn_mapaba.style.display = "none";
          thn_pkd.style.display = "none";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "Mapaba") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "none";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "PKD") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "block";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "PKL") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "block";
          thn_pkl.style.display = "block";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "PKN") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "block";
          thn_pkl.style.display = "block";
          thn_pkn.style.display = "block";
      } else {
          thn_mapaba.style.display = "none";
          thn_pkd.style.display = "none";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      }
  }
  </script>
</body>

</html>