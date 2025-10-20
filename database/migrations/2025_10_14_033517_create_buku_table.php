<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 75);
            $table->char('tahun_terbit', 4);
            $table->unsignedBigInteger('id_penerbit');
            $table->string('pengarang', 100);
            $table->integer('jumlah_hal');
            $table->string('sampul', 30)->nullable();
            $table->timestamps();
            $table->integer('id_user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
