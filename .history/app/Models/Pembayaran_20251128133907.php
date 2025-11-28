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
        'id_pembayaran', 10)->primary();
            'id_order', 10);
            'id_order')->references('id_order')->on('tb_orders');
            'metode', ['cash', 'transfer', 'qris']);
            'jumalah', 15, 2);
            'bukti_transfer')->nullable();
            'tanggal_bayar');
    ];
}
