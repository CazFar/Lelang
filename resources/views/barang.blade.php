<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman barang')
 
 
 <!-- isi bagian konten -->
 <!-- cara penulisan isi section yang panjang -->
 @section('konten')
 
	<p>Ini adalah halaman yang dimana semua barang di lelang, kalian bisa memilih sesuai selera kalian</p>
	<p>
		Semoga bermanfaat
	</p>
 
@endsection