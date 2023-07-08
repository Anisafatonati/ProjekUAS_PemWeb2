<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = "penguruss";

    protected $fillable = [
        'nama_pengurus',
        'kode_pengurus',
        'jabatan_id',
        'kontak'
    ];
}
