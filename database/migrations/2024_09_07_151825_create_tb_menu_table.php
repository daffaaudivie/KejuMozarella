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
        Schema::create('tb_menu', function (Blueprint $table) {
            $table->id('id_menu');               
            $table->string('nama_menu');         
            $table->string('foto_menu');         
            $table->text('deskripsi_menu');      
            $table->text('resep');              
            $table->text('langkah_pembuatan');   
            $table->text('harga');
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_menu');
    }
};
