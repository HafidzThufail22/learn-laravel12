<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Propinsi;

class Kota extends Model
{
    // protected $table = 'kota';
    // protected $fillable = ['propinsi_id', 'nama_kota'];

    // public function propinsi()
    // {
    //     return $this->belongsTo(Propinsi::class, 'propinsi_id');
    // }

    // public function getPropinsi()
    // {
    //     return $this->belongsTo(
    //         \App\Models\Propinsi::class,
    //         'propinsi_id'
    //     );
    // }
    protected $table = 'kota';

    protected $fillable = [
        'nama_kota',
        'propinsi_id',
        'user_id'
    ];

    // 🔗 RELASI KE PROPINSI
    public function propinsi()
    {
        return $this->belongsTo(Propinsi::class, 'propinsi_id');
    }

    // 🔗 RELASI KE USER
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //test relasi
    public function testRelasi()
    {
        $kota = Kota::find(1);

        echo "Nama Kota: " . $kota->nama_kota . "<br>";
        echo "Pemilik Kota: " . $kota->user->name;

        exit;
    }
}
