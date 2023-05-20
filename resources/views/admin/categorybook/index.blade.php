@section('title') {{ 'Category Book' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Category Book</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/categorybooks/create">Tambah</a>
        
        <table class="table table-striped table-hover">
            <tr>
                <th class="text-center">No</th>
                <th >Category</th>
                <th class="text-start">Jumlah</th>
                <th class="text-center"> Aksi</th>
            </tr>
            @foreach ($categorybook as $category)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->perpus->count() }}</td>
                <td class="text-center">
                  <form action="{{ route('categorybooks.destroy', $category->id) }}" method="POST">
                    <a href="{{ route('categorybooks.show', $category->id) }}" class="btn btn-success btn-sm">Lihat</a>
                    <a href="{{ route('categorybooks.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm pl-2" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus Category ini?')">Hapus</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div>
          <a href="/admin" class="btn btn-warning btn-sm" >Kembali</a>
        </div>
    </div>
</div>
@endsection