<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Layanan;
use App\Models\Orders;
use App\Models\Pelanggan;
use App\Models\Users;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentlyDate = Carbon::now()->format('Y-m-d');
        $dataOrder = Orders::select([
            'tb_orders.id_order',
            'tb_orders.kode_order',

            'tb_pelanggan.nama',
            'tb_pelanggan.no_hp',

            'tb_layanan.nama_layanan',
            'tb_layanan.jenis',
            'tb_layanan.harga',

            'tb_orders.berat',
            'tb_orders.jumlah',
            'tb_orders.total',
            'tb_orders.status_order',
            'tb_orders.catatan',
            'tb_orders.tanggal_masuk',
            'tb_orders.tanggal_selesai',
        ])
        ->join('tb_layanan', 'tb_layanan.id_layanan', '=', 'tb_orders.id_layanan')
        ->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan', '=', 'tb_orders.id_pelanggan')
        ->get();

        $totalOrder = Orders::count();
        $totalMenunggu = Orders::where('status_order', 'menunggu')
        return view('orders.main', compact('dataOrder', 'currentlyDate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
