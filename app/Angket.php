<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Angket extends Model
{
    public function storeAngket(Request $request)
    {
      $angket = new Angket();
      $angket->jawaban1 = $request->jawaban1;
      $angket->jawaban2 = $request->jawaban1;
      $angket->jawaban3 = $request->jawaban1;
      $angket->jawaban4 = $request->jawaban1;
      $angket->jawaban5 = $request->jawaban1;
      $angket->jawaban6 = $request->jawaban1;
      $angket->jawaban7 = $request->jawaban1;
      $angket->jawaban8 = $request->jawaban1;
      $angket->jawaban9 = $request->jawaban1;
      $angket->jawaban10 = $request->jawaban1;
      $angket->jawaban11 = $request->jawaban1;
      $angket->jawaban12 = $request->jawaban1;
      $angket->jawaban13 = $request->jawaban1;
      $angket->jawaban14 = $request->jawaban1;
      $angket->jawaban15 = $request->jawaban1;
      $angket->jawaban16 = $request->jawaban1;
      $angket->jawaban17 = $request->jawaban1;
      $angket->jawaban18 = $request->jawaban1;
      $angket->jawaban19 = $request->jawaban1;
      $angket->jawaban20 = $request->jawaban1;
      $angket->jawaban21 = $request->jawaban1;
      $angket->jawaban22 = $request->jawaban1;
      $angket->jawaban23 = $request->jawaban1;
      $angket->jawaban24 = $request->jawaban1;
      $angket->jawaban25 = $request->jawaban1;
      $angket->jawaban26 = $request->jawaban1;
      $angket->jawaban27 = $request->jawaban1;
      $angket->jawaban28 = $request->jawaban1;
      $angket->jawaban29 = $request->jawaban1;
      $angket->jawaban30 = $request->jawaban1;
      $angket->jawaban31 = $request->jawaban1;
      $angket->jawaban32 = $request->jawaban1;
      $angket->jawaban33 = $request->jawaban1;
      $angket->jawaban34 = $request->jawaban1;
      $angket->jawaban35 = $request->jawaban1;
      $angket->jawaban36 = $request->jawaban1;
      $angket->jawaban37 = $request->jawaban1;
      $angket->jawaban38 = $request->jawaban1;
     
      $angket->save();
    
      return $angket;
    }
}
