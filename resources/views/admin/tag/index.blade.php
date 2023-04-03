@section('title') {{ 'Tag' }}@endsection
@extends('admin.layout')
@section('content')

<div class="card info-card sales-card">
    <div class="container my-3">
        {{-- <table class="table table-striped table-hover">
            <tr>
                <td class="text-center">No</td>
                <td >Tag</td>
                <td class="text-center" > Aksi</td>
            </tr>
            @foreach ($tags as $tag)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $tag['name'] }}</td>
                <td class="text-center">
                    <div class="btn-group">
                    <a href="/admin/blog/tag/{{ $tag->id }}/edit" type="button" class="btn btn-warning btn-sm mx-3" style="border-radius:6px">Edit</a>
                    <form action=
                    "{{ route('destroy', $tag->id) }}" 
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                    ('Apakah Anda yakin ingin menghapus tag ini?')">Hapus</button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </table> --}}




        
        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of tags</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{-- @include('includes.admin.alerts') --}}
                                <a href="/admin/post/tag/create" class="btn btn-primary mb-3">Add new</a>
                                @if (count($tags))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Title</th>
                                                {{-- <th>Slug</th> --}}
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($tags as $tag)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $tag->title }}</td>
                                                    {{-- <td>{{ $tag->slug }}</td> --}}
                                                    <td>
                                                        <form
                                                            action="{{ route('tags.destroy', $tag->id) }}"
                                                            method="post" class="float-left">
                                                            <a href="{{ route('tags.edit', $tag->id) }}"
                                                                class="btn btn-warning btn-sm float-left mr-1">
                                                                <i class="ri-edit-box-fill"></i>
                                                            </a>
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Do you really want to delete tag!')">
                                                                <i class="ri-delete-bin-2-line"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>There are no tags yet...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {!! $tags->links() !!}
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </section>
        <!-- /.content -->


    </div>
</div>
@endsection