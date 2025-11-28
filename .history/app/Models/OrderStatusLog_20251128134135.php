<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatusLog extends Model
{
    protected $table = 'tb_order_status_log';
    protected $primaryKey = 'id_order_status_log';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        $table->string('id_order_status_log', 10)->primary();
            $table->string('id_order', 10);
            $table->foreign('id_order')->references('id_order')->on('tb_orders');
            $table->string('status', 50);
            $table->string('id_user', 10);
    ];
}
