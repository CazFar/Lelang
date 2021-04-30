<!DOCTYPE html>
<html>
<head>
	<title>Meng-edit penjual</title>
</head>
<body>
 
	<h2><a href="https://informangamekamu.blogspot.com">Lelang</a></h2>
	<h3>Edit Penjual</h3>
 
	<a href="/penjual"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($penjuals as $p)
	<form action="/penjual/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->penjual_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->penjual_nama }}"> <br/>
		Email <input type="text" required="required" name="email" value="{{ $p->penjual_email }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->penjual_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->penjual_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>