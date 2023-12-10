<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Ruangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index()
  {
    $now = Carbon::now();
    $time = Carbon::now()->format('d-M-Y');
    $day = Carbon::now()->format('l');
    $now->timezone = 'Asia/Jakarta';
    if ($now->hour >= 0 && $now->hour < 12) {
      $now = 'Pagi';
    } else if ($now->hour >= 12 && $now->hour < 15) {
      $now = 'Siang';
    } else if ($now->hour >= 15 && $now->hour < 18) {
      $now = 'Sore';
    } else {
      $now = 'Malam';
    }
    if (Auth::user()->role_id === 1) {
      return view('dashboard', [
        'title' => 'Dashboard',
        'jumlah_ruangan' => Ruangan::count(),
        'time' => $now,
        'jumlah_peminjaman' => Peminjaman::count(),
        'jumlah_menunggu' => Peminjaman::where('status', 'menunggu')->count(),
        'now' => $time,
        'day' => $day,
      ]);
    }
    return back();
  }
}
