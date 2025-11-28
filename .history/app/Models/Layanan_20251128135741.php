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
          $table->string('id_layanan', 10)->primary();
            $table->string('nama_layanan', 100);
            $table->enum('jenis', ['kiloan', 'satuan']);
            $table->decimal('harga', 15, 2);
            $table->integer('durasi');
            $table->timestamps();
    ];
}
