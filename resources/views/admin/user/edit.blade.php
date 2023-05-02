@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

      <div class="text-center pt-5 mt-5">
        <h4>Edit Kader</h4>
      </div>
      <div class="row pt-4 mt-5">
        <div class="col-md-6">
            <form action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" value="{{ $user->name }}">
                </div>
    
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" value="{{ $user->username }}">
                </div>
    
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="{{ $user->alamat }}">
                </div>
    
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" id="nim" value="{{ $user->nim }}">
                </div>
    
                <div class="mb-3">
                    <label for="rayon" class="form-label">Rayon</label>
                    <div class="col-md-12">
                      <select id="rayon_id" name="rayon_id" class="form-select" onchange="showOptions()">
                          <option value="PKD">PKD</option>
                          <option value="PKL">PKL</option>
                          <option value="PKN">PKN</option>
                      </select>
                  </div>
                </div>

                {{-- jenjang kaderisasi start  --}}
                <div class="mb-3">
                  <label for="kaderisasi" class="form-label">Jenjang Kaderisasi Saat Ini</label>
                  <div class="col-md-12">
                      <select id="kaderisasi" name="kaderisasi" class="form-select" onchange="showOptions()">
                          <option>-- Jenjang Kaderisasi Formal Saat ini --</option>
                          <option value="Belum Mapaba">Belum Mapaba</option>
                          <option value="Mapaba">Mapaba</option>
                          <option value="PKD">PKD</option>
                          <option value="PKL">PKL</option>
                          <option value="PKN">PKN</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_mapaba" name="thn_mapaba" class="form-select" style="display:none;">
                          <option>-- Mapaba Tahun Berapa --</option>
                          <option value="Sebelum 2018">Mapaba Sebelum 2018</option>
                          <option value="2018">Mapaba 2018</option>
                          <option value="2019">Mapaba 2019</option>
                          <option value="2020">Mapaba 2020</option>
                          <option value="2021">Mapaba 2021</option>
                          <option value="2022">Mapaba 2022</option>
                          <option value="2023">Mapaba 2023</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_pkd" name="thn_pkd" class="form-select" style="display:none;">
                          <option>-- PKD Tahun Berapa --</option>
                          <option value="Sebelum 2018">PKD Sebelum 2018</option>
                          <option value="2018">PKD 2018</option>
                          <option value="2019">PKD 2019</option>
                          <option value="2020">PKD 2020</option>
                          <option value="2021">PKD 2021</option>
                          <option value="2022">PKD 2022</option>
                          <option value="2023">PKD 2023</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_pkl" name="thn_pkl" class="form-select" style="display:none;">
                          <option>-- PKL Tahun Berapa --</option>
                          <option value="Sebelum 2018">PKL Sebelum 2018</option>
                          <option value="2018">PKL 2018</option>
                          <option value="2019">PKL 2019</option>
                          <option value="2020">PKL 2020</option>
                          <option value="2021">PKL 2021</option>
                          <option value="2022">PKL 2022</option>
                          <option value="2023">PKL 2023</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_pkn" name="thn_pkn" class="form-select" style="display:none;">
                          <option>-- PKN Tahun Berapa --</option>
                          <option value="Sebelum 2018">PKN Sebelum 2018</option>
                          <option value="2018">PKN 2018</option>
                          <option value="2019">PKN 2019</option>
                          <option value="2020">PKN 2020</option>
                          <option value="2021">PKN 2021</option>
                          <option value="2022">PKN 2022</option>
                          <option value="2023">PKN 2023</option>
                      </select>
                  </div>
              </div>
                {{-- jenjang kaderisasi end  --}}

                {{-- Role Start --}}
                <div class="mb-3">
                  <label for="role_id" class="form-label">Role</label>
                  <input type="text" class="form-control" id="role_id" value="{{ $role->role }}">
              </div>
              {{-- Role end  --}}
            </form>
        </div>
        
        <div class="col-md-6">
          <div class="text-center">
            <img src="{{ asset('storage/img/' . $user->img ) }}" class="rounded" alt="..." 
            style="width: 80%; border-radius:20px;box-shadow: 4px 5px 8px rgba(0, 0, 0, 0.3)">
          </div>
        </div>
    </div>

</div>


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
@endsection