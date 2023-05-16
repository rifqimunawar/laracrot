@section('title') {{ 'Post' }}@endsection
@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Create Post</h3>
                          </div>
                          <!-- /.card-header -->

                          <form role="form" method="post" 
                          action="/admin/post/store" 
                          enctype="multipart/form-data">
                              @csrf
                              <div class="card-body">

																@include('admin.posts.form')

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