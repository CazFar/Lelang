<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function index(){
        $nama = "Budi Maha Was";
        $telepon = "081763298102";
        $barang = ["Hp Samsung C9","Jam tangan Rolex","Tempat pensil"];
        return view('profilpenjual', ['nama' => $nama , 'telepon' => $telepon , 'barang' => $barang]);
    }
}