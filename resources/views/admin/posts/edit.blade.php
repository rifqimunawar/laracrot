
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
                              <h3 class="card-title">Post "{{ $post->title }}"</h3>
                          </div>
                          <!-- /.card-header -->

                          <form role="form" method="post" action="{{ route('posts.update', $post->id) }}"
                                enctype="multipart/form-data">
                              @csrf @method('PUT')
                              <div class="card-body">

                                <div class="mb-3">
																	<label for="title" class="form-label">Title</label>
																	<input type="textarea" name="alamat" class="form-control" id="title"
																	class="mb-3" value="{{ $post->title }}" id="title"</div>
																</div>

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