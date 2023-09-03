<!DOCTYPE html>
<html>
<head>
	<title>Databasde | Rayon</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h3>Database Rayon 
   @foreach ($rayon as $ray)
     @foreach ($ray->users->take(1) as $item)
         {{ $item->rayon->rayon}}
     @endforeach
   @endforeach</h3>
  </center>

  
  <div class="container">
   <div class="">
    @foreach ($rayon as $r)
       <h5 class="text-primary">Total Anggota :  {{ $r->users->count() }}</h5>
    @endforeach
    <h6 class="text-primary">Dicetak Pada Tanggal : {{ $now }}</h6>
   </div>
  </div>
   
 
  <table class='table table-bordered'>
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
           <th>Kaderisasi</th>
           <th>Kontak</th>
       </tr>
   </thead>
   <tbody>
       @foreach($user as $index => $u)
       <tr>
           <td>{{ $index + 1 }}</td> <!-- Add a unique index for each row -->
           <td>{{ $u->name }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->nim }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->kelamin }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->t_lahir }}, {{ $u->ttl }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->alamat }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->pesantren }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->sma }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->thn_lulus }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->thn_kuliah }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->kaderisasi }}</td> <!-- Replace with the actual user data field -->
           <td>{{ $u->wa }}</td> <!-- Replace with the actual user data field -->
       </tr>
       @endforeach
   </tbody>
</table>

<script type ="text/javascript">

 window.document.querySelector('body').style.width = '420mm'; // Lebar A3
 window.document.querySelector('body').style.height = '297mm'; // Tinggi A3
 // window.document.querySelector('body').style.transform = 'rotate(90deg)'; // Lanscape
	window.print();
</script>

</body>
</html>