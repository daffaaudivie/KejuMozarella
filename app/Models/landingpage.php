<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landingpage extends Model
{
    public $timestamps = false;

    protected $table = 'tb_slider'; // Pastikan ini menunjuk ke tabel yang benar
    
    protected $fillable = ['foto_slider'];

    protected $primaryKey = 'id_slider';
}
