<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (! Schema::hasTable('barang')) {
            if ($this->command) {
                $this->command->warn('Tabel `barang` tidak ditemukan — BarangSeeder dilewati. Jalankan migrasi terlebih dahulu.');
            }
            return;
        }
        DB::table('barang')->truncate();
        Barang::create([
            'nama_barang' => 'Laptop Gaming X500',
            'satuan' => 'Unit',
            'harga' => 15500000.00,
            'stok' => 15,
        ]);

        Barang::create([
            'nama_barang' => 'Mouse Wireless Logitech',
            'satuan' => 'Pcs',
            'harga' => 150000.00,
            'stok' => 50,
        ]);

        Barang::create([
            'nama_barang' => 'Keyboard Mekanikal Hitam',
            'satuan' => 'Unit',
            'harga' => 780000.00,
            'stok' => 25,
        ]);
    }
}
