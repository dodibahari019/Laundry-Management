<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
         try {
            $data = $request->validate([
                'email'    => 'required|email',
                'password' => 'required|string',
            ]);

            // Cari user berdasarkan email
            $user = DataUsers::where('email', $data['email'])->first();

            // Validasi user dan password
            if (!$user || !Hash::check($data['password'], $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email atau password salah.',
                ], 401);
            }

            // Ambil role
            $role = $user->tipe_user ?? 'unknown';

            // Login dan simpan session
            Auth::login($user);
            $request->session()->regenerate();

            session([
                'id_user' => $user->id_user,
                'nama'    => $user->nama,
                'role'    => $role,
            ]);

            // Redirect berdasarkan role
            $redirectMap = [
                'Penghuni' => '/list-kamar',
                'Pengurus' => '/pengelolaan-penghuni',
            ];
            $redirectUrl = $redirectMap[$role] ?? '/';

            return response()->json([
                'success'  => true,
                'message'  => 'Login berhasil.',
                'redirect' => url($redirectUrl),
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }
}
