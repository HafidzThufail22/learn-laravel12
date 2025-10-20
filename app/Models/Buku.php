<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Penerbit;

class Buku extends Model
{
    protected $table = 'buku';

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }
}
