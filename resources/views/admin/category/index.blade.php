@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Cagtegory Blog</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/category/create">Tambah Category</a>
        
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">Category</td>
                <td class="text-center"> Aksi</td>
            </tr>
            @foreach ($category as $cate)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $cate['name'] }}</td>
                <td class="text-center">
                  <a href="/admin/category/{{ $cate->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action=
                    {{-- "{{ route('admin_destroy', $cate->id) }}"  --}}
                    method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                        ('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection