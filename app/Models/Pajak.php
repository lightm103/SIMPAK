<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pajak extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemilik',
        'plat_nomer',
        'email_pemilik',
        'tanggal_berakhir_pajak',
        'alamat_pemilik',
    ];
}
