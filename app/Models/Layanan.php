<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan-id','kode_layanan','nama_layanan','tarif_per_satuan','jenis',
    ];
}
