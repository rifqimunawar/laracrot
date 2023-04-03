@section('title') {{ 'Edit Category' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

        <h4 class="text-center my-3">Edit Category Blog</h4>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Category "{{ $category->title }}"</h3>
                            </div>
                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('categories.update', $category->id) }}">
                                @csrf @method('PUT')
                                <div class="card-body">
                                    @include('admin.categories.form')
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