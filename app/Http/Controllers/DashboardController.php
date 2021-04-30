<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DashboardController extends Controller
{
 
	public function home(){
		return view('halamandepan');
	}
 
	public function laporan(){
		return view('laporan');
	}
 
}