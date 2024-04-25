<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCustomer extends Model
{
    use HasFactory;

    protected $table = 'tb_user'; // Sesuaikan dengan nama tabel yang benar
    // protected $primaryKey = 'username'; 
    protected $fillable = [
        'username_mb',
        'nama',
        'email',
        'nomer_hp_user',
        'tgl_lahir',
        'domisili'
    ];
}
