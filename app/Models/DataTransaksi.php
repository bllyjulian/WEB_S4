<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    use HasFactory;
    
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';
    public $incrementing = false; 
    protected $keyType = 'string'; 
    protected $fillable = [
        'id_transaksi',
        'total',
        'status',
        'bukti_pembayaran',
        'username',
        'username_mb',
        'id_mobil',
        'id_jenis',
        'tanggal_mulai',
        'tanggal_akhir',
        'tipe_bayar',
        'tgl_transaksi',
    ];

    public function mitra()
    {
        return $this->belongsTo(DataMitra::class, 'username', 'username');
    }
    public function usermb()
    {
        return $this->belongsTo(DataUser::class, 'username_mb', 'username_mb');
    }

    public function mobil()
    {
        return $this->belongsTo(DataMobil::class, 'id_mobil', 'id_mobil');
    }

    public function jenisPembayaran()
    {
        return $this->belongsTo(DataJenisPembayaran::class, 'id_jenis', 'id_jenis');
    }

    public $timestamps = false;
}
