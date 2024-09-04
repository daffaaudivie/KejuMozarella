<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tb_kategori'; // Nama tabel di database

    protected $fillable = ['nama_kategori']; // Kolom yang bisa diisi

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_alternatif', 'id');
    }
}

