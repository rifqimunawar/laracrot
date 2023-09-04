<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

        <div class="card text-center align-middle">
         <img src="{{ asset('storage/img/'.  $users->img ) }}" alt="" style="width: 100%; height:40rem; object-fit:cover">
         <h1>Benar Bahwasannya sahabat {{ $users->name }} dengan NIM/NIK : {{ $users->nim }} Adalah Kader PMII Komisariat Uninus</h1>
        </div>

    </div>
</body>
</html>