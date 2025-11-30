<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layanan.main');
    }

    public function viewLayanan()
    {
        return view('layanan.table');
    }

    public function getViewLayanan()
{
    $data = Layanan::select([
        'id_layanan',
        'nama_layanan',
        'jenis',
        'harga',
        'durasi',
        'status',
    ])->get();

    return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('badge_jenis', function ($row) {
            return '<span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">'.$row->jenis.'</span>';
        })
        ->addColumn('badge_status', function ($row) {
            $color = $row->status === 'Aktif'
                ? 'bg-green-100 text-green-700'
                : 'bg-red-100 text-red-700';

            return '<span class="'.$color.' px-3 py-1 rounded-full text-xs font-bold">'.$row->status.'</span>';
        })
        ->addColumn('action', function ($row) {
            return '
                <div class="flex items-center justify-center space-x-2">
                    <button data-id="'.$row->id_layanan.'" class="btn-detail text-blue-600 hover:text-blue-800 p-1">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button data-id="'.$row->id_layanan.'" class="btn-edit text-green-600 hover:text-green-800 p-1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button data-id="'.$row->id_layanan.'" class="btn-delete text-red-600 hover:text-red-800 p-1">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>';
        })
        ->rawColumns(['badge_jenis','badge_status','action'])
        ->make(true);
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
