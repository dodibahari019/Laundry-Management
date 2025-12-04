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
        return vew
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
