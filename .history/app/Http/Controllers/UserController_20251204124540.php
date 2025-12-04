<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataUsers = Users::orderBy('nama')->paginate(10);
        $jumlahSemua = Users::count();
        $jumlahAdmin = Users::where('role', 'admin')->count();
        $jumlahKasir = Users::where('role', 'kasir')->count();
        $jumlahPetugas = Users::where('role', 'petugas')->count();
        return view('users.main', compact('dataUsers', 'jumlahSemua', 'jumlahAdmin', 'jumlahKasir', 'jumlahPetugas'));
    }

     public function search(Request $request)
    {
        $layanan = $request->get('layanan', '');
        $jenis = $request->get('jenis', '');
        $harga = $request->get('harga', '');

        $dataLayanan = Layanan::query();

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
