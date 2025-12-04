<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelanggan.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'nama' => 'required|string|max:50',
                'jenis' => 'required|string|max:20',
                'durasi' => 'required|int|min:1',
                'status' => 'required|in:Aktif,Nonaktif',
                'harga' => 'required|numeric|min:0',
            ]);

            // Cari ID terakhir
            $lastIdTransaksi = Pelanggan::orderBy('id_layanan', 'desc')->first();

            if ($lastIdTransaksi) {
                $lastNumber = (int)substr($lastIdTransaksi->id_layanan, 3); // Ambil angka dari 'SUP001'
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1;
            }

            $newId = 'LYN' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

            Layanan::create([
                'id_layanan' => $newId,
                'nama_layanan' => $validated['nama_layanan'],
                'jenis' => $validated['jenis'],
                'harga' => $validated['harga'],
                'durasi' => $validated['durasi'],
                'status' => $validated['status'],
            ]);

            return redirect()->back();
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data: ' . $e->getMessage(),
            ]);
        }
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
