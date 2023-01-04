<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Tampilan Data Karyawan</title>	
</head>
<body>
	<h3 class="text-center">Data Karyawan</h3>
 
	<a href="/karyawans/tambah"> + Tambah karyawan Baru</a>
	
	<br/>
	<br/>
 
	<table class="table table-bordered">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawans as $k)
		<tr>
			<td>{{ $k->nama_karyawan }}</td>
			<td>{{ $k->jabatan_karyawan }}</td>
			<td>{{ $k->umur_karyawan }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/karyawans/edit/{{ $k->id_karyawan }}">Edit</a>
				<a class="btn btn-danger btn-sm" href="/karyawans/hapus/{{ $k->id_karyawan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>