@extends('/user/layout')
@section('content')
<div class="text-center my-5 pt-3">
  <h4 class="pt-5">Perpustakaan Kader</h4>
        <div class="container card info-card sales-card mt-5">
            <div class="row" style="margin-left:0">
              @foreach ($perpus as $perp)
                  <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px; margin-right:0">
                    <img src="{{ asset('storage/uploads/'.$perp['image']) }}" style="width: 100%; border-radius:25px">
                    <div class="text-center mt-3">
                      <a href="{{ asset('storage/pdf/'.$perp['pdf'])  }}" download type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Download & Baca</a>
                    </div>
                </div>
              @endforeach 

            </div>
        </div>
    </div>
@endsection