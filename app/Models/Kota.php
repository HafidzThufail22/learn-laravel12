<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Propinsi;

class Kota extends Model
{
    protected $table = 'kota';
    protected $fillable = ['propinsi_id', 'nama_kota'];

    public function propinsi()
    {
        return $this->belongsTo(Propinsi::class, 'propinsi_id');
    }

    public function getPropinsi()
    {
        return $this->belongsTo(
            \App\Models\Propinsi::class,
            'propinsi_id'
        );
    }
}
