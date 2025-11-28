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
        $table->string('id_pembayaran', 10)->primary();
            $table->string('id_order', 10);
            $table->foreign('id_order')->references('id_order')->on('tb_orders');
            $table->enum('metode', ['cash', 'transfer', 'qris']);
            $table->decimal('jumalah', 15, 2);
            $table->string('bukti_transfer')->nullable();
            $table->datetime('tanggal_bayar');
    ];
}
