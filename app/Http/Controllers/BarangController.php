<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BarangController extends Controller
{
    public function formulir(){
 
    	return view('formulir');
 
    }
 
     public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $barang = $request->input('barang');
        $nomorHP = $request->input('nomorHP');
        return "Nama : ".$nama.", Alamat : ".$alamat.", Barang : ".$barang.", nomorHP : ".$nomorHP;
    }
 
}