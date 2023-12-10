<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function index()
  {
    return view('register', [
      'title' => 'Register',
    ]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'nim' => 'required|min:11|max:11',
      'nama' => 'required|min:3|max:100',
      'password' => 'required|min:8'
    ]);

    User::create($validated);

    return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan login');
  }
}
