@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">

        <h2 class="text-center my-2">Data Anggota <br> Rayon 

            @foreach ($rayon as $ray)
                @foreach ($ray->users->take(1) as $item)
                    {{ $item->rayon->rayon}}
                @endforeach
            @endforeach

        </h2>


        @foreach ($rayon as $r)
            <div class="card">
                <div class="card-header">
                    <h5>Total Anggota Rayon {{ $r->rayon }}:  {{ $r->users->count() }}</h5>
                </div>
            </div>
        @endforeach

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
                @foreach ($rayon as $ray)
                    @foreach ($ray->users as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->username}}</td>
                        <td>{{ $item->rayon->rayon}}</td>
                        <td class="text-end">
                            <a href="/admin/rayon/{{ $ray->id }}/view" class="btn btn-secondary btn-sm">Lihat Kader</a>
                        </td>
                        <td class="text-center">
                            <a href="/admin/rayon/{{ $ray->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td class="text-start">
                            <form action="{{ route('rayon.destroy', $ray->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                                ('Apakah Anda yakin ingin menghapus rayon ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endforeach
            </table>
            {{ $user->links() }}
        </div>
    </div>

</div>
@endsection