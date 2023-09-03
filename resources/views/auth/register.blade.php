<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Register</title>
</head>
<body>
  <section class="vh-100" style="background-color: #363636;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img style="width: 100%; height: 35rem; object-fit:cover; border-radius: 1rem 0 0 1rem;" src="{{ asset('storage/img/login2.jpg') }}"
                  alt="login form" class="img-fluid"/>
              </div>

              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-4 text-black">
                  
                  {{-- <form method="POST" action="/validasii/{{ $user->id }}"> --}}
                  <form method="POST" action="/register/store/{{ $usertoRegis->id }}">
                    @csrf @method('put')

                    <div class="d-flex align-items-center justify-content-center mb-1 pb-1 text-center">
                      <span class="h1 fw-bold mb-4">
                        <img style="width: 100px; height: 100px; object-fit:cover" src="{{ asset('storage/img/logokomi.png') }}" alt="">
                      </span>
                    </div>    

                    <div class="text-center mb-3">
                      <h5>Register</h5>
                    </div>

                    <div class="form-group row mb-1">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $usertoRegis->name }}" readonly autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-1">
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

                    <div class="form-group row  mb-1">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Aktif') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row" style="display: none">
                      <label for="rayon_id"class="col-md-4 col-form-label text-md-right">{{ __('Rayon') }}</label>
                      <div class="col-md-6">
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
                    
                    <div class="form-group row" style="display: none">
                      <label for="rayon_id"class="col-md-4 col-form-label text-md-right">{{ __('Komisariat') }}</label>
                      <div class="col-md-6">
                        <select id="role_id" name="role_id" class="form-select">
                          <option value="4">Uninus</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row mb-1">
                        <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('Nim') }}</label>

                        <div class="col-md-6">
                            <input id="nim" type="number" readonly value="{{ $usertoRegis->nim }}" class="form-control 
                            @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" autocomplete="nim">

                            @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-1">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      
                          <div class="col-md-6">
                            <div class="input-group">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                              
                              <button type="button" id="togglePassword" class="btn btn-primary">
                                <i id="toggleIcon" class="fa fa-eye"></i>
                              </button>
                            </div>
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
                        <div class="input-group">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          
                          <button type="button" id="toggleConfirmPassword" class="btn btn-primary">
                            <i id="toggleConfirmIcon" class="fa fa-eye"></i>
                          </button>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row my-2">
                        <div class="col-md-6 offset-md-4">
                          <a href="/login" class="btn btn-warning">Kembali</a>
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
      </div>
    </div>
  </section>

    {{-- script password dilihat atau tidak  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        var passwordInput = document.getElementById("password");
        var toggleButton = document.getElementById("togglePassword");
        var toggleIcon = document.getElementById("toggleIcon");

        toggleButton.addEventListener("click", function() {
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
          } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
          }
        });

        var confirmPasswordInput = document.getElementById("password-confirm");
        var toggleConfirmButton = document.getElementById("toggleConfirmPassword");
        var toggleConfirmIcon = document.getElementById("toggleConfirmIcon");

        toggleConfirmButton.addEventListener("click", function() {
          if (confirmPasswordInput.type === "password") {
            confirmPasswordInput.type = "text";
            toggleConfirmIcon.classList.remove("fa-eye");
            toggleConfirmIcon.classList.add("fa-eye-slash");
          } else {
            confirmPasswordInput.type = "password";
            toggleConfirmIcon.classList.remove("fa-eye-slash");
            toggleConfirmIcon.classList.add("fa-eye");
          }
        });
      </script>
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
  
  {{-- script sweet alert  --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @include('sweetalert::alert')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>

