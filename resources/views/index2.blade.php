<!DOCTYPE html>
<html>
<head>
	<title>Data barang</title>
</head>
<body>
 
	<h2>Lelang.com</h2>
	<h3>Data barang</h3>
 
	<a href="/barang/tambah2"> Tambah barang</a>
	|
	<a href="/dashboard"> Kembali ke dashboard</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jenis</th>
			<th>Harga</th>
			<th>Penjual</th>
			<th>Opsi</th>
		</tr>
		@foreach($barangs as $b)
		<tr>
			<td>{{ $b->barang_nama }}</td>
			<td>{{ $b->barang_jenis }}</td>
			<td>{{ $b->barang_harga }}</td>
			<td>{{ $b->barang_penjual }}</td>
			<td>
				<a href="/barang/edit/{{ $b->barang_id }}">Edit</a>
				|
				<a href="/barang/hapus/{{ $b->barang_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>