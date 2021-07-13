<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    //
    protected $fillable = [
        'jenis', 'judul', 'gambar', 'deskripsi', 'bahan', 'alat', 'langkah',
    ];
}
