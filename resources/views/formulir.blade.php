<html>
<head>
	<title>Formulir pemesanan atau penjualan</title>
</head>
<body>
 
	<form action="formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	<h2>Penjual</h2>
        Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
        Barang :
        <input type="text" name="barang"> <br/>
        NomorHP :
        <input type="number" name="nomorHP"> <br/>
		<input type="submit" value="Simpan">
	</form>
        <br>
    <form action="formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	<h2>Pembeli</h2>
        Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
        Barang :
        <input type="text" name="barang"> <br/>
        NomorHP :
        <input type="number" name="nomorHP"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>