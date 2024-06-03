<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJenisPembayaran extends Model
{
    use HasFactory;
    
    protected $table = 'tb_jenispembayaran';
    protected $primaryKey = 'id_jenis';
    public $incrementing = false; // Jika id_mobil bukan auto-increment
    protected $keyType = 'string'; // Jika id_mobil bukan integer
    protected $fillable = [
        'id_jenis',
        'nama_pembayaran',
        'no_rek',
        'logo',
    ];

    public $timestamps = false; 
}
