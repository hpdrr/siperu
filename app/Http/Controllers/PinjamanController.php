<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinjamanController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    if (Auth::user()->role_id === 1) {
      if (request('search')) {
        return view('pinjaman', [
          'pinjaman' => Peminjaman::where('kode_peminjaman', 'like', '%' . request('search') . '%')
            ->orWhere('kode_ruangan', 'like', '%' . request('search') . '%')
            ->orWhere('user_id', 'like', '%' . request('search') . '%')
            ->orWhere('keperluan', 'like', '%' . request('search') . '%')
            ->orWhere('mulai_pinjam', 'like', '%' . request('search') . '%')
            ->orWhere('status', 'like', '%' . request('search') . '%')
            ->get()
        ]);
      }
      return view('pinjaman', [
        'pinjaman' => Peminjaman::select(
          'kode_peminjaman',
          'kode_ruangan',
          'user_id',
          'keperluan',
          'mulai_pinjam',
          'rundown',
          'status'
        )->get(),
      ]);
    }
    return back();
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
    //
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
  public function update(Request $request, Peminjaman $table_peminjaman)
  {
    $validated = $request->validate([
      'status' => 'required',
      'kode_peminjaman' => 'required',
    ]);
    // dd($validated['status']);
    // $table_peminjaman->update([
    //   'status' => $validated['status'],
    // ]);
    $table_peminjaman->where('kode_peminjaman', $validated['kode_peminjaman'])->update([
      'status' => $validated['status'],
    ]);
    return redirect('/dashboard/pinjaman');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
