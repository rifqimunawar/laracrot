@section('title') {{ 'Post' }}@endsection
@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1>Posts</h1> --}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li> --}}
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of posts</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{-- @include('includes.admin.alerts') --}}
                                {{-- <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add new</a> --}}
                                <div class="mb-3">
                                  <a href="/admin/post/create" class="btn btn-primary btn-sm">Tambah Post</a>
                              </div>
                                @if (count($posts))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td>{{ $post->id }}</td>
                                                    <td>{{ Str::limit($post->title, 50) }}</td>
                                                    <td>{{ $post->category->title }}</td>
                                                    <td>{{ $post->user->username }}</td>
                                                    <td>
                                                        @if($post->active === 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Deactivated</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('posts.destroy', $post->id) }}"
                                                              method="post"
                                                              class="float-left">
                                                            <a href="{{ url('article') }}/{{$post->slug}}"
																																class="btn btn-info btn-sm float-left mr-1"
																																target="_blank">
                                                                <i class="ri-eye-fill"></i>
                                                            </a>
                                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                                class="btn btn-primary btn-sm float-left mr-1">
                                                                <i class="ri-edit-box-fill"></i>
                                                            </a>
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Do you really want to ' +
                                                                      'delete post!')">
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
                                    <p>There are no posts yet...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                {!! $posts->links() !!}
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
    <!-- /.content-wrapper -->
@endsection
