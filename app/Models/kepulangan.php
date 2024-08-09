<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepulangan extends Model
{
    use HasFactory;

    protected $table = 'kepulangan'; // Nama tabel yang sesuai

    protected $fillable = [
        'id_user',
        'id_keberangkatan',
        'tanggal_kepulangan',
        'status_perkawinan',
        'alasan_kepulangan',
        'alamat_kepulangan',
        'status_approve',
    ];
}
