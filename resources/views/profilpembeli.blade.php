<html>
<head>
	<title>Halaman profil</title>
</head>
<body>

	<h1>Profil pembeli</h1>
	Link yang dapat anda kunjungi <a href="https://www.youtube.com/channel/UCJUHhYWz7wbClEVeJ4epv1g">Profil</a>
	<br>
	<p>Nama : {{ $nama }}</p>
	<p>Nomor telepon : {{ $telepon }}</p>
	<p>Barang yang dibeli dari Pak Budi</p>
	<ul>
		@foreach($barang as $b)
		<li>{{ $b }}</li>
		@endforeach

</body>
</html>