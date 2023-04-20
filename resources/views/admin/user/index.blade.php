@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Data User</h2>
        <h5>Total user: {{ $count_user }}</h5>
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
                    <td class="text-center">Nama</td>
                    <td class="text-center">Rayon</td>
                    <td class="text-center"> </td>
                    <td class="text-center"> Aksi</td>
                    <td class="text-center"> </td>
                </tr>
                
                {{-- syntak dibawah 
                    ($user as $index=> $kdr)
                    untuk kebutuhan pagination --}}
                @foreach ($user as $index=> $kdr)
                <tr>
                    <td class="text-center">{{ $index + $user -> firstItem() }}</td>
                    <td>{{ $kdr['username'] }}</td>
                    <td> <a href="/admin/rayon/{{ $kdr->rayon->slug }}">{{ $kdr->rayon->rayon }}</a> </td>
                    <td class="text-end">
                        <a href="/admin/user/{{ $kdr->rayon->slug }}" class="btn btn-secondary btn-sm">Profile</a>
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
        {{ $user->links() }}
    </div>

</div>
@endsection