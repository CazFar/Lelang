<html>
<head>
	<title>Halaman profil</title>
</head>
<body>
 
	<h1>Profil penjual</h1>
	Link yang dapat anda kunjungi <a href="https://www.youtube.com/channel/UCRDiGYAlRRo3DWPmFxFkjSg">Profil</a>
	<br>
	<p>Nama : {{ $nama }}</p>
	<p>Nomor telepon : {{ $telepon }}</p>
	<p>Barang yang dijual</p>
	<ul>
		@foreach($barang as $b)
		<li>{{ $b }}</li>
		@endforeach

</body>
</html>