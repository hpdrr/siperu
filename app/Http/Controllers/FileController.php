<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
  public function downloadFile($id)
  {
    return Storage::download("rundowns/" . $id, 'rundown.pdf');
  }
}
