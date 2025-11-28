<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'tb_orders';
    protected $primaryKey = 'id_order';
    public $incrementing = false;
    protected $keytype = 'string';

    protected $fillable = [
        'id_order',
        'kode_order',
        'id_pelanggan',
        'id_layanan',
        'berat',
        'jumlah',
        'total',
        'status_order',
        'catatan',
        'tanggal_masuk',
        'tanggal_selesai',
    ];

    public function orderStatusLoge(){
        return $this->hasMany(OrderStatusLog::class, 'id_order', 'id_order');
    }

    public function pelanggan(){
        
    }
}
