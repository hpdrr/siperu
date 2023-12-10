<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
  public function index()
  {
    return view('landing', [
      'ruangan' => Ruangan::select('image', 'nama_ruangan', 'kapasitas_ruangan', 'lokasi', 'kode_ruangan')->get()
    ]);
    // return view('landing');
  }
}
