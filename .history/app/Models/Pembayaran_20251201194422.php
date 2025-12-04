<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'tb_pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = false;
    protected $keytype = 'string';

    protected $fillable = [
        'id_pembayaran',
        'id_order',
        'metode',
        'jumlah',
        'bukti_transfer',
        'tanggal_bayar',
    ];

    public function orders(){
        return $this->belongsTo(Orders::class, 'id_order', 'id_order');
    }
}
