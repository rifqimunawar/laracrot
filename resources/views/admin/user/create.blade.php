
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
</head>
<body>
  
  @extends('admin.layout')
  @section('content')
  <div class="card info-card sales-card">
      <div class="container">
  
        <div class="text-center pt-5 mt-5">
          <h4>Tambah Kader</h4>
        </div>
        <div class="row pt-4 mt-5">
          <div class="col-md-6">
  
            <form action="{{ route('store.user') }}" method="post" enctype="multipart/form-data" >
              @csrf 
  
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap Sesuai KTP</label>
                <input type="text" name="name" class="form-control
                @error('name') is-invalid @enderror" id="name">
                
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
  
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim"id="nim"  class="form-control
                @error('nim') is-invalid @enderror" id="nim" required>
                
                @error('nim')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
  
              <div class="mb-3">
                <label for="provinces" class="form-label">Alamat Provinsi</label>
              <select class="form-select" name="provinces" aria-label="Default select example" id="provinsi">
                <option disabled selected>==Pilih Provinsi==</option>
                  @foreach ($provinsi as $provinces)
                    <option value="{{ $provinces->id }}">{{ $provinces->name }}</option>
                  @endforeach
              </select>
              </div>
  
              <div class="mb-3">
                <label for="kabupaten" class="form-label">Alamat Kabupaten</label>
              <select class="form-select" name="kabupaten" aria-label="Default select example" id="kabupaten">
                <option disabled selected>==Pilih Kabupaten==</option>
                  
              </select>
              </div>
  
              <div class="pt-3 text-end">
                <a href="/admin/user" class="btn btn-warning btn-sm">Kembali</a>
                <button type="submit" class="btn btn-success btn-sm" >Simpan</button>
              </div>
  
            </form>
  
          </div>
          
          {{-- <div class="col-md-6">
            <div class="text-center">
              <img src="{{ asset('storage/img/' . $user->img ) }}" class="rounded" alt="..." 
              style="width: 80%; border-radius:20px;box-shadow: 4px 5px 8px rgba(0, 0, 0, 0.3)">
            </div>
          </div> --}}
      </div>
  
  </div>




{{-- script  --}}
<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function(){
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $(function(){
            $('#provinsi').on('change',function(){
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('getkabupaten') }}",
                    data: {id_provinsi: id_provinsi},
                    cache: false,

                    success: function(msg){
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');
                    },
                    error: function(data){
                        console.log('error:', data);
                    }
                });
            });
        });
    });
</script>

@endsection
</body>
</html>