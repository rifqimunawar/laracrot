@section('title') {{ 'Details' }}@endsection
@extends('admin.layout')
@section('content')

<div class="row">
  <div class="col-lg-12 card my-3">
    <h4 class="text-center my-2">Profile Details</h4>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="card mb-4">
      <div class="card-body text-center">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
          class="rounded-circle img-fluid" style="width: 150px;">
        <h5 class="my-3">John Smith</h5>
        <p class="text-muted mb-1">Full Stack Developer</p>
        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
        <div class="d-flex justify-content-center mb-2">
          <button type="button" class="btn btn-primary">Follow</button>
          <button type="button" class="btn btn-outline-primary ms-1">Message</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-8">
    <div class="card mb-4">
      <div class="card-body">

        <div class="row pt-3">
          <div class="col-sm-3">
            <p class="mb-0">Full Name</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">Johnatan Smith</p>
          </div>
        </div><hr>
        <div class="row">
          <div class="col-sm-3">
            <p class="mb-0">Full Name</p>
          </div>
          <div class="col-sm-9">
            <p class="text-muted mb-0">Johnatan Smith</p>
          </div>
        </div><hr>

      </div>
      
      
      </div>
    </div>
  </div>

</div>
        
        

    </div>
</div>
@endsection