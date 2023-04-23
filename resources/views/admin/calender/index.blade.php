@section('title') {{ 'Agenda' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Agenda Kegiatan</h2>
        <div class="mb-3">
            <a href="/admin/calendar/create" class="btn btn-primary btn-sm">Tambah Agenda</a>
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <td class="text-center">No</td>
                    <td class="text-center">Nama Kegiatan</td>
                    <td class="text-center">Penyelenggara</td>
                    <td class="text-center">Waktu</td>
                    <td class="text-center">Tempat</td>
                    <td class="text-center"> Aksi</td>

                </tr>
                @foreach ($events as $event)
                
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $event['title'] }}</td>
                    <td>{{ $event['penyelenggara'] }}</td>
                    <td>{{ $event['start'] }}</td>
                    <td>{{ $event['tempat'] }}</td>
                    <td class="text-center">
                        <form action="{{ route('calendar.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus agenda ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>

</div>
@endsection