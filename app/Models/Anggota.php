<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = [
        'nomor_anggota',
        'nama',
        'alamat',
        'email',
        'tanggal_lahir',
    ];
}
