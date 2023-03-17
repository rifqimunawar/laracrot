@section('title') {{ 'Category' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Cagtegory Blog</h4>
        <a class="btn btn-primary mb-3 mx-3" href="/admin/blog/category/create">Tambah Category</a>
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td >Category</td>
                <td class="text-center" > Aksi</td>
            </tr>
            @if ($message = Session::get('success'))
            <div class="success" id="success">ajing</div>
            {{-- <div class="alert alert-success alert-block">
                <button type="button" class="btn-close" aria-label="Close">fa <i class="fa fa-close" aria-hidden="true"></i></button>
                <strong>{{ $message }}</strong>
            </div> --}}
            @endif
            @foreach ($category as $cate)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $cate['name'] }}</td>
                <td class="text-center">
                    <div class="btn-group">
                    <a href="/admin/blog/category/{{ $cate->id }}/edit" type="button" class="btn btn-warning btn-sm mx-3" style="border-radius:6px">Edit</a>
                    <form action=
                    "{{ route('destroy', $cate->id) }}" 
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="
                    (tampilkanAlert())">Hapus</button>
                    {{-- <button onclick="return confirm "tampilkanAlert()">Alert</button> --}}
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<script>
    function tampilkanAlert() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            });
    }

    // document.GetElementById('success'){
    //     function success(){
    //     Swal.fire({
    //         icon: 'success',
    //         title: 'Mantap Sahabat ',
    //         text: 'Data Berhasil Ditambahkan',
    //         })
    //     }    
    // }
    </script>
@endsection