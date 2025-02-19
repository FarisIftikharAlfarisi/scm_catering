<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        $title = 'Login';
        return view('AuthenticationPages.login', compact('title'));
    }

    public function authentication(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Email tidak terdaftar.']);
        }

        if (!Auth::attempt($credentials)) {
            if (!password_verify($request->password, $user->password)) {
                return redirect()->back()->withErrors(['password' => 'Password tidak sesuai.']);
            }
            //jika email salah
            if ($user->email != $request->email) {
                return redirect()->back()->withErrors(['email' => 'Email tidak sesuai.']);
            }

            return redirect()->back()->withErrors(['login' => 'Terjadi kesalahan, silakan coba lagi.']);
        }

        $request->session()->regenerate(); // Regenerasi sesi untuk keamanan

        $role = Auth::user()->role;

        // Redirect spesifik berdasarkan role
        //purchasing
        if ($role == 'MANAGER PURCHASING') {
            return redirect()->route('purchasing.manager');
        }
        if ($role == 'ADMIN PURCHASING') {
            return redirect()->route('purchasing.admin');
        }
        if ($role == 'STAFF PURCHASING') {
            return redirect()->route('purchasing.staff');
        }


        //produksi
        if ($role == 'MANAGER PRODUKSI') {
            return redirect()->route('produksi.manager');
        }
        if ($role == 'ADMIN PRODUKSI') {
            return redirect()->route('produksi.admin');
        }
        if ($role == 'STAFF PRODUKSI') {
            return redirect()->route('produksi.staff');
        }


        //HRD
        if ($role == 'MANAGER HRD') {
            return redirect()->route('hrd.manager');
        }
        if ($role == 'ADMIN HRD') {
            return redirect()->route('hrd.admin');
        }
        if ($role == 'STAFF HRD') {
            return redirect()->route('hrd.staff');
        }


        //keuangan
        if ($role == 'MANAGER KEUANGAN') {
            return redirect()->route('keuangan.manager');
        }
        if ($role == 'ADMIN KEUANGAN') {
            return redirect()->route('keuangan.admin');
        }
        if ($role == 'STAFF KEUANGAN') {
            return redirect()->route('keuangan.staff');
        }

        //gudang
        if ($role == 'MANAGER GUDANG') {
            return redirect()->route('gudang.manager');
        }
        if ($role == 'ADMIN GUDANG') {
            return redirect()->route('gudang.admin');
        }
        if ($role == 'STAFF GUDANG') {
            return redirect()->route('gudang.staff');
        }


        // Default redirect jika tidak ada role yang sesuai
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Menghapus sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF
        return redirect('/login')->withErrors(['logout' => 'Anda telah logout.']);
    }
}
