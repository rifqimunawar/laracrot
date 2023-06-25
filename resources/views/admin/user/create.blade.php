
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
  
              <div>
                <label>Provinsi:</label>
                <select id="province" name="province">
                    <option value="">Pilih Provinsi</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div>
                  <label>Kabupaten:</label>
                  <select id="regency" name="regency">
                      <option value="">Pilih Kabupaten</option>
                  </select>
              </div>
              
              <div>
                  <label>Kecamatan:</label>
                  <select id="district" name="district">
                      <option value="">Pilih Kecamatan</option>
                  </select>
              </div>
              
              <div>
                  <label>Desa:</label>
                  <select id="village" name="village">
                      <option value="">Pilih Desa</option>
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
    $(document).ready(function() {
        // Fungsi untuk mendapatkan data kabupaten berdasarkan provinsi yang dipilih
        $('#province').change(function() {
            var provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    url: '/regencies/' + provinceId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#regency').empty();
                        $('#district').empty();
                        $('#village').empty();

                        $('#regency').append('<option value="">Pilih Kabupaten</option>');
                        $('#district').append('<option value="">Pilih Kecamatan</option>');
                        $('#village').append('<option value="">Pilih Desa</option>');

                        $.each(data, function(key, value) {
                            $('#regency').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#regency').empty();
                $('#district').empty();
                $('#village').empty();
            }
        });

        // Fungsi untuk mendapatkan data kecamatan berdasarkan kabupaten yang dipilih
        $('#regency').change(function() {
            var regencyId = $(this).val();
            if (regencyId) {
                $.ajax({
                    url: '/districts/' + regencyId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#district').empty();
                        $('#village').empty();

                        $('#district').append('<option value="">Pilih Kecamatan</option>');
                        $('#village').append('<option value="">Pilih Desa</option>');

                        $.each(data, function(key, value) {
                            $('#district').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#district').empty();
                $('#village').empty();
            }
        });

        // Fungsi untuk mendapatkan data desa berdasarkan kecamatan yang dipilih
        $('#district').change(function() {
            var districtId = $(this).val();
            if (districtId) {
                $.ajax({
                    url: '/villages/' + districtId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#village').empty();

                        $('#village').append('<option value="">Pilih Desa</option>');

                        $.each(data, function(key, value) {
                            $('#village').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#village').empty();
            }
        });
    });
</script>





{{-- <script>
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
</script> --}}

@endsection
</body>
</html>