<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerbit', function (Blueprint $table) {
            $table->id();
            $table->string('penerbit', 60);
            $table->string('alamat', 60);
            $table->string('telepon', 25);
            $table->string('e_mail', 25);
            $table->timestamps();
            $table->integer('id_user');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('penerbit');
    }
};
