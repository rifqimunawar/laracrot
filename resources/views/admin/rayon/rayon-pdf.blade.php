<!DOCTYPE html>
<html>

<head>
    <title>Databasde | Rayon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h3>Database Rayon {{ $rayon->rayon }}
    </center>


    <div class="container">
        <div class="">
            <h5 class="text-primary">Total Anggota : {{ $count_user }}</h5>
            <h6 class="text-primary">Dicetak Pada Tanggal : {{ $now }}</h6>
        </div>
    </div>


    <table class='table table-striped'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK/NIM</th>
                <th>JK</th>
                <th>Tempat Tgl Lahir</th>
                <th>Alamat</th>
                <th>Pesantren</th>
                <th>SMA/Sederajat</th>
                <th>Thn Lulus</th>
                <th>Thn Kuliah</th>
                <th>Jurusan</th>
                <th>Kaderisasi</th>
                <th>Kontak</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rayon->users as $index => $u)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->nim }}</td>
                    <td>{{ $u->kelamin }}</td>
                    <td>{{ $u->tempat_lahir }}, {{ $u->tanggal_lahir }}</td>
                    <td>{{ $u->alamat }}</td>
                    <td>{{ $u->pesantren }}</td>
                    <td>{{ $u->sma }}</td>
                    <td>{{ $u->thn_lulus }}</td>
                    <td>{{ $u->thn_kuliah }}</td>
                    <td>{{ $u->prodi }}</td>
                    <td>{{ $u->kaderisasi }}</td>
                    <td>{{ $u->wa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script type="text/javascript">
        window.document.querySelector('body').style.width = '420mm'; // Lebar A3
        window.document.querySelector('body').style.height = '297mm'; // Tinggi A3
        // window.document.querySelector('body').style.transform = 'rotate(90deg)'; // Lanscape
        window.print();
    </script>

</body>

</html>
