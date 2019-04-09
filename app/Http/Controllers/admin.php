<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$vote = DB::table('admin')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['admin' => $vote]);
 
    }
}