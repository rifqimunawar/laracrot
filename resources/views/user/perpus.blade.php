@extends('/user/layout')
@section('content')
        <div class="container card info-card sales-card mt-5">
            <h4 class="text-center">Perpustakaan Komisariat</h4>
            <div class="row" style="margin-left:0">
              @foreach ($perpus as $perp)
                  <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px; margin-right:0">
                    <img src="{{ asset('storage/uploads/'.$perp['image']) }}" style="width: 100%; border-radius:25px">
                    <div class="text-center mt-3">
                      <a href="/perpus/baca" target="_blank" type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Baca</a>
                      {{-- <a href="{{ asset('storage/pdf/'.$perp['pdf'])  }}" target="_blank" type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Baca</a> --}}
                      <a href="{{ asset('storage/pdf/'.$perp['pdf'])  }}" download type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Download</a>
                    </div>
                </div>
              @endforeach 
                
{{-- 
                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px">
                    <img src="{{ asset('storage/uploads/25558011._SX318_.jpg') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border-radius:10px;">Baca</a>
                    </div>
                </div>
                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px; margin-right:0">
                    <img src="{{ asset('storage/uploads/download.jfif') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse"> 
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Baca</a>
                    </div>
                </div>

                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px">
                    <img src="{{ asset('storage/uploads/25558011._SX318_.jpg') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border-radius:10px;">Baca</a>
                    </div>
                </div>
                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px; margin-right:0">
                    <img src="{{ asset('storage/uploads/download.jfif') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Baca</a>
                    </div>
                </div>

                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px">
                    <img src="{{ asset('storage/uploads/25558011._SX318_.jpg') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border-radius:10px;">Baca</a>
                    </div>
                </div>
                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px; margin-right:0">
                    <img src="{{ asset('storage/uploads/download.jfif') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Baca</a>
                    </div>
                </div>

                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px">
                    <img src="{{ asset('storage/uploads/25558011._SX318_.jpg') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border-radius:10px;">Baca</a>
                    </div>
                </div>
                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px; margin-right:0">
                    <img src="{{ asset('storage/uploads/1 (5).jpg') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;  border-radius:10px;">Baca</a>
                    </div>
                </div>

                <div class="col-md-2 my-3 mx-2 shadow p-3 mb-5 bg-body-tertiary rounded" style="width:180px">
                    <img src="{{ asset('storage/uploads/25558011._SX318_.jpg') }}" style="width: 100%; border-radius:25px">
                    <div class="pt-2 d-flex flex-row-reverse">
                        <a href="#"type="button" class="btn btn-outline-secondary btn-sm"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; border-radius:10px;">Baca</a>
                    </div>
                </div>
                 --}}
            </div>
        </div>
@endsection