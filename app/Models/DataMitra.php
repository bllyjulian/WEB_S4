<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DataMitra extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_akun'; // Nama tabel yang benar
    protected $primaryKey = 'username'; // Kunci utama adalah 'username'
    public $incrementing = false; // Kunci utama bukan auto increment
    protected $keyType = 'string'; // Tipe kunci utama adalah string
    
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

    public $timestamps = false; 
}
