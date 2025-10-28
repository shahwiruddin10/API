<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nidn',
        'jenis_kelamin',
        'homebase',
        'pendidikan',
        'mata_kuliah_keahlian',
        'jabatan_fungsional',
    ];
}
