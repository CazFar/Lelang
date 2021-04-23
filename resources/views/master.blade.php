<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
 
	<header>
 
		<h2>Dashboard lelang</h2>
		<nav>
			<a href="dashboard">Halaman depan</a>
			|
			<a href="dashboard/barang">Barang</a>
			|
			<a href="dashboard/laporan">Laporan</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href=https://informangamekamu.blogspot.com>Lelang</a>. 2020 - 2021</p>
	</footer>
 
</body>
</html>