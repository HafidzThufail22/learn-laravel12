<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\KotaTableSeeder;
use Database\Seeders\PropinsiTableSeeder;
use Database\Seeders\PenerbitTableSeeder;
use Database\Seeders\BukuSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PropinsiTableSeeder::class,
            KotaTableSeeder::class,
            PenerbitTableSeeder::class,
            BukuSeeder::class
        ]);
    }
}
