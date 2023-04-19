@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Data User</h2>
        {{-- <h4>Total user: {{ $user->count() }}</h4> --}}
        <h5>Total user: {{ $user->count() }}</h5>
        <div class="mb-3">
            <a href="/admin/user/create" class="btn btn-primary btn-sm">Tambah User</a>
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
                    <td class="text-center">Nama User</td>
                    <td class="text-center">Rayon</td>
                    <td class="text-center"> </td>
                    <td class="text-center"> Aksi</td>
                    <td class="text-center"> </td>
                </tr>
                @foreach ($user as $kdr)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $kdr['username'] }}</td>
                    <td> <a href="/admin/rayon/{{ $kdr->rayon->slug }}">{{ $kdr->rayon->slug }}</a> </td>
                    <td class="text-end">
                        <a href="/admin/user/{{ $kdr->slug }}" class="btn btn-secondary btn-sm">Lihat Kader</a>
                    </td>
                    <td class="text-center">
                        <a href="/admin/user/{{ $kdr->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td class="text-start">
                        <form action="{{ route('user.destroy', $kdr->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus user ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
@endsection