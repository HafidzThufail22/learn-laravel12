<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (! Schema::hasTable('anggota')) {
            $this->command->info('Skipping AnggotaSeeder: table `anggota` does not exist.');
            return;
        }

        DB::table('anggota')->insert([
            'nomor_anggota' => 'A001',
            'nama' => 'Budi',
            'alamat' => 'Jl. Merdeka No. 10, Yogyakarta',
            'email' => 'budi@gmail.com',
            // use Y-m-d format for dates to match typical SQL date columns
            'tanggal_lahir' => '2004-01-15',
        ]);
    }
}
