<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        // === TAMBAHAN UNTUK SEEDING AMAN (Opsional, tapi disarankan) ===
        // Matikan pengecekan Foreign Key karena kita memasukkan ID secara manual di tabel buku
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('buku')->truncate();
        // ===============================================================

        DB::table('buku')->insert([
            ['id' => 10001, 'judul' => 'Menjadi Jempolan Programmer Web PHP', 'tahun_terbit' => '2018', 'id_penerbit' => 1, 'pengarang' => 'Badiyanto', 'jumlah_hal' => 400, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10002, 'judul' => 'Simulasi Arduino', 'tahun_terbit' => '2017', 'id_penerbit' => 2, 'pengarang' => 'Abdul Kadir', 'jumlah_hal' => 200, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10003, 'judul' => 'Algoritma dan Pemrograman', 'tahun_terbit' => '2017', 'id_penerbit' => 1, 'pengarang' => 'Andi Kristanto', 'jumlah_hal' => 200, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10004, 'judul' => 'Buku Pintar Framework Yii', 'tahun_terbit' => '2014', 'id_penerbit' => 3, 'pengarang' => 'Badiyanto', 'jumlah_hal' => 300, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10005, 'judul' => 'Anggaran Belanja Teknologi Informasi', 'tahun_terbit' => '2017', 'id_penerbit' => 2, 'pengarang' => 'Erwan Isa', 'jumlah_hal' => 250, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10007, 'judul' => 'Mastering Yii', 'tahun_terbit' => '2017', 'id_penerbit' => 3, 'pengarang' => 'Badiyanto', 'jumlah_hal' => 400, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10008, 'judul' => 'From Zero To A Pro: Pemrograman Aplikasi', 'tahun_terbit' => '2017', 'id_penerbit' => 1, 'pengarang' => 'Abdul Kadir', 'jumlah_hal' => 350, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],

            // **KOREKSI DISINI** : id_penerbit seharusnya 2 (Jaya Press), bukan 1
            ['id' => 10009, 'judul' => 'Penatalaksanaan Diet Pada Pasien', 'tahun_terbit' => '2017', 'id_penerbit' => 2, 'pengarang' => 'Retno Wahyuningsih S.Gz', 'jumlah_hal' => 300, 'id_user' => 1, 'sampul' => 'default.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // === TAMBAHAN UNTUK SEEDING AMAN ===
        // Setel ulang auto-increment ke nilai setelah ID tertinggi
        DB::statement('ALTER TABLE buku AUTO_INCREMENT = 10010;');
        // Hidupkan kembali pengecekan Foreign Key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // ===================================
    }
}
