<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMitra extends Model
{
    use HasFactory;

    protected $table = 'tb_akun'; // Sesuaikan dengan nama tabel yang benar
    // protected $primaryKey = 'username'; 
    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'nomor_hp',
        'nama_toko',
        'latitude',
        'longitude',
        'status_akun',
        'id_lvl',
        'tgl_daftar'
    ];
}
