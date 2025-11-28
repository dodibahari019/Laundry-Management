<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'tb_orders';
    protected $primaryKey = 'id_order';
    public $incrementing = false;
    protected $keytype = 'string';

    protected $fillable = [
        $table->string('id_order', 10)->primary();
            $table->string('kode_order', 50)->unique();
            $table->string('id_pelanggan', 10);
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('tb_pelanggan');
            $table->string('id_layanan', 10);
            $table->foreign('id_layanan')->references('id_layanan')->on('tb_layanan');
            $table->decimal('berat', 15, 2);
            $table->integer('jumlah');
            $table->decimal('total', 15, 2);
            $table->enum('status_order', ['menunggu', 'diproses', 'dicuci', 'disetrika', 'ready', 'diambil']);
            $table->text('catatan');
            $table->datetime('tanggal_masuk');
            $table->datetime('tanggal_selesai');
    ];
}
