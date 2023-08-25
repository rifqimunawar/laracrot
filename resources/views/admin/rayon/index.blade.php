@section('title') {{ 'Rayon' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Data Rayon</h2>
        {{-- <h4>Total Rayon: {{ $rayon->count() }}</h4> --}}
        <h5>Total Rayon: {{ $rayon->count() }}</h5>
        <div class="mb-3">
            {{-- <a href="/admin/rayon/create/new" class="btn btn-primary btn-sm">Tambah Rayon</a> --}}
        </div>
        <div class="my-3 col-12 col-sm-8 col-md-6 ">
            <form action="" method="get">
                {{-- <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search.....">
                    <button class="btn btn-primary">Search</button>
                </div> --}}
            </form>
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-start">Nama Rayon</th>
                    <th class="text-start">Jumlah Kader</th>
                    <th class="text-center"> Aksi</th>
                </tr>
                @foreach ($rayon as $kdr)
                
                {{-- @dd($kdr) --}}
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $kdr['rayon'] }}</td>
                    <td> 
                      <a href="{{ route('user.rayon.list', $kdr->slug) }}" class="btn btn-success btn-sm">
                        {{ $kdr->users->count() }} Kader</a>
                    </td>
                    <td class="text-center">
                      <form action="">
                        <a href="{{ route('user.rayon.list', $kdr->slug) }}" class="btn btn-secondary btn-sm">Lihat</a>
                        @if (in_array(auth()->user()->role_id, [1]))
                          <a href="/admin/rayon/{{ $kdr->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                          @endif
                      </form>
                    </td>
                    
                    {{-- <td class="text-start">
                        <form action="{{ route('rayon.destroy', $kdr->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus rayon ini?')">Hapus</button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </table>

        </div>
    </div>

</div>
@endsection