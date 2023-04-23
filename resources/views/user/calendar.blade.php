{{-- @dd($user->username); --}}
@section('title') {{ 'Agenda' }}@endsection
@extends('user.layout')
@section('content')
<div class="text-center my-5 pt-3">
  <h1 class="pt-5">Calender Kegiatan</h1>
</div>
<!-- Gallery -->
<div class="container my-1">
  <div class="row">
    
    <div class="content py-1 mb-4 pb-2">
      <div id='calendar'></div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Agenda Kegiatan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
              <label for="penyelenggara" class="form-label">Penyelenggara Kegiatan</label>
              <input type="text" class="form-control" name="penyelenggara" id="penyelenggara" readonly >
            </div>
            
            <div class="mb-3">
              <label for="tempat" class="form-label">Tempat</label>
              <input type="text" class="form-control" name="tempat" id="tempat" readonly >
            </div>
            
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <input type="text" class="form-control" name="deskripsi" id="deskripsi"readonly >
            </div>
            
            <div class="card" style="width: 100%;">
              <img id="pamflet" src="" alt="Gambar Pamflet">
            </div>

            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
@endsection

<script src="js_calendar/jquery-3.3.1.min.js"></script>
<script src="js_calendar/popper.min.js"></script>
<script src="js_calendar/bootstrap.min.js"></script>

<script src='fullcalendar/packages/core/main.js'></script>
<script src='fullcalendar/packages/interaction/main.js'></script>
<script src='fullcalendar/packages/daygrid/main.js'></script>

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
        // Menampilkan gambar
        $('#pamflet').attr('src', '/storage/img/' + info.event.extendedProps.pamflet);
      }
    });
    calendar.render();
  });

</script>


<script src="js_calendar/main.js"></script>