<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function bacaDb1()
    {
        $kota = DB::table('kota')->get();
        return view('db.bacaDb1', ['kota' => $kota]);
    }
    public function bacaDb2()
    {
        $kota = DB::table('kota')->where('nama_kota', 'Bantul')
            ->first();
        echo $kota->id . "->";
        echo $kota->nama_kota;
    }
}
