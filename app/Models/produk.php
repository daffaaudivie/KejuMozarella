<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tb_produk';
    protected $fillable = [
        'nama_produk',
        'foto_produk',
        'kode_kategori',
        'harga',
        'deskripsi_produk',
    ];
    public $timestamps = false;
    protected $primaryKey = 'id_produk';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kode_kategori', 'id_kategori');
    }

}
