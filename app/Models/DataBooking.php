<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBooking extends Model
{
    use HasFactory;
    
    protected $table = 'tb_booking';
    protected $primaryKey = 'id_booking';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'id_booking',
        'id_mobil',
        'tanggal_mulai',
        'tanggal_akhir',
    ];

    public $timestamps = false;

    public function mobil()
    {
        return $this->belongsTo(DataMobil::class, 'id_mobil', 'id_mobil');
    }
    public function user()
    {
        return $this->belongsTo(DataUser::class, 'username_mb', 'username_mb');
    }
    public function mitra()
    {
        return $this->belongsTo(DataMitra::class, 'username', 'username');
    }

}
