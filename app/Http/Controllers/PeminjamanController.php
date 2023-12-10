<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $role = 0;
    if (Auth::check()) {
      $role = Auth::user();
    }
    return view('landing', [
      'ruangan' => Ruangan::select('image', 'nama_ruangan', 'kapasitas_ruangan', 'lokasi', 'kode_ruangan')->get(),
      'user' => $role,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $peminjaman = new Peminjaman();
    // $peminjaman = new Peminjaman();
    $validated = $request->validate([
      'kode_ruangan' => 'required',
      'user_id' => 'required',
      'keperluan' => 'required',
      'mulai_pinjam' => 'required',
      'rundown' => 'required|file|max:2048'
    ]);

    $validated['rundown'] = $request->file('rundown')->store('rundowns');
    $peminjaman::create($validated);
    return redirect('/');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
