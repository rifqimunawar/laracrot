@section('title') {{ 'Galeri' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Galeri</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/galeri/create">Tambah Gambar</a>
        
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">Judul</td>
                <td class="text-start">Upload By:</td>
                <td class="text-center">Gambar</td>
                <td class="text-center">Keterangan</td>
                <td class="text-center"> Aksi</td>
                <td class="text-center">  </td>
            </tr>
            @foreach ($galeri as $galer)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $galer['judul'] }}</td>
                <td>User Upload</td>
                <td class="text-center">
                    <img src="{{ asset('storage/uploads/'.$galer['galeri']) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                </td>
                <td class="text-center">
                    @if($galer->active === 1)
                        <span class="badge bg-success">Publish</span>
                    @else
                        <span class="badge bg-danger">Private</span>
                    @endif
                </td>
                <td class="text-center">
                    <form action="{{ route('admin_destroy', $galer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                        ('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection