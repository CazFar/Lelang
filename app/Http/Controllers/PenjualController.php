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
		return redirect('penjual');

	}

}