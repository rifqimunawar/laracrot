<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link ke stylesheet bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <section class="vh-100" style="background-color: #363636;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{ asset('storage/img/register.jpg') }}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form method="POST" action="/register/store">
                    @csrf
  
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>
                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <input id="name" type="text" id="form2Example17" class="form-control form-control-lg" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <input id="username" type="text" class="form-control form-control-lg" @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
  
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <label for="rayon_id"class="col-md-4 col-form-label text-md-right">{{ __('Rayon') }}</label>
                    <div class="form-group row mb-3">
                      <div class="col-md-12">
                        <select id="rayon_id" name="rayon_id" class="form-select">
                          <option value="3">Rayon Ulul Albab</option>
                          <option value="2">Rayon Hukum</option>
                          <option value="1">Rayon Teknik</option>
                          <option value="4">Rayon Ekonomi</option>
                          <option value="5">Rayon Fikom</option>
                          <option value="6">Rayon Fkip</option>
                        </select>
                      </div>
                    </div>
                    
                    <label for="rayon_id"class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                    <div class="form-group row mb-3">
                      <div class="col-md-12">
                        <select id="role_id" name="role_id" class="form-select">
                          {{-- <option value="1">Super Admin/Komisariat</option>
                          <option value="2">Admin/Rayon</option> --}}
                          <option value="3">User/Kader</option>
                        </select>
                      </div>
                    </div>
  
                    
                    
  
                    <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('Nim') }}</label>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="nim" type="number" class="form-control form-control-lg" @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" autocomplete="nim">
  
                            @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
  
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <div class="form-group row mb-3">
  
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control form-control-lg" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
  
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
  
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="form-group row mb-3">
  
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
  
                    <div class="form-group row mb-3">
                      <div class="col-md-12 offset-md-4">
                          <a href="/login" class="btn btn-warning btn-lg btn-block" >Kembali</a>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
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
      </div>
    </div>
  </section>

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