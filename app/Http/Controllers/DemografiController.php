<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemografiController extends Controller
{
    public function index(){
        
        return view ('demografi');
    }

    public function data (Request $request){
       // insert data ke table dosen
	    DB::table('dosen')->insert([
		'nama_dosen' => $request->nama_dosen,
		'prodi' => $request->prodi,
		'jabatan' => $request->jabatan,
		
	]);
	// alihkan halaman ke halaman pegawai
	    return redirect('/demografi');
    }
    
}
