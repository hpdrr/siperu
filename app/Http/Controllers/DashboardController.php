<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $now = Carbon::now();
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
    return view('dashboard', [
      'title' => 'Dashboard',
      'jumlah_ruangan' => Ruangan::count(),
      'time' => $now
    ]);
  }
}
