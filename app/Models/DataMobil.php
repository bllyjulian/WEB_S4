<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMobil extends Model
{
    use HasFactory;

    protected $table = 'tb_mobil';
    protected $primaryKey = 'id_mobil';
    public $incrementing = false; // Jika id_mobil bukan auto-increment
    protected $keyType = 'string'; // Jika id_mobil bukan integer
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
        'username'
    ];

    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at
}
