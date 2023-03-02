{{-- @extends('user.layout')
@section('content') --}}
  <embed type="application/pdf" src="{{ asset('storage/pdf/download.pdf') }}" width="600" height="400"></embed>
  <iframe src="/storage/pdf/download.pdf" width="600" height="600"></iframe>

{{-- @endsection --}}