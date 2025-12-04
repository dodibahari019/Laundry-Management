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
        $totalMenunggu = Orders::where('status_order', 'menunggu')->count();
        // $totalDiproses = Orders::where('status_order', 'diproses')->count();
        $totalDiproses = Orders::whereIn('status_order', ['diproses', 'dicuci', 'disetrika'])->count();
        $totalReady = Orders::where('status_order', 'ready')->count();
        $totalDiambil = Orders::where('status_order', 'diambil')->count();
        return view('orders.main', compact('dataOrder', 'currentlyDate', 'totalOrder', 'totalMenunggu', 'totalDiproses', 'totalReady', 'totalDiambil'));
    }

    public function search(Request $request)
    {
        $order = $request->get('order', '');
        $status = $request->get('status', '');
        $tanggal = $request->get('tanggal', '');

        $dataLayanan = Layanan::Orders();

        if ($layanan) {
            $dataLayanan->where('nama_layanan', 'like', "%{$layanan}%");
        }

        if ($jenis) {
            $dataLayanan->where('jenis', $jenis);
        }

        if ($harga) {
            if ($harga == 'lt5000') {
                $dataLayanan->where('harga', '<', 5000);
            } elseif ($harga == '5000-10000') {
                $dataLayanan->whereBetween('harga', [5000, 10000]);
            } elseif ($harga == 'gt10000') {
                $dataLayanan->where('harga', '>', 10000);
            }
        }

        $dataLayanan = $dataLayanan->orderBy('nama_layanan')->paginate(10);
        // Hitung jumlah aktif/nonaktif
        $jumlahSemua = $dataLayanan->count();
        $jumlahAktif = $dataLayanan->where('status', 'Aktif')->count();
        $jumlahNonAktif = $dataLayanan->where('status', '!=', 'Aktif')->count();


        return response()->json([
            'data' => $dataLayanan->items(),
            'current_page' => $dataLayanan->currentPage(),
            'last_page' => $dataLayanan->lastPage(),
            'per_page' => $dataLayanan->perPage(),
            'total' => $dataLayanan->total(),
            'jumlahSemua' => $jumlahSemua,
            'jumlahAktif' => $jumlahAktif,
            'jumlahNonAktif' => $jumlahNonAktif,
        ]);
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
