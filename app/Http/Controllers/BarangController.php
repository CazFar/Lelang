<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class BarangController extends Controller
{
    public function index2()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('barangs')->get();
 
    	// mengirim data barang ke view index
    	return view('index2',['barangs' => $barang]);
 
    }

		// method untuk menampilkan view form tambah barang
		public function tambah2()
	{
 
		// memanggil view tambah
		return view('tambah2');
 
	}

		// method untuk insert data ke table barang
		public function store(Request $request)
	{
		// insert data ke table barang
		DB::table('barangs')->insert([
		'barang_nama' => $request->nama,
		'barang_jenis' => $request->jenis,
		'barang_harga' => $request->harga,
		'barang_penjual' => $request->penjual
	]);
		// alihkan halaman ke halaman barang
		return redirect('/barang');

	}
	
		// method untuk edit data barang
		public function edit2($id)
	{
		// mengambil data barang berdasarkan id yang dipilih
		$barang = DB::table('barangs')->where('barang_id',$id)->get();
		// passing data pegawai yang didapat ke view edit2.blade.php
		return view('edit2',['barangs' => $barang]);
 
	}
	
		// update data barang
		public function update2(Request $request)
	{
		// update data barang
		DB::table('barangs')->where('barang_id',$request->id)->update([
		'barang_nama' => $request->nama,
		'barang_jenis' => $request->jenis,
		'barang_harga' => $request->harga,
		'barang_penjual' => $request->penjual
	]);
		// alihkan halaman ke halaman barang
		return redirect('/barang');

	}

		// method untuk hapus data barang
		public function hapus($id)
	{
		// menghapus data barang berdasarkan id yang dipilih
		DB::table('barangs')->where('barang_id',$id)->delete();
		
		// alihkan halaman ke halaman barang
		return redirect('/barang');

	}
	
}