<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PembeliController extends Controller
{
    public function index1()
    {
    	// mengambil data dari table pembeli
    	$pembeli = DB::table('pembelis')->get();
 
    	// mengirim data pembeli ke view index
    	return view('index1',['pembelis' => $pembeli]);
 
    }

		// method untuk menampilkan view form tambah pembeli
		public function tambah1()
	{
 
		// memanggil view tambah
		return view('tambah1');
 
	}
}