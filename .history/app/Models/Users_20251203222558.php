<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'tb_users';
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_user',
        'nama',
        'useranme'
        'email',
        'password',
        'role',
    ];

    public function orderStatusLog(){
        return $this->hasMany(OrderStatusLog::class, 'id_user', 'id_user');
    }
}
