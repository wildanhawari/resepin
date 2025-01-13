<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (!Auth::attempt($credentials)) {
        Alert::toast('Email atau kata sandi salah!', 'error');

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    // Jika login berhasil
    Alert::success('Berhasil', 'Login berhasil!');
    return redirect()->route('front.home');
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

    public function edit()
    {
        return view('front.changeProfile'); // Pastikan view `profile.edit` sesuai dengan struktur folder Anda.
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update avatar jika ada file baru
        if ($request->hasFile('avatar')) {
            // Hapus avatar lama jika ada
            if ($user->avatar && Storage::exists($user->avatar)) {
                Storage::delete($user->avatar);
            }

            // Simpan avatar baru
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }

        // Update nama dan email
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Simpan perubahan
        $user->save();
        Alert::toast('profile berhasil diperbarui!', 'success');
        return redirect()->route('front.profile')->with('success', 'Profil berhasil diperbarui.');
    }

    public function password() {
        return view('front.changePassword');
    }

    public function updatePassword(Request $request)
    {
        dd($request);
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        // Periksa apakah kata sandi lama sesuai
        if (!Hash::check($request->current_password, auth()->user()->password)) {

            Alert::toast('Kata sandi lama tidak sesuai', 'error');

            return back();
        }

        // Update kata sandi
        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        Alert::toast('Kata sandi berhasil diperbarui', 'success');
        return redirect()->route('front.profile')->with('success', 'Profil berhasil diperbarui.');
    }

    public function showRegisterForm()
    {
        return view('auth.register'); // Pastikan file Blade ada di resources/views/auth/register.blade.php
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // dd($request);
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|numeric|unique:users,phone_number',
            'password' => 'required|string|min:8|confirmed',
        ]);

         // Buat pengguna baru
         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'avatar' => 'images/default-avatar.png',
        ]);

        // Login pengguna setelah registrasi
        auth()->login($user);

        // Redirect ke halaman login atau dashboard
        return redirect()->route('front.home')->with('success', 'Akun berhasil dibuat, silakan login.');
    }

}
