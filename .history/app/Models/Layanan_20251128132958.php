<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'tb_layanan';
    protected $primaryKey = 'id_layanan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        $table->string('id_pelanggan', 10)->primary();
            $table->string('nama', 100);
            $table->string('no_hp', 20);
            $table->string('email', 50)->unique();
            $table->text('alamat');
    ];
}
