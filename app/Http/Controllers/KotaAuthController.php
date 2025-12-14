<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Support\Facades\Auth;

class KotaAuthController extends Controller
{
    public function view()
    {
        $user = Auth::user();
        $kota = Kota::find(1);

        if ($user->can('view', $kota)) {
            echo "User {$user->name} DIIZINKAN melihat kota {$kota->nama_kota}";
        } else {
            echo "Tidak diizinkan";
        }
    }

    public function create()
    {
        $user = Auth::user();

        if ($user->can('create', Kota::class)) {
            echo "User {$user->name} DIIZINKAN menambah kota";
        } else {
            echo "Tidak diizinkan";
        }
    }

    public function update()
    {
        $user = Auth::user();
        $kota = Kota::find(1);

        if ($user->can('update', $kota)) {
            echo "User {$user->name} DIIZINKAN mengubah kota {$kota->nama_kota}";
        } else {
            echo "Tidak diizinkan";
        }
    }

    public function delete()
    {
        $user = Auth::user();
        $kota = Kota::find(1);

        if ($user->can('delete', $kota)) {
            echo "User {$user->name} DIIZINKAN menghapus kota {$kota->nama_kota}";
        } else {
            echo "Tidak diizinkan";
        }
    }
}
