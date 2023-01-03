<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data Karyawan</title>
</head>
<body>
	<h3>Data Karyawan</h3>
 
	<a href="/karyawan/tambah"> + Tambah karyawan Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
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
				<a href="/karyawans/edit/{{ $k->id_karyawan }}">Edit</a>
				|
				<a href="/karyawans/hapus/{{ $k->id_karyawan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>


