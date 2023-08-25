@section('title') {{ 'Kader PKL' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Data Kader Pasca PKL</h4>

        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td >Nama</td>
                <td class="text-start">Rayon</td>
                <td class="text-center">Profile</td>
                <td class="text-center"> Aksi</td>
            </tr>
            @foreach ($kaderpkl as $kader)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $kader->name }}</td>
                <td>{{ $kader->rayon->rayon }}</td>
                <td class="text-center">
                  <img class="rouded-circle" style="width: 40px; height: 40px; object-fit:cover" src="{{ asset('storage/img/' . $kader->img ) }}" alt="profile">
                </td>
                <td class="text-center">
                 <a href="/admin/user/{{ $kader->id }}/details" class="btn btn-success btn-sm">Detail</a>
                  <a href="/profile/{{ $kader->slug }}" class="btn btn-warning btn-sm">Profile</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $kaderpkl->links() }}
    </div>
</div>
@endsection