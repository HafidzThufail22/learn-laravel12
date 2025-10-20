<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kota')->insert([
            ['propinsi_id' => 1, 'nama_kota' => 'Bantul'],
            ['propinsi_id' => 1, 'nama_kota' => 'Sleman'],
            ['propinsi_id' => 1, 'nama_kota' => 'Kulon Progo']
        ]);
    }
}
