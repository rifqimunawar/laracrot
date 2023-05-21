@section('title') {{ 'Unverification' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h2 class="my-5 card-title">Data Kader Belum Diverifikasi</h2>

        
        <div class="card-body">
          {{-- <h5 class="card-title">Data Kader <span>Belum Diverifikasi</span></h5> --}}
        <table class="table table-striped table-hover">
          <tr>
              <td class="text-center">No</td>
              <td class="text-center">Nama</td>
              <td class="text-start"> Username:</td>
              <td class="text-center">Nim</td>
              <td class="text-center">Rayon</td>
              <td class="text-center">Profile</td>
              <td class="text-center"> Aksi</td>
              <td class="text-center">  </td>
          </tr>
          @foreach ($unverification as $user)
          <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td class="text-center">{{ $user->nim }}</td>
            <td class="text-center">{{ $user->rayon->rayon }}</td>
            <td class="text-center">
                <img src="{{ asset('storage/img/' . $user->img ) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
            </td>
            <td class="text-center">
                <a href="/admin/user/{{ $user->id }}/edit" class="btn btn-danger btn-sm">Verifikasi</a>
            </td>
        </tr>
          @endforeach
      </table>
      </div>
      {{ $unverification->links() }}
    </div>
</div>
@endsection
            