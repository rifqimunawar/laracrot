@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h4 class="text-center my-4">Data Buku Perpustakaan</h4>

        <div class="mb-3">
            <a href="/admin/perpus/create" class="btn btn-primary btn-sm">Tambah Buku</a>
        </div>

        <div class="row">
            <table class="table">
                <tr>
                    <td class="text-center">No</td>
                    <td class="text-center">Judul</td>
                    <td class="text-center">Cover</td>
                    <td> Aksi</td>
                </tr>
                @foreach ($perpus as $perp)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $perp['judul'] }}</td>
                    <td class="text-center">
                        <img src="{{ asset('storage/img/'.$perp['image']) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                    </td>
                    <td class="text-start">
                        <form action="{{ route('perpus.destroy', $perp->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</div>
@endsection