@section('title') {{ 'Hari Besar' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Hari Besar Nasional</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/quotes/create">Tambah</a>
        
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">Nama</td>
                <td class="text-start">Tanggal</td>
                <td class="text-center">Waktu</td>
                <td class="text-center"> Aksi</td>
            </tr>
            @foreach ($hbns as $hbn)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $hbn->title }}</td>
                <td>{{ $hbn->date }}</td>
                <td>

                  <td>
                    <script>
                      CountDownTimer('{{tanggal sekarang}}', 'countdown');
                      function CountDownTimer(dt, id)
                      {
                        var end = new Date('{{$tugas->end_date}}');
                        var _second = 1000;
                        var _minute = _second * 60;
                        var _hour = _minute * 60;
                        var _day = _hour * 24;
                        var timer;
                        function showRemaining() {
                          var now = new Date();
                          var distance = end - now;
                          if (distance < 0) {
              
                            clearInterval(timer);
                            document.getElementById(id).innerHTML = '<b>TUGAS SUDAH BERAKHIR</b> ';
                            return;
                          }
                          var days = Math.floor(distance / _day);
                          var hours = Math.floor((distance % _day) / _hour);
                          var minutes = Math.floor((distance % _hour) / _minute);
                          var seconds = Math.floor((distance % _minute) / _second);
              
                          document.getElementById(id).innerHTML = days + 'days ';
                          document.getElementById(id).innerHTML += hours + 'hrs ';
                          document.getElementById(id).innerHTML += minutes + 'mins ';
                          document.getElementById(id).innerHTML += seconds + 'secs';
                          document.getElementById(id).innerHTML +='<h2>TUGAS BELUM BERAKHIR</h2>';
                        }
                        timer = setInterval(showRemaining, 1000);
                      }
                    </script>
                    <div id="countdown"> 
                    </td>

                </td>
                <td class="text-center">
                  <form action="{{ route('quotes.destroy', $hbn->id) }}" method="POST">
                    <i class="bi bi-eye btn btn-success btn-sm pl-2 " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    <a href="{{ route('quotes.edit', $hbn->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm pl-2" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus quotes ini?')">Hapus</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hari Besar Nasional</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{-- <p>{{ $hbns->deskripsi }}</p> --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection