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
        'id_order',
            'kode_order', 50)->unique();
            'id_pelanggan', 10);
            'id_pelanggan')->references('id_pelanggan')->on('tb_pelanggan');
            'id_layanan', 10);
            'id_layanan')->references('id_layanan')->on('tb_layanan');
            'berat', 15, 2);
            'jumlah');
            'total', 15, 2);
            'status_order', ['menunggu', 'diproses', 'dicuci', 'disetrika', 'ready', 'diambil']);
            'catatan');
            'tanggal_masuk');
            'tanggal_selesai');
    ];
}
