<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Penerbit extends Model
{
    protected $table = 'penerbit';

    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_penerbit');
    }
}
