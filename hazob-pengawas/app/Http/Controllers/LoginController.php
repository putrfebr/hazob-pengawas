<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mendapatkan email dari request
        $email = $request->input('email');  // Mendapatkan email dari request

        // Cek apakah email tidak kosong dan merupakan string
        if (!empty($email) && is_string($email)) {
            // Kamu bisa mengakses elemen pertama dari string email jika valid
            $first = $email[0];  // Mengakses karakter pertama dari email
            Log::debug('Karakter pertama dari email: ' . $first);  // Log debug
        } else {
            Log::debug('Email tidak valid atau kosong!');
            return back()->withErrors(['email' => 'Email tidak valid atau kosong!']);  // Jika email kosong
        }

        // Cek apakah email ada dan valid
        $user = User::where('email', $request->email)->first();

        // Debugging untuk melihat apakah user ditemukan
        if ($user) {
            Log::debug('User ditemukan dengan email: ' . $user->email);
        } else {
            Log::debug('User dengan email ' . $request->email . ' tidak ditemukan.');
            return back()->withErrors(['email' => 'Email tidak ditemukan.']);
        }

        // Cek apakah password cocok
        if (!Hash::check($request->password, $user->password)) {
            Log::debug('Password tidak cocok untuk email: ' . $request->email);
            return back()->withErrors(['password' => 'Password salah.']);
        }

        // Jika login berhasil
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Log::debug('Login berhasil untuk email: ' . $request->email);
            return redirect()->intended('/');
        }

        // Jika login gagal
        Log::debug('Login gagal untuk email: ' . $request->email);
        return back()->withErrors(['login' => 'Email atau password salah.']);
    }

    // Logout user
    public function logout()
    {
        Auth::logout();  // Logout
        Log::debug('User telah logout');
        return redirect('/login');  // Redirect ke halaman login setelah logout
    }
}
