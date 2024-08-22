<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_profil', function (Blueprint $table) {
            $table->id('id_profil');
            $table->string('nama_perusahaan', 255);
            $table->string('logo_perusahaan', 255);
            $table->text('deskripsi_perusahaan');
            $table->text('deskripsi_kontak');
            $table->string('email', 255);
            $table->text('alamat');
            $table->string('no_hp', 50);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_profil');
    }
};
