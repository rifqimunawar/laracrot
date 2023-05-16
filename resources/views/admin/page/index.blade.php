@section('title') {{ 'Page' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">
        <h2 class="text-center my-2">Edit Home Page</h2>
        <div class="row">
            <table class="table">
                <tr>
                    <td class="text-center">No</td>
                    <td class="text-center">Judul</td>
                    <td class="text-center">Deskripsi</td>
                    <td class="text-center">Link</td>
                    <td class="text-center">Gambar</td>
                    <td class="text-center"> Aksi</td>
                </tr>
                @foreach ($pages as $page)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $page['judul'] }}</td>
                    <td>{{ $page['deskripsi'] }}</td>
                    <td>{{ $page['link'] }}</td>
                    <td class="text-center">
                        <img src="{{ asset('storage/img/' . $page->gambar ) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
                    </td>
                    <td class="text-center">
                        <a href="/admin/page/{{ $page->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection