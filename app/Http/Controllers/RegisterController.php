<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Add this import statement

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

    // Session::flash('success', 'Registrasi Berhasil! Silahkan login'); // Use the flash method from Session class

    return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan login');
  }
}
