<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class DashboardRuanganController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('ruangan', [
      'ruangan' => Ruangan::select('nama_ruangan', 'kapasitas_ruangan', 'lokasi')->get()
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
    $room = new Ruangan();
    // mass assignment
    $room->create($request->all());

    return redirect('/dashboard/ruangan')->with('status', 'Ruangan berhasil ditambahkan!');
    // assignment
    // $room->nama_ruangan = $request->namaRuangan;
    // $room->kapasitas_ruangan = $request->kapasitasRuangan;
    // $room->lokasi = $request->lokasiRuangan;
    // $room->kode_ruangan = $request->kodeRuangan;
    // $room->save();
  }

  /**
   * Display the specified resource.
   */
  public function show(Ruangan $ruangan)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Ruangan $ruangan)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Ruangan $ruangan)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Ruangan $ruangan)
  {
    //
  }
}
