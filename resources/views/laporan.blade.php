<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman laporan')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini adalah halaman laporan, yang dimana kalian bisa melaporkan jika ada suatu kesalahan terjadi, seperti kesalahan teknis dan sebagainya</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>budi132@gmail.com</td>
		</tr>
		<tr>
			<td>No.Hp</td>
			<td>:</td>
			<td>0817-2718-9312</td>
		</tr>
	</table>
 
@endsection