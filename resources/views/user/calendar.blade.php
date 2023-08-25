{{-- @dd($user->username); --}}
@section('title') {{ 'Agenda' }}@endsection
@extends('user.layout')
@section('content')
<div class="text-center my-5 pt-3" data-aos="fade-up">
  <h1 class="pt-5">Calender Kegiatan</h1>
</div>
<!-- Gallery -->
<div class="container my-1">
  <div class="row">
    
    <div class="content py-1 mb-4 pb-2" data-aos="fade-up">
      <div id='calendar'></div>
    </div>

    <div class="text-center my-5 pt-3" data-aos="fade-up">
     <h1 class="pt-5">Agenda Kegiatan</h1>
   </div>
   <div class="container pt-2 pb-4 mb-4" data-aos="fade-up">
     <div class="card info-card sales-card" style="box-shadow: 0 0 50px rgba(0, 0, 0, 0.7);">
     <table class="table table-hover">
       <tr>
           <th class="text-center">No</th>
           <th class="text-start">Nama Kegiatan</th>
           <th class="text-start">Penyelenggara</th>
           <th class="text-center">Waktu</th>
       </tr>
       @foreach ($events->take(20) as $event)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $event->title }}</td>
          <td>{{ $event->penyelenggara }}</td>
          <td>{{ date('l, d F Y', strtotime($event->start)) }}</td>
       </tr>
       @endforeach
   </table>
   </div>
 </div>


    <div class="text-center my-5 pt-3" data-aos="fade-up">
      <h1 class="pt-5">Hari Besar Nasional</h1>
    </div>
    <div class="container pt-2 pb-4 mb-4" data-aos="fade-up">
      <div class="card info-card sales-card" style="box-shadow: 0 0 50px rgba(0, 0, 0, 0.7);">
      <table class="table table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-start">Hari Besar</th>
            <th class="text-start">Tanggal</th>
            <th class="text-center">Waktu</th>
        </tr>
        @foreach ($hbns as $hari=>$hbn)
          <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $hbn->title }}</td>
            <td>{{ date('l, d F Y', strtotime($hbn->date)) }}</td>
            <td class="text-center">
                <div id="countdown-{{ $loop->iteration }}"></div>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
  </div>

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agenda Kegiatan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <!-- Konten modal -->
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="title" class="form-label">Nama Kegiatan</label>
              <input type="text" class="form-control" name="title" id="title" readonly>
            </div>
        
            <div class="mb-3">
              <label for="penyelenggara" class="form-label">Penyelenggara Kegiatan</label>
              <input type="text" class="form-control" name="penyelenggara" id="penyelenggara" readonly>
            </div>
        
            <div class="mb-3">
              <label for="tempat" class="form-label">Tempat</label>
              <input type="text" class="form-control" name="tempat" id="tempat" readonly>
            </div>
          </div>
        
          <div class="col-md-6">
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Category</label>
              <input type="text" class="form-control" name="deskripsi" id="deskripsi" readonly>
            </div>
        
            <div class="mb-3">
              <label for="jmlh_peserta" class="form-label">Jumlah Peserta</label>
              <input type="text" class="form-control" name="jmlh_peserta" id="jmlh_peserta" readonly>
            </div>
        
            <div class="mb-3">
              <label for="target_capaian" class="form-label">Target Capaian</label>
              <input type="text" class="form-control" name="target_capaian" id="target_capaian" readonly>
            </div>
          </div>
        </div>        

        <div class="mb-3">
          <label for="evaluasi" class="form-label">Evaluasi Kegiatan</label>
          <input type="text" class="form-control" name="evaluasi" id="evaluasi" readonly>
        </div>

        <div class="mb-3 text-center">
          <input type="text"name="status" class="btn" id="status" readonly>
        </div>
      
      </div>

        <div class="card" style="width: 100%;">
          <img id="pamflet" src="" alt="Gambar Pamflet">
        </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



    
  {{-- javascript for looping tanggl di hari besar nasional  --}}
@foreach ($hbns as $hbn)
<script>
    var targetDate{{ $loop->iteration }} = new Date("{{ date('Y-m-d', strtotime($hbn->date)) }}");

    function countdownTimer{{ $loop->iteration }}() {
        var now = new Date();
        var distance = targetDate{{ $loop->iteration }} - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));

        var countdownDiv = document.getElementById('countdown-{{ $loop->iteration }}');
        countdownDiv.innerHTML = '';

        if (days > 0) {
            var countdownText = 'Tinggal ' + days + ' hari lagi';
            countdownDiv.innerHTML = '<p>' + countdownText + '</p>';
        } else {
            countdownDiv.innerHTML = '<p>Tanggal telah berlalu</p>';
        }

        setTimeout(countdownTimer{{ $loop->iteration }}, 1000);
    }

    countdownTimer{{ $loop->iteration }}();
</script>
@endforeach


  </div>
</div>
@endsection

<script src="js_calendar/jquery-3.3.1.min.js"></script>
<script src="js_calendar/popper.min.js"></script>
<script src="js_calendar/bootstrap.min.js"></script>

<script src='fullcalendar/packages/core/main.js'></script>
<script src='fullcalendar/packages/interaction/main.js'></script>
<script src='fullcalendar/packages/daygrid/main.js'></script>

<!-- Bagian HTML lainnya -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      editable: true,
      eventLimit: true,
      events: {!! json_encode($events) !!},
      eventClick: function(info) {
        // Menampilkan modal saat mengklik acara
        $('#staticBackdrop').modal('show');
        // Mengisi data modal dengan informasi dari acara yang diklik
        $('#staticBackdropLabel').text(info.event.title);
        $('#title').val(info.event.title);
        $('#penyelenggara').val(info.event.extendedProps.penyelenggara);
        $('#tempat').val(info.event.extendedProps.tempat);
        $('#start').val(info.event.start);
        $('#deskripsi').val(info.event.extendedProps.description);
        $('#jmlh_peserta').val(info.event.extendedProps.jmlh_peserta);
        $('#target_capaian').val(info.event.extendedProps.target_capaian);
        $('#evaluasi').val(info.event.extendedProps.evaluasi);

        // Pengkondisian untuk status
        if (info.event.extendedProps.status == 0) {
          $('#status').val('Belum Terlaksana').removeClass().addClass('btn btn-danger');
        } else if (info.event.extendedProps.status == 1) {
          $('#status').val('Terlaksana').removeClass().addClass('btn btn-success');
        }

        // Menampilkan gambar
        $('#pamflet').attr('src', '/storage/img/' + info.event.extendedProps.pamflet);
      }
    });
    calendar.render();
  });
</script>

<!-- Bagian HTML lainnya -->

<script src="js_calendar/main.js"></script>