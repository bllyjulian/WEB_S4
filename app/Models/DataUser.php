<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primaryKey = 'username_mb';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'username_mb',
        'password',
        'nama',
        'email',
        'nomor_hp_user',
        'tgl_lahir',
        'domisili',
        'foto_profil',
    ];

    public $timestamps = false;
}
