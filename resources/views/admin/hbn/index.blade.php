@section('title') {{ 'Hari Besar' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Hari Besar Nasional</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/hbn/create">Tambah</a>
        
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">Nama</td>
                <td class="text-start">Tanggal</td>
                <td class="text-center">Waktu</td>
                <td class="text-center"> Aksi</td>
            </tr>
            @foreach ($hbns as $hari=>$hbn)
              <tr>
                <td class="text-center">{{ $hari + $hbns -> firstItem() }}</td>
                <td>{{ $hbn->title }}</td>
                <td>{{ date('Y-m-d', strtotime($hbn->date)) }}</td>
                <td class="text-center">
                    <div id="countdown-{{ $loop->iteration }}"></div>
                </td>
                <td class="text-center">
                  <form action="{{ route('hbn.destroy', $hbn->id) }}" method="POST">
                    {{-- <i class="bi bi-eye btn btn-success btn-sm pl-2 " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i> --}}
                    {{-- <a href="{{ route('quotes.edit', $hbn->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm pl-2" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus quotes ini?')">Hapus</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $hbns->links() }}
    </div>
</div>


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