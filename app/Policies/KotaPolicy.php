<?php

namespace App\Policies;

use App\Models\Kota;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class KotaPolicy
{
    use HandlesAuthorization;

    // Melihat data kota
    public function view(User $user, Kota $kota)
    {
        return true; // semua user boleh melihat
    }

    // Menambah data kota
    public function create(User $user)
    {
        return $user->id > 0; // user login boleh create
    }

    // Mengubah data kota
    public function update(User $user, Kota $kota)
    {
        // Izinkan jika user adalah pemilik atau user_id kota null
        return $user->id == $kota->user_id || $kota->user_id === null;
    }

    // Menghapus data kota
    public function delete(User $user, Kota $kota)
    {
        // Izinkan jika user adalah pemilik atau user_id kota null
        return $user->id == $kota->user_id || $kota->user_id === null;
    }
}
