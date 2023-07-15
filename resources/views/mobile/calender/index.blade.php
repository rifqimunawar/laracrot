@section('title') {{ 'Search' }}@endsection
    @extends('mobile.layout')
@section('content')
     <!-- App Header -->
     <div class="appHeader">
      <div class="left">
          <a href="{{ route('homepage') }}" class="headerButton goBack">
              <ion-icon name="chevron-back-outline"></ion-icon>
          </a>
      </div>
      <div class="pageTitle">
          Calender Agenda
      </div>
      <div class="right">
          <a href="#" class="headerButton toggle-searchbox">
              <ion-icon name="search-outline"></ion-icon>
          </a>
      </div>
  </div>
  <!-- * App Header -->

      <!-- App Capsule -->
      <div id="appCapsule" class="extra-header-active full-height">


       <div class="section mt-1 mb-2">
           <div class="card">

                
              <div class="content py-1 mb-4 pb-2" data-aos="fade-up">
               <div id='calendar'></div>
             </div>
           </div>
       </div>

       <div class="section mb-2">
           {{-- <a href="#" class="back-to-top btn btn-block btn-secondary">Search</a> --}}
       </div>
   </div>
   <!-- * App Capsule -->
@endsection


    
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


<script src="{{ asset('js_calendar/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js_calendar/popper.min.js') }}"></script>
<script src="{{ asset('js_calendar/bootstrap.min.js') }}"></script>

<script src='{{ asset('fullcalendar/packages/core/main.js') }}'></script>
<script src='{{ asset('fullcalendar/packages/interaction/main.js') }}'></script>
<script src='{{ asset('fullcalendar/packages/daygrid/main.js') }}'></script>

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

<script src="{{ asset('js_calendar/main.js') }}"></script>