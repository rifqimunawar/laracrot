@section('title') {{ 'Administrator' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Data Admin</h4>

        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td >Nama</td>
                <td class="text-start">Rayon</td>
                <td class="text-center">Profile</td>
                <td class="text-center"> Aksi</td>
            </tr>
            @foreach ($administrator as $admin)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->rayon->rayon }}</td>
                <td class="text-center">
                  <img class="rouded-circle" style="width: 40px; height: 40px; object-fit:cover" src="{{ asset('storage/img/' . $admin->img ) }}" alt="profile">
                </td>
                <td class="text-center">
                 <a href="/admin/user/{{ $kdr->id }}/details" class="btn btn-success btn-sm">Detail</a>
                  <a href="/profile/{{ $admin->slug }}" class="btn btn-warning btn-sm">Profile</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection