@section('title') {{ 'Edit Tag' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

        <h4 class="text-center my-3">Edit Tag Blog</h4>
        {{-- <form action="/admin/blog/tag/{{ $tag->id }}" method="post">
          @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tag Baru</label>
                <input type="text" name="name" class="form-control" id="name" class="mb-3" required id="name" value="{{ $tag->name }}">
            </div>
            <div class="mb-3">
                <a href="/admin/blog/tag" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </form> --}}



        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tag "{{ $tag->title }}"</h3>
                            </div>
                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('tags.update', $tag->id) }}">
                                @csrf @method('PUT')
                                <div class="card-body">
                                    @include('admin.tags.form')
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

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