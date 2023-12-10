<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('login', [
      'title' => 'Login',
    ]);
  }

  public function authenticate(Request $request)
  {
    $credentials = $validate = $request->validate([
      'nim' => 'required|min:11|max:11',
      'password' => 'required|min:8'
    ]);

    // Mengarahkan ke dashboard jika login berhasil
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended('/dashboard');
    }
    return back()->with('loginError', 'Login Gagal! Silahkan cek kembali NIM atau Password Anda.');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }
}
