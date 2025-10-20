<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propinsi extends Model
{
    protected $table = 'propinsi';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_propinsi'];
}
