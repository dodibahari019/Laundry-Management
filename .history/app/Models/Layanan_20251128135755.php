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
          'id_layanan', 10)->primary();
            'nama_layanan', 100);
            'jenis', ['kiloan', 'satuan']);
            'harga', 15, 2);
            'durasi');
            );
    ];
}
