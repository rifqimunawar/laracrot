@section('title') {{ 'Pengurus' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Pengurus</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/pengurus/create">Tambah</a>
        
        <table class="table table-striped table-hover">
          <tr>
              <td class="text-center">No</td>
              <td class="text-center">Nama</td>
              <td class="text-start">Jabatan</td>
              <td class="text-center">Gambar</td>
              <td class="text-center"> Aksi</td>
          </tr>
          @foreach ($penguruses as $pengurus)
          <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $pengurus->name }}</td>
              <td>{{ $pengurus->jabatan }}</td>
              <td class="text-center">
                <img src="{{ asset('storage/img/' . $pengurus->img ) }}" alt="" 
                style="width: 40px; height:40px; object-fit:cover">
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="{{ route('pengurus.edit', $pengurus->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ route('pengurus.destroy', $pengurus->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm pl-2" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus pengurus ini?')">Hapus</button>
                  </form>
                </div>
              </td>
          </tr>
          @endforeach
      </table> 
  

    </div>
</div>
@endsection