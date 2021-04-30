<!DOCTYPE html>
<html>
<head>
	<title>Meng-edit barang</title>
</head>
<body>
 
	<h2><a href="https://informangamekamu.blogspot.com">Lelang</a></h2>
	<h3>Edit barang</h3>
 
	<a href="/barang"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($barangs as $b)
	<form action="/barang/update2" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->barang_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $b->barang_nama }}"> <br/>
		Jenis <input type="text" required="required" name="jenis" value="{{ $b->barang_jenis }}"> <br/>
		Harga <input type="text" required="required" name="harga" value="{{ $b->barang_harga }}"> <br/>
		Penjual <textarea required="required" name="penjual">{{ $b->barang_penjual }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>