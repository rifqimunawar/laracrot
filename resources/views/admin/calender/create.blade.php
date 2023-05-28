@section('title') {{ 'Agenda' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Tambah Agenda</h2>

        <div class="my-3 col-12 col-sm-8 col-md-6 ">
          <form action="/admin/calendar/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nama Kegiatan</label>
                <input type="text" name="title" class="form-control" id="title" class="mb-3" required id="title">
            </div>
            <div class="mb-3">
              <label for="penyelenggara" class="form-label">Penyelenggara</label>
              <select name="penyelenggara" class="form-select" required aria-label="penyelenggara">
                  <option value="Komisariat">Komisariat</option>
                  <option value="Rayon Teknik">Rayon Teknik</option>
                  <option value="Rayon Hukum">Rayon Hukum</option>
                  <option value="Rayon Ulul Albab">Rayon Ulul Albab</option>
                  <option value="Rayon Fkip">Rayon Fkip</option>
                  <option value="Rayon Fikom">Rayon Fikom</option>
                  <option value="Rayon Ekonomi">Rayon Ekonomi</option>
              </select><br>
          </div>
            <div class="mb-3">
                <label for="start" class="form-label">Waktu</label>
                <input type="datetime-local" name="start" class="form-control" id="start" class="mb-3" required id="start">
            </div>
            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" name="tempat" class="form-control" id="tempat" class="mb-3" required id="tempat">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Category Kegiatan</label>
                <select name="description" class="form-select" required aria-label="description">
                  <option disabled selected >--- Category Kegiatan ---</option>
                  <option value="Formal" >Formal</option>
                  <option value="Non-Formal" >Non-Formal</option>
                  <option value="InFormal" >InFormal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pamflet" class="form-label">Pamflet Bila Ada</label>
                <input type="file" name="pamflet" class="form-control" id="pamflet" class="mb-3">
            </div>
            
            <div class="mb-3">
                <a href="/admin/calendar" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </form>
        </div>
    </div>

</div>
@endsection

