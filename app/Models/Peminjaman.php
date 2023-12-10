<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
  use HasFactory;
  protected $table = 'table_peminjaman';
  protected $primaryKey = 'kode_peminjaman';
  protected $fillable = ['kode_peminjaman', 'kode_ruangan', 'user_id', 'keperluan', 'mulai_pinjam', 'rundown'];
  public $timestamps = false;
  // protected $fillable = ['kode_peminjaman', 'kode_ruangan', 'user_id', 'keperluan', 'mulai_pinjam'];
}
