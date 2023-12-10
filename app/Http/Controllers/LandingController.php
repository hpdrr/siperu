<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
  public function index()
  {
    $role = 0;
    if (Auth::check()) {
      $role = Auth::user()->role_id;
    }
    return view('landing', [
      'ruangan' => Ruangan::select('image', 'nama_ruangan', 'kapasitas_ruangan', 'lokasi', 'kode_ruangan')->get(),
      'user' => $role,
    ]);
  }
}
