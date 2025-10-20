<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('propinsi')->insert([
            ['nama_propinsi' => 'Jawa Barat'],
            ['nama_propinsi' => 'Jawa Tengah'],
            ['nama_propinsi' => 'Jawa Timur'],
            ['nama_propinsi' => 'Sumatera Utara'],
            ['nama_propinsi' => 'Kalimantan Timur'],
        ]);
    }
}
