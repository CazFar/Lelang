<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PenjualController extends Controller
{
    public function index()
    {
    	// mengambil data dari table penjual
    	$penjual = DB::table('penjuals')->get();
 
    	// mengirim data penjual ke view index
    	return view('index',['penjuals' => $penjual]);
 
    }

		// method untuk menampilkan view form tambah penjual
		public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}

		// method untuk insert data ke table penjual
		public function store(Request $request)
	{
		// insert data ke table penjual
		DB::table('penjuals')->insert([
		'penjual_nama' => $request->nama,
		'penjual_email' => $request->email,
		'penjual_umur' => $request->umur,
		'penjual_alamat' => $request->alamat
	]);
		// alihkan halaman ke halaman penjual
		return redirect('/penjual');

	}
	
		// method untuk edit data penjual
		public function edit($id)
	{
		// mengambil data penjual berdasarkan id yang dipilih
		$penjual = DB::table('penjuals')->where('penjual_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['penjuals' => $penjual]);
 
	}
	
		// update data penjual
		public function update(Request $request)
	{
		// update data penjual
		DB::table('penjuals')->where('penjual_id',$request->id)->update([
		'penjual_nama' => $request->nama,
		'penjual_email' => $request->email,
		'penjual_umur' => $request->umur,
		'penjual_alamat' => $request->alamat
	]);
		// alihkan halaman ke halaman penjual
		return redirect('/penjual');

	}

		// method untuk hapus data penjual
		public function hapus($id)
	{
		// menghapus data penjual berdasarkan id yang dipilih
		DB::table('penjuals')->where('penjual_id',$id)->delete();
		
		// alihkan halaman ke halaman penjual
		return redirect('/penjual');

	}
	
}