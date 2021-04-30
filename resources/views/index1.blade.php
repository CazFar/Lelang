<!DOCTYPE html>
<html>
<head>
	<title>Data pembeli</title>
</head>
<body>
 
	<h2>Lelang.com</h2>
    <h3>Data pembeli</h3>
 
	<a href="/pembeli/tambah1"> Tambah pembeli</a>
	|
	<a href="/dashboard"> Kembali ke dashboard</a>
	
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
		@foreach($pembelis as $p)
		<tr>
			<td>{{ $p->pembeli_nama }}</td>
			<td>{{ $p->pembeli_email }}</td>
			<td>{{ $p->pembeli_umur }}</td>
			<td>{{ $p->pembeli_alamat }}</td>
			<td>
				<a href="/pembeli/edit/{{ $p->pembeli_id }}">Edit</a>
				|
				<a href="/pembeli/hapus/{{ $p->pembeli_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>