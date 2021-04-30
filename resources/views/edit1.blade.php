<!DOCTYPE html>
<html>
<head>
	<title>Meng-edit pembeli</title>
</head>
<body>
 
	<h2><a href="https://informangamekamu.blogspot.com">Lelang</a></h2>
	<h3>Edit Pembeli</h3>
 
	<a href="/pembeli"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pembelis as $p)
	<form action="/pembeli/update1" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pembeli_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pembeli_nama }}"> <br/>
		Email <input type="text" required="required" name="email" value="{{ $p->pembeli_email }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pembeli_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pembeli_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>