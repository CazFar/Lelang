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

		// method untuk insert data ke table pembeli
		public function store(Request $request)
	{
		// insert data ke table pembeli
		DB::table('pembelis')->insert([
		'pembeli_nama' => $request->nama,
		'pembeli_email' => $request->email,
		'pembeli_umur' => $request->umur,
		'pembeli_alamat' => $request->alamat
	]);
		// alihkan halaman ke halaman pembeli
		return redirect('/pembeli');

	}

		// method untuk edit data pembeli
		public function edit1($id)
	{
		// mengambil data pembeli berdasarkan id yang dipilih
		$pembeli = DB::table('pembelis')->where('pembeli_id',$id)->get();
		// passing data pegawai yang didapat ke view edit1.blade.php
		return view('edit1',['pembelis' => $pembeli]);
 
	}

		// update data pembeli
		public function update1(Request $request)
	{
		// update data pembeli
		DB::table('pembelis')->where('pembeli_id',$request->id)->update([
		'pembeli_nama' => $request->nama,
		'pembeli_email' => $request->email,
		'pembeli_umur' => $request->umur,
		'pembeli_alamat' => $request->alamat
	]);
		// alihkan halaman ke halaman pembeli
		return redirect('/pembeli');

	}

		// method untuk hapus data pembeli
		public function hapus($id)
	{
		// menghapus data pembeli berdasarkan id yang dipilih
		DB::table('pembelis')->where('pembeli_id',$id)->delete();
		
		// alihkan halaman ke halaman penjual
		return redirect('/pembeli');

	}
	
}