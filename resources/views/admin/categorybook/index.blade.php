@section('title') {{ 'Category Book' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Category Book</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/categorybooks/create">Tambah</a>
        
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">Category</td>
                <td class="text-start">Jumlah</td>
                <td class="text-center"> Aksi</td>
            </tr>
            @foreach ($categorybook as $category)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->perpus->count() }}</td>
                <td class="btn-group text-center">
                  <form action="">
                    <a href="{{ route('categorybooks.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  </form>
                  {{-- <form action="{{ route('categorybooks.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm pl-2" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus categorybooks ini?')">Hapus</button>
                  </form> --}}
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection