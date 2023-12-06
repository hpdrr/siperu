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

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended('/dashboard');
    }
    return back()->with('loginError', 'Login Gagal! Silahkan cek kembali NIM atau Password Anda.');
  }
}
