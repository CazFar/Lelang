<!DOCTYPE html>
<html>
<head>
	<title>Menambah pembeli</title>
</head>
<body>
 
	<h2><a href="https://informangamekamu.blogspot.com">Lelang</a></h2>
	<h3>Data pembeli</h3>
 
	<a href="/pembeli"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pembeli/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Email <input type="text" name="email" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>