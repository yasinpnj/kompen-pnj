<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dosen extends Model
{
    public function store(Request $request)
{
  $dosen = new Dosen();
  $dosen->nama_dosen = $request->nama_dosen;
  $dosen->prodi = $request->prodi;
  $dosen->jabatan = $request->jabatan;
  $dosen->save();

  return $dosen;
}
}
