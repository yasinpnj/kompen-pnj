<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class homeController extends Controller
{
    public function index(){
        
        return view('home');
    }

    public function data(Request $request){
        // insert data ke table dosen
         DB::table('angket')->insert([
         // belum ada auth, ini gua kasih default angka 1, sisanya lanjutin aja
         'id_user' => 1,
         'jawaban1' => $request->radios1,
         'jawaban2' => $request->radios2,
         'jawaban3' => $request->radios3,
         'jawaban4' => $request->radios4,
         'jawaban5' => $request->radios5,
         'jawaban6' => $request->radios6,
         'jawaban7' => $request->radios7,
         'jawaban8' => $request->radios8,
         'jawaban9' => $request->radios9,
         'jawaban10' => $request->radios10,
         'jawaban11' => $request->radios11,
         'jawaban12' => $request->radios12,
         'jawaban13' => $request->radios13,
         'jawaban14' => $request->radios14,
         'jawaban15' => $request->radios15,
         'jawaban16' => $request->radios16,
         'jawaban17' => $request->radios17,
         'jawaban18' => $request->radios18,
         'jawaban19' => $request->radios19,
         'jawaban20' => $request->radios20,
         'jawaban21' => $request->radios21,
         'jawaban22' => $request->radios22,
         'jawaban23' => $request->radios23,
         'jawaban24' => $request->radios24,
         'jawaban25' => $request->radios25,
         'jawaban26' => $request->radios26,
         'jawaban27' => $request->radios27,
         'jawaban28' => $request->radios28,
         'jawaban29' => $request->radios29,
         'jawaban30' => $request->radios30,
         'jawaban31' => $request->radios31,
         'jawaban32' => $request->radios32,
         'jawaban33' => $request->radios33,
         'jawaban34' => $request->radios34,
         'jawaban35' => $request->radios35,
         'jawaban36' => $request->radios36,
         'jawaban37' => $request->radios37,
         'jawaban38' => $request->radios38,
     ]);
     // alihkan halaman ke halaman pegawai
         return redirect('/home');
     }
}
