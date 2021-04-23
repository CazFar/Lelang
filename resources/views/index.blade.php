<!DOCTYPE html>
<html>
<head>
	<title>Data penjual</title>
</head>
<body>
 
	<h2>Lelang.com</h2>
	<h3>Data penjual</h3>
 
	<a href="penjual/tambah"> Tambah penjual</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($penjuals as $p)
		<tr>
			<td>{{ $p->penjual_nama }}</td>
			<td>{{ $p->penjual_email }}</td>
			<td>{{ $p->penjual_umur }}</td>
			<td>{{ $p->penjual_alamat }}</td>
			<td>
				<a href="penjual/edit/{{ $p->penjual_id }}">Edit</a>
				|
				<a href="penjual/hapus/{{ $p->penjual_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>