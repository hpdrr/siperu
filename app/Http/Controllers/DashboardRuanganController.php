<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardRuanganController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    if (request('search')) {
      return view('ruangan', [
        'ruangan' => Ruangan::where('nama_ruangan', 'like', '%' . request('search') . '%')
          ->orWhere('kapasitas_ruangan', 'like', '%' . request('search') . '%')
          ->orWhere('lokasi', 'like', '%' . request('search') . '%')
          ->orWhere('kode_ruangan', 'like', '%' . request('search') . '%')
          ->get()
      ]);
    }
    // dd(request('search'));
    return view('ruangan', [
      'ruangan' => Ruangan::select('image', 'nama_ruangan', 'kapasitas_ruangan', 'lokasi', 'kode_ruangan')->pagination(5)->get()
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
    /**
     * pengecekan kode ruangan yang telah tersedia
     */
    $kode_ruangan = $request->kode_ruangan;
    if ($room::where('kode_ruangan', $kode_ruangan)->exists()) {
      return redirect()->intended('/dashboard/ruangan')->with('errorAdd', 'Gagal menambahkan, Ruangan telah terdaftar!');
    }
    /**
     * validasi tipe file
     */
    // $request->validate([
    //   'image' => 'required|image|file|max:2048',
    // ]);

    $validated = $request->validate([
      'image' => 'required|image|file|max:2048',
      'nama_ruangan' => 'required',
      'kapasitas_ruangan' => 'required',
      'lokasi' => 'required',
      'kode_ruangan' => 'required',
    ]);

    $validated['image'] = $request->file('image')->store('images');
    $room::create($validated);
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
    if ($request->kode_ruangan != $ruangan->kode_ruangan) {
      $exist = Ruangan::where('kode_ruangan', $request->kode_ruangan)->exists();
      if ($exist) {
        return redirect('/dashboard/ruangan')->with('errorEdit', 'Gagal mengubah, Kode Ruangan telah terdaftar!');
      }
    }

    $validated = $request->validate([
      'image' => 'required|image|file|max:2048',
      'nama_ruangan' => 'required',
      'kapasitas_ruangan' => 'required',
      'lokasi' => 'required',
      'kode_ruangan' => 'required',
    ]);

    /**
     * menyimpan file image ke dalam folder public/images
     */
    Storage::delete($request->oldImage);
    $validated['image'] = $request->file('image')->store('images');
    $ruangan->update($validated);
    return redirect('/dashboard/ruangan')->with('successEdit', 'Ruangan berhasil diperbarui!');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Ruangan $ruangan)
  {
    Ruangan::destroy($ruangan->kode_ruangan);
    Storage::delete($ruangan->image);
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
