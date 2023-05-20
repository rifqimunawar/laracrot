@section('title') {{ 'Category Book' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
  <div class="container my-3">
    <h4 class="my-5">Category Buku <span style="color: blue">{{ $categorybook->title }}</span></h4>

    <div class="row">
        <table class="table">
            <tr>
                <td class="text-center">No</td>
                <td class="text-start">Judul</td>
                <td class="text-center">Cover</td>
                <td> Aksi</td>
            </tr>
                @foreach ($categorybook->perpus as $perp)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($perp->judul, 30) }}</td>
                    <td class="text-center">
                        <img src="{{ asset('storage/img/'.$perp->image) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                    </td>
                    <td class="text-start">
                        <form action="{{ route('perpus.destroy', $perp->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>        
            {{-- {{ $categorybook->perpus->links() }} --}}
            <div>
              <a href="/admin/categorybooks " class="btn btn-warning btn-sm" >Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection