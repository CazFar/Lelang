<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index(){
        $nama = "Maha Putri Yas";
        $telepon = "081267824012";
        $barang = ["Hp Samsung C9","Jam tangan Rolex"];
        return view('profilpembeli',['nama' => $nama , 'telepon' => $telepon , 'barang' => $barang]);
    }
}