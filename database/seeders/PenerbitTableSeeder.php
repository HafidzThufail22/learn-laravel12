<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penerbit')->insert([
            [
                'penerbit' => 'Graha Ilmu',
                'alamat' => 'Ruko Jambusari No. 7A, Wedomartani',
                'telepon' => '(0274) 882262',
                'e_mail' => 'pesanan@grahailmu.co.id',
                'id_user' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penerbit' => 'Jaya Press',
                'alamat' => 'Jl. Wonosari',
                'telepon' => '2113',
                'e_mail' => 'wijaya@gmail.comm',
                'id_user' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'penerbit' => 'MadiaKom',
                'alamat' => 'Deresan CT X, Yogyakarta',
                'telepon' => '21212',
                'e_mail' => 'penerbitmediakom@gmail',
                'id_user' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
