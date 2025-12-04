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
use App\Models\Pembayaran;
use App\Models\OrderStatusLog;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalTransaksi = Orders::whereDate('tanggal_masuk', today())->count();
        $totalPendapatan = Orders::whereDate('tanggal_masuk', today())->sum('total');
        $totalPelanggan = Orders::whereDate('tanggal_masuk', today())->distinct('id_pelanggan')->count('id_pelanggan');
        $rataRata = Orders::whereDate('tanggal_masuk', today())->avg('total') ?? 0;
        return view('reports.main', compact('totalTransaksi', 'totalPendapatan', 'totalPelanggan', 'rataRata'));
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
