<!DOCTYPE html>
<html>
<head>
	<title>Menambah barang</title>
</head>
<body>
 
	<h2><a href="https://informangamekamu.blogspot.com">Lelang</a></h2>
	<h3>Data barang</h3>
 
	<a href="/barang"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/barang/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jenis <input type="text" name="jenis" required="required"> <br/>
		Harga <input type="text" name="harga" required="required"> <br/>
		Penjual <textarea name="penjual" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>