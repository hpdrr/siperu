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
    // dd($request->all());
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request, Ruangan $ruangan)
  {
    $ruangan::destroy($request->kode_ruangan);
    return redirect('/dashboard/ruangan')->with('successDelete', 'Ruangan berhasil dihapus!');
    // dd($ruangan->kode_ruangan);
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
