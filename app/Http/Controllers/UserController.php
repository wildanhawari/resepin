<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('phone_number', 'password');

    if (!Auth::attempt($credentials)) {
        Alert::toast('Nomor ponsel atau kata sandi salah!', 'error');

        return back()->withErrors([
            'phone_number' => 'Nomor ponsel atau kata sandi salah.',
        ])->onlyInput('phone_number');
    }

    // Jika login berhasil
    Alert::success('Berhasil', 'Login berhasil!');
    return redirect()->route('front.beranda');
}

    /**
     * Logout pengguna.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.login'); // Redirect ke halaman login
    }
}
