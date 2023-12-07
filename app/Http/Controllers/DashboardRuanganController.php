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
      'ruangan' => Ruangan::select('nama_ruangan', 'kapasitas_ruangan', 'lokasi', 'kode_ruangan')->get()
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
    $kode_ruangan = $request->kode_ruangan;
    if ($room::where('kode_ruangan', $kode_ruangan)->exists()) {
      return redirect()->intended('/dashboard/ruangan')->with('errorAdd', 'Gagal menambahkan, Ruangan telah terdaftar!');
    }
    $room->create($request->all());
    return redirect('/dashboard/ruangan')->with('successAdd', 'Ruangan berhasil ditambahkan!');
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
    dd("test");
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

  //   public function addValidate(Request $request)
  //   {
  //     $exist = Ruangan::where('kode_ruangan', $request->kodeRuangan)->exist();
  //     if ($exist) {
  //       return redirect('/dashboard/ruangan')->with('error', 'Kode Ruangan sudah ada!');
  //     }
  //     return redirect('/dashboard/ruangan')->with('success', 'Ruangan berhasil ditambahkan!');
  //   }
}
