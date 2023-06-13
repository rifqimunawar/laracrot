<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
  <section class="vh-100" style="background-color: #363636;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{ asset('storage/img/login.jpeg') }}"
                  alt="login form" class="img-fluid" style="width: 100%; height: 35rem; object-fit:cover; border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  
                  <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group mb-3">
                      <label class="font-weight-bold text-uppercase">Email Address</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                          name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                          placeholder="Masukkan Alamat Email">
                  
                          @if ($errors->any())
                            <div class="alert alert-danger mt-2">
                              <ul>
                                @foreach ($errors->all as $error)
                                    <li> <strong>{{ $error }}</strong></li>
                                @endforeach
                              </ul>
                            </div>
                          @endif

                        {{-- @error('email')
                        <div class="alert alert-danger mt-2">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror --}}
                    </div>

                    <div class="pt-1 mb-4 d-flex justify-content-between">
                      <a href="/login" class="btn btn-warning btn-lg">Kembali</a>
                      <button class="btn btn-success btn-lg" type="submit">Reset Password</button>
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
  
  {{-- script sweet alert  --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @include('sweetalert::alert')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>










<form method="POST" 
{{-- action="{{ route('password.email') }}" --}}
action=""
>
  @csrf

  <div class="form-group">
      <label class="font-weight-bold text-uppercase">Email Address</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
          name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
          placeholder="Masukkan Alamat Email">

      @error('email')
      <div class="alert alert-danger mt-2">
          <strong>{{ $message }}</strong>
      </div>
      @enderror
  </div>

  <button type="submit" class="btn btn-primary btn-block">SEND PASSWORD RESET LINK</button>
</form>