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
        Schema::create('tb_artikel', function (Blueprint $table) {
            $table->id('id_artikel');
            $table->string('judul_artikel',255);
            $table->string('foto_artikel', 255);
            $table->longtext('deskripsi_artikel');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_artikel');
    }
};
