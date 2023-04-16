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
          <div class="card-header">
            <h1>Form Registrasi</h1>
            <form method="POST" action="/register/store">
              @csrf
              {{-- <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>

                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
              </div> --}}
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
              </div>
              <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control" id="nim" placeholder="Masukkan Nim Anda">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email Anda">
              </div>
              <div class="mb-3">
                <label for="rayon_id" class="form-label">rayon_id</label>
                <input type="rayon_id" name="rayon_id" class="form-control" id="rayon_id" placeholder="Masukkan rayon_id Anda">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pasword" class="form-control" id="password" placeholder="Masukkan password Anda">
              </div>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Link ke script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
