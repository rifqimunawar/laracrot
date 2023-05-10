@section('title') {{ 'Quotes' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        <h4 class="my-5">Quotes</h4>

        <a class="btn btn-primary mb-3 mx-3" href="/admin/quotes/create">Tambah</a>
        
        <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">Nama</td>
                <td class="text-start">Tokoh/Jabatan</td>
                <td class="text-center">Quotes</td>
                <td class="text-center"> Aksi</td>
            </tr>
            @foreach ($quotes as $quote)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $quote->name }}</td>
                <td>{{ $quote->who }}</td>
                <td>{{ $quote->quote }}</td>
                <td class="btn-group text-center">
                  <form action="">
                    <a href="{{ route('quotes.edit', $quote->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  </form>
                  <form action="{{ route('quotes.destroy', $quote->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm pl-2" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus quotes ini?')">Hapus</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection