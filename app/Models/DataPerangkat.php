<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerangkat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perangkat',
            'nama_pengguna',
            'alamat_pengguna',
            'foto_perangkat',
            'foto_pengguna',
            'notelpon_pengguna',
            'merek_perangkat',
            'tahun_perolehan',
            'jabatan_pengguna',
    ];
}
