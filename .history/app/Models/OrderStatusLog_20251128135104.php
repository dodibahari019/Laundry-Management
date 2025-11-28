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
        'id_order_status_log',
        'id_order',
        'status',
        'id_user',
    ];

    public function nodeToUsers(){
        return 
    }
}
