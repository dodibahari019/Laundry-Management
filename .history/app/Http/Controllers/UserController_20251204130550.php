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
        $users = $request->get('users', '');
        $role = $request->get('role', '');

        $dataUsers = Users::query();

        if ($users) {
            $dataUsers->where(function($q) use ($users) {
                $q->where('username', 'LIKE', "%{$users}%")
                ->orWhere('nama', 'LIKE', "%{$users}%")
                ->orWhere('email', 'LIKE', "%{$users}%")
                ;
            });
        }

        if ($role) {
            $dataUsers->where('role', $role);
        }

        $dataUsers = $dataUsers->orderBy('nama')->paginate(10);

        return response()->json([
            'data' => $dataUsers->items(),
            'current_page' => $dataUsers->currentPage(),
            'last_page' => $dataUsers->lastPage(),
            'per_page' => $dataUsers->perPage(),
            'total' => $dataUsers->total(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validated = $request->validate([
                'username' => 'required|string|max:50',
                'nama' => 'required|string|max:100',
                'email' => 'required|email|max:100',
                'password' => 'required|string',
                'role' => 'required|in:admin,kasir,',
                'alamat' => 'required|string|max:255',
                'durasi' => 'required|int|min:1',
                'status' => 'required|in:Aktif,Nonaktif',
                'harga' => 'required|numeric|min:0',
            ]);

            // Cari ID terakhir
            $lastIdTransaksi = Layanan::orderBy('id_layanan', 'desc')->first();

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
