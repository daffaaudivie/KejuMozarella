<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'tb_pesan';
    protected $fillable = [
        'kategori_pesan',
        'nama',
        'email',
        'nomor',
        'nama_perusahaan', 
        'pesan',

    ];
    public $timestamps = false;
    protected $primaryKey = 'id_pesan';


}
