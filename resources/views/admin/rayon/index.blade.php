@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Data Rayon</h2>
        {{-- <h4>Total Rayon: {{ $rayon->count() }}</h4> --}}
        <h5>Total Rayon: {{ $rayon->count() }}</h5>
        <div class="mb-3">
            <a href="/admin/rayon/create" class="btn btn-primary btn-sm">Tambah Rayon</a>
        </div>
        <div class="my-3 col-12 col-sm-8 col-md-6 ">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search.....">
                    <button class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <td class="text-center">No</td>
                    <td class="text-center">Nama</td>
                    <td class="text-center"> </td>
                    <td class="text-center"> Aksi</td>
                    <td class="text-center"> </td>
                </tr>
                @foreach ($rayon as $kdr)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $kdr['rayon'] }}</td>
                    <td class="text-end">
                        <a href="/admin/rayon/{{ $kdr->id }}/view" class="btn btn-secondary btn-sm">Lihat</a>
                    </td>
                    <td class="text-center">
                        <a href="/admin/rayon/{{ $kdr->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td class="text-start">
                        <form action="{{ route('rayon.destroy', $kdr->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus rayon ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
@endsection