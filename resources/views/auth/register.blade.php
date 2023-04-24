<!DOCTYPE html>
<html>
<head>
  <title>Form Registrasi</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link ke stylesheet bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">{{ __('Register') }}</div>
      
                          <div class="card-body">
                              <form method="POST" action="/register/store">
                                  @csrf
      
                                  <div class="form-group row">
                                      <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
      
                                      <div class="col-md-6">
                                          <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
      
                                          @error('username')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
                                  
                                  <label for="rayon_id">Pilih Rayon:</label>
                                  <select id="rayon_id" name="rayon_id">
                                    <option value="Belum Memilih Rayon">--Pilih Rayon--</option>
                                    <option value="1">Rayon Teknik</option>
                                    <option value="2">Rayon Hukum</option>
                                    <option value="4">Rayon Ekonomi</option>
                                    <option value="5">Rayon Fikom</option>
                                    <option value="3">Rayon Ulul Albab</option>
                                    <option value="6">Rayon Fkip</option>
                                  </select>

                                  <div class="form-group row">
                                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
      
                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
      
                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
      
                                  <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
      
                                      <div class="col-md-6">
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
      
                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
      
                                  <div class="form-group row">
                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
      
                                      <div class="col-md-6">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                      </div>
                                  </div>
      
                                  <div class="form-group row mb-0">
                                      <div class="col-md-6 offset-md-4">
                                          <button type="submit" class="btn btn-primary">
                                              {{ __('Register') }}
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
    </div>
  </div>

  {{-- validasi confrimsi password harus sama dengan password yang dimasukan  --}}
  <script type="text/javascript">
    window.onload = function () {
        document.getElementById("password").onchange = validatePassword;
        document.getElementById("password-confirm").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("password-confirm").value;
    var pass1=document.getElementById("password").value;
    if(pass1!=pass2)
        document.getElementById("password-confirm").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("password-confirm").setCustomValidity('');
    }
</script>
  

  <!-- Link ke script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
