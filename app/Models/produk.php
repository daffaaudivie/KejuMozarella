<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tb_produk';
    protected $fillable = [
        'nama_produk',
        'foto_produk',
        'kode_kategori',
        'deskripsi_produk',
    ];
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kode_kategori', 'id_kategori');
    }

}
