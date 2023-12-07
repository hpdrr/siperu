<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
  use HasFactory;
  protected $table = 'ruangan';
  protected $primaryKey = 'kode_ruangan';
  protected $fillable = ['nama_ruangan', 'kapasitas_ruangan', 'lokasi', 'kode_ruangan'];
}
