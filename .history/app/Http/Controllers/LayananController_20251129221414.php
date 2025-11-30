<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataLayanan = Layanan::orderBy('nama_layanan')->paginate(10);
        $jumlahSemua = Layanan::count();
        $jumlahAktif = Layanan::where('status', 'Aktif')->count();
        $jumlahNonAktif = Layanan::where('status', 'Nonaktif')->count();
        return view('layanan.main', compact('dataLayanan', 'jumlahSemua', 'jumlahAktif', 'jumlahNonAktif'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q', '');

        $dataLayanan = Layanan::where('nama_layanan', 'like', "%{$query}%")
            ->orderBy('nama_layanan')
            ->paginate(10);

        // Buat response JSON
        return response()->json([
            'data' => $dataLayanan->items(),       // array data untuk table
            'current_page' => $dataLayanan->currentPage(),
            'last_page' => $dataLayanan->lastPage(),
            'per_page' => $dataLayanan->perPage(),
            'total' => $dataLayanan->total(),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan.create');
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
