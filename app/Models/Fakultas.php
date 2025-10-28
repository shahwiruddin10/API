<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_fakultas',
        'nama_fakultas',
        'nama_dekan',
        'nama_wakil_dekan',
        'tahun_berdiri',
    ];
}
