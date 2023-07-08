<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table = "inventariss";

    protected $fillable = [
        'nama_barang',
        'kode',
        'jumlah',
        'kondisi_barang'
    ];
}
