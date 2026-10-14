<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pesanan_id','layanan_id','nama_pelanggan','tanggal_masuk','jumlah',
        'total_biaya','status',
    ];

    protected function casts():array
    {
        return[
            "status" => 'boolean',
            'tanggal_masuk' => 'datetime',
        ];
    }
}
