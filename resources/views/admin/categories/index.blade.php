@section('title') {{ 'Category' }}@endsection
@extends('admin.layout')
@section('content')


        
        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of categories</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add new</a>
                                @if (count($categories))
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
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $category->title }}</td>
                                                    {{-- <td>{{ $category->slug }}</td> --}}
                                                    <td>
                                                        <form
                                                            action="{{ route('categories.destroy', $category->id) }}"
                                                            method="post" class="float-left">
                                                            <a href="{{ route('categories.edit', $category->id) }}"
                                                                class="btn btn-warning btn-sm float-left mr-1">
                                                                <i class="ri-edit-box-fill"></i>
                                                            </a>
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Do you really want to delete category!')">
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
                                    <p>There are no categories yet...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {!! $categories->links() !!}
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

@endsection