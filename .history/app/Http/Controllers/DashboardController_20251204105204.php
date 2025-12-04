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
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.main');
    }

    public function getData()
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $last7Days = Carbon::today()->subDays(6);

        $totalOrderToday = Orders::whereDate('tanggal_masuk', $today)->count();
        $totalOrderYesterday = Orders::whereDate('tanggal_masuk', $yesterday)->count();

        $totalOrderProcess = Orders::whereIn('status_order', ['diproses', 'dicuci', 'disetrika'])->whereDate('tanggal_masuk', $today)->count();
        $prosesCount = Orders::where('status_order', 'diproses')->whereDate('tanggal_masuk', $today)->count();
        $cuciCount = Orders::where('status_order', 'dicuci')->whereDate('tanggal_masuk', $today)->count();
        $setrikaCount = Orders::where('status_order', 'disetrika')->whereDate('tanggal_masuk', $today)->count();

        $totalOrderDone = Orders::whereDate('tanggal_selesai', $today)
            ->whereIn('status_order', ['ready', 'diambil'])
            ->count();
        $takenCount = Orders::where('status_order', 'diambil')
            ->whereDate('tanggal_selesai', $today)
            ->count();

        $totalRevenueToday = Orders::whereDate('tanggal_masuk', $today)->sum('total');
        $revenueYesterday = Orders::whereDate('tanggal_masuk', $yesterday)->sum('total');
        $targetRevenue = 4000000; // Target bisa disesuaikan

        // ========================================
        // 5. STATUS ORDER REAL-TIME
        // ========================================
        $statusWaiting = Orders::where('status_order', 'menunggu')->count();
        $statusProcess = Orders::where('status_order', 'diproses')->count();
        $statusWashing = Orders::where('status_order', 'dicuci')->count();
        $statusIroning = Orders::where('status_order', 'disetrika')->count();
        $statusReady = Orders::where('status_order', 'ready')->count();
        $statusDiambil = Orders::where('status_order', 'diambil')->count();
        $statusCancel = Orders::

        // ========================================
        // 6. GRAFIK ORDER 7 HARI TERAKHIR
        // ========================================
        $orderChartData = [];
        $orderChartLabels = [];
        
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $orderChartLabels[] = $date->locale('id')->isoFormat('ddd'); // Sen, Sel, Rab
            $orderChartData[] = Orders::whereDate('tanggal_masuk', $date)->count();
        }

        // ========================================
        // 7. GRAFIK PENDAPATAN MINGGUAN
        // ========================================
        $revenueChartData = [];
        $revenueChartLabels = [];
        
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $revenueChartLabels[] = $date->locale('id')->isoFormat('ddd');
            $revenue = Pembayaran::whereDate('tanggal_bayar', $date)->sum('jumlah');
            $revenueChartData[] = round($revenue / 1000); // Dalam ribuan
        }

        // ========================================
        // 8. STATUS CHART DATA (Doughnut)
        // ========================================
        $statusChartData = [
            $statusWaiting,
            $statusProcess,
            $statusWashing,
            $statusIroning,
            $statusReady,
            $statusDiambil,
            $statusCancel,
        ];

        // ========================================
        // 9. DISTRIBUSI LAYANAN (Pie Chart)
        // ========================================
        $serviceDistribution = Orders::join('tb_layanan', 'tb_orders.id_layanan', '=', 'tb_layanan.id_layanan')
            ->select('tb_layanan.nama_layanan', DB::raw('count(*) as total'))
            ->groupBy('tb_layanan.nama_layanan')
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();

        $serviceChartLabels = $serviceDistribution->pluck('nama_layanan')->toArray();
        $serviceChartData = $serviceDistribution->pluck('total')->toArray();

        // ========================================
        // 10. ANTRIAN ORDER (Queue)
        // ========================================
        $queueOrders = Orders::with(['pelanggan', 'layanan'])
            ->whereIn('status_order', ['menunggu', 'diproses', 'dicuci', 'disetrika', 'ready'])
            ->orderByRaw("FIELD(status_order, 'menunggu', 'diproses', 'dicuci', 'disetrika', 'ready')")
            ->orderBy('tanggal_masuk', 'asc')
            ->take(5)
            ->get();

        // ========================================
        // 11. ORDER TERBARU
        // ========================================
        $recentOrders = Orders::with(['pelanggan', 'layanan'])
            ->orderBy('tanggal_masuk', 'desc')
            ->take(5)
            ->get();

        // ========================================
        // RETURN RESPONSE
        // ========================================
        return response()->json([
            // Cards
            'totalOrderToday' => $totalOrderToday,
            'totalOrderYesterday' => $totalOrderYesterday,
            'totalOrderProcess' => $totalOrderProcess,
            'prosesCount' => $prosesCount,
            'cuciCount' => $cuciCount,
            'setrikaCount' => $setrikaCount,
            'totalOrderDone' => $totalOrderDone,
            'takenCount' => $takenCount,
            'totalRevenueToday' => $totalRevenueToday,
            'revenueYesterday' => $revenueYesterday,
            'targetRevenue' => $targetRevenue,

            // Status Real-Time
            'statusWaiting' => $statusWaiting,
            'statusWashing' => $statusWashing,
            'statusIroning' => $statusIroning,
            'statusReady' => $statusReady,

            // Charts
            'orderChartLabels' => $orderChartLabels,
            'orderChartData' => $orderChartData,
            'revenueChartLabels' => $revenueChartLabels,
            'revenueChartData' => $revenueChartData,
            'statusChartData' => $statusChartData,
            'serviceChartLabels' => $serviceChartLabels,
            'serviceChartData' => $serviceChartData,

            // Lists
            'queueOrders' => $queueOrders,
            'recentOrders' => $recentOrders,
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
