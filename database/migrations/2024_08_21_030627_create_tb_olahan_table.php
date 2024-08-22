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
        Schema::create('tb_olahan', function (Blueprint $table) {
            $table->id('id_olahan');
            $table->string('nama_olahan', 255);
            $table->string('foto_olahan');
            $table->string('deskripsi_olahan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_olahan');
    }
};
