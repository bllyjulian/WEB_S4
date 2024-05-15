<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMobil extends Model
{
    use HasFactory;

    protected $table = 'tb_mobil';
    protected $primaryKey = 'id_mobil';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_mobil',
        'nama_mobil',
        'kapasitas_penumpang',
        'warna',
        'harga_sewa_perhari',
        'tipe',
        'bahan_bakar',
        'kecepatan',
        'foto_mobil',
        'username',
    ];

    public $timestamps = false;
}
