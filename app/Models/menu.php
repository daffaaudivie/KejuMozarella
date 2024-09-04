<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'tb_menu';
    protected $fillable = [
        'nama_menu',
        'foto_menu',
        'deskripsi_menu',
        'resep',
    ];
    public $timestamps = false;

}
