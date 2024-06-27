<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendaki extends Model
{
    use HasFactory;

    protected $table = 'tb_datapendaki';
    protected $primaryKey = 'id_pendaki';
    protected $fillable = [
        'nik',
        'nama',
        'umur',
        'asal',
        'nohp',
        'latitude',
        'longitude'
    ];

    public $timestamps = false;
}
