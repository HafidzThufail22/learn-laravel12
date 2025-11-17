<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EloController extends Controller
{
    public function bacaAll()
    {
        $brs = \App\Models\Kota::all();
        echo "<table border='1'><tr><th>Id</th>
 <th>Nama Kota</th></tr>";
        foreach ($brs as $abrs) {
            echo "<tr><td>$abrs->id</td><td>
            $abrs->nama_kota</td></tr>";
        }
        echo "</table>";
    }
    public function bacaAllRelasi()
    {
        $brs = \App\Models\Kota::all();
        echo "<table border='1'><tr><th>Id</th><th>Nama
 Kota</th><th>Propinsi</th></tr>";
        foreach ($brs as $abrs) {
            echo "<tr><td>" . $abrs->id . "</td>";
            echo "<td>" . $abrs->nama_kota . "</td>";
            echo "<td>" . optional($abrs->getPropinsi)->nama_propinsi . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    public function bacaSatu()
    {
        $kota = \App\Models\Kota::findOrFail(3);
        echo $kota->nama_kota;
        echo "<br>";
        echo optional($kota->getPropinsi)->nama_propinsi;
    }
    public function bacaPilih()
    {
        $kota = \App\Models\Kota::where('propinsi_id', 3)->get();
        foreach ($kota as $k) {
            echo $k->nama_kota . ":" . $k->getPropinsi->nama_propinsi;
            echo "<br>";
        }
    }
    public function tambahKota()
    {
        $kota = new \App\Models\Kota;
        $kota->propinsi_id = 2;
        $kota->nama_kota = "Pati";
        $kota->save();
        echo "Proses menambah rekaman tabel kota selesai...";
    }
}
