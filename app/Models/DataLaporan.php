<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLaporan extends Model
{
    use HasFactory;

    protected $table = 'tb_laporan'; // Nama tabel di database
    protected $primaryKey = 'id_laporan'; // Nama kolom primary key
    public $timestamps = false; // Tidak menggunakan kolom created_at dan updated_at

    protected $fillable = [
        'id_pendaki',
        'jenis_laporan',
    ];

    // Relasi dengan model DataPendaki
    public function pendaki()
    {
        return $this->belongsTo(DataPendaki::class, 'id_pendaki', 'id_pendaki');
    }
}
