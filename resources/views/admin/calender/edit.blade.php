@section('title') {{ 'Agenda' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
      <h4 class="text-center mb-2 mt-5">Edit Quotes</h4>
      <div class="row">
        <div class="col-lg-8">
          <form action="/admin/calendar/{{ $event->id }}" method="post" enctype="multipart/form-data">
              @csrf @method('put')
              <div class="mb-3">
                  <label for="title" class="form-label">Nama Kegiatan</label>
                  <input type="text" name="title" class="form-control" id="title" class="mb-3" 
                  required id="title" value="{{ $event->title }}">
              </div>
              <div class="mb-3">
                <label for="penyelenggara" class="form-label">Penyelenggara</label>
                <select name="penyelenggara" class="form-select" required aria-label="penyelenggara">
                  <option value="Komisariat" {{ $event->penyelenggara == 'Komisariat' ? 'selected' : '' }}>Komisariat</option>
                  <option value="Rayon Teknik" {{ $event->penyelenggara == 'Rayon Teknik' ? 'selected' : '' }}>Rayon Teknik</option>
                  <option value="Rayon Hukum" {{ $event->penyelenggara == 'Rayon Hukum' ? 'selected' : '' }}>Rayon Hukum</option>
                  <option value="Rayon Ulul Albab" {{ $event->penyelenggara == 'Rayon Ulul Albab' ? 'selected' : '' }}>Rayon Ulul Albab</option>
                  <option value="Rayon Fkip" {{ $event->penyelenggara == 'Rayon Fkip' ? 'selected' : '' }}>Rayon Fkip</option>
                  <option value="Rayon Fikom" {{ $event->penyelenggara == 'Rayon Fikom' ? 'selected' : '' }}>Rayon Fikom</option>
                  <option value="Rayon Ekonomi" {{ $event->penyelenggara == 'Rayon Ekonomi' ? 'selected' : '' }}>Rayon Ekonomi</option>
                </select>
            </div>
              <div class="mb-3">
                  <label for="start" class="form-label">Waktu</label>
                  <input type="datetime-local" name="start" class="form-control" id="start" class="mb-3" 
                  required id="start" value="{{ $event->start }}">
              </div>
              <div class="mb-3">
                  <label for="tempat" class="form-label">Tempat</label>
                  <input type="text" name="tempat" class="form-control" id="tempat" class="mb-3" 
                  required id="tempat" value="{{ $event->tempat }}">
              </div>
              <div class="mb-3">
                  <label for="description" class="form-label">Category Kegiatan</label>
                  <select name="description" class="form-select" required aria-label="description">
                    <option disabled selected >--- Category Kegiatan ---</option>
                    <option value="Formal" {{ $event->description == 'Formal' ? 'selected' :'' }} >Formal</option>
                    <option value="Non-Formal" {{ $event->description =='Non-Formal'?'selected':'' }} >Non-Formal</option>
                    <option value="InFormal" {{ $event->description =='InFormal'?'selected':'' }} >InFormal</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label for="pamflet" class="form-label">Pamflet Kegiatan</label>
                  <input type="file" name="pamflet" class="form-control" id="pamflet" class="mb-3" value="{{ $event->img }}">
              </div>
              
              <div class="mb-3">
                  <label for="jmlh_peserta" class="form-label">Jumlah Peserta Kegiatan</label>
                  <input type="number" name="jmlh_peserta" class="form-control" id="jmlh_peserta" 
                  class="mb-3" value="{{ $event->jmlh_peserta }}" required>
              </div>
              
              <div class="mb-3">
                  <label for="target_capaian" class="form-label">Target Capaian</label>
                  <input type="text" name="target_capaian" class="form-control" id="target_capaian" 
                  class="mb-3" value="{{ $event->target_capaian }}" required>
              </div>
              
              <div class="mb-3">
                <label for="evaluasi" class="form-label">Evaluasi Kegiatan</label>
                <textarea name="evaluasi" class="form-control" id="evaluasi" rows="4" 
                required>{{ $event->evaluasi }}</textarea>
            </div>
              
              <label for="status" class="form-label m-3">Status Kegiatan</label>
              <div class="form-check form-switch mb-4">
                <input class="form-check-input" name="status" value="{{ $event->status }}" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                <label class="form-check-label" for="flexSwitchCheckChecked">Belum Terlaksana/Terlaksana</label>
            </div>            
              
              <div class="mb-3">
                  <a href="/admin/calendar" class="btn btn-warning btn-sm">Kembali</a>
                  <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
              </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="text-center">
            <img class="pt-4" src="{{ asset('storage/img/' . $event->pamflet ) }}" alt="tokoh" 
            style="width: 300px; height:300px; object-fit:contain;">
          </div>
        </div>
      </div>
    </div>
</div>
@endsection