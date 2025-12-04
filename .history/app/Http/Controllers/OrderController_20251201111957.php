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

        $dataOrders = Orders::select([
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
        ->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan', '=', 'tb_orders.id_pelanggan');

        if ($order) {
            $dataOrders->where('tb_orders.kode_order', 'like', "%{$order}%")
                    ->orWhere('tb_pelanggan.nama', 'like', "%{$order}%")
                    ->orWhere('tb_pelanggan.no_hp', 'LIKE', "%$order%")
                    ->orWhere('tb_layanan.nama_layanan', 'LIKE', "%$order%")
                    ->orWhere('tb_layanan.jenis', 'LIKE', "%$order%");
        }

        if ($status) {
            if ($status == 'menunggu') {
                $dataOrders->where('tb_orders.status_order', 'menunggu');
            } elseif ($status == 'diproses') {
                $dataOrders->whereBetween('tb_orders.status_order', 'diproses');
            } elseif ($status == 'dicuci') {
                $dataOrders->where('tb_orders.status_order', 'dicuci');
            } elseif ($status == 'disetrika') {
                $dataOrders->where('tb_orders.status_order', 'disetrika');
            } elseif ($status == 'ready') {
                $dataOrders->where('tb_orders.status_order', 'ready');
            } elseif ($status == 'diambil') {
                $dataOrders->where('tb_orders.status_order', 'diambil');
            }
        }

        if ($tanggal) {
            $dataOrders->where('tb_orders.tanggal_masuk', $tanggal);
        }


        $dataOrders = $dataOrders->orderBy('tb_orders.kode_order')->paginate(10);
        // Hitung jumlah aktif/nonaktif
        $jumlahSemua = $dataOrders->count();
        $jumlahAktif = $dataOrders->where('tb_orders.status_order', 'Aktif')->count();
        $jumlahNonAktif = $dataOrders->where('tb_orders.status_order', '!=', 'Aktif')->count();


        return response()->json([
            'data' => $dataOrders->items(),
            'current_page' => $dataOrders->currentPage(),
            'last_page' => $dataOrders->lastPage(),
            'per_page' => $dataOrders->perPage(),
            'total' => $dataOrders->total(),
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
