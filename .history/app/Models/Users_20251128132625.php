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
        $table->string('id_user', 10)->primary();
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            
    ];
}
