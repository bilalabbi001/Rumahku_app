<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login/index');
    }

    public function authenticate(UserRequest $request)
    {
        // cek inputan user
        $credentials = $request->validated();

        // cek kondisi ketika login berhasil maka redirect ke halaman admin/dashboard
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        // cek ketika kondisi gagal maka redirect ke halaman login berkut pesan error
        return back()->withErrors([
            'email' => 'email atau password yang anda masukan salah',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
