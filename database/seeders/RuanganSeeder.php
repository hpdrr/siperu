<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = [
      [
        'nama_ruangan' => 'Islamic Center',
        'kapasitas_ruangan' => 500,
        'lokasi' => 'Jl. UIN SUSKA',
      ],
      [
        'nama_ruangan' => 'Pusat Kegiatan Mahasiswa',
        'kapasitas_ruangan' => 500,
        'lokasi' => 'Jl. UIN SUSKA',
      ],
      [
        'nama_ruangan' => 'Rektorat lantai 5',
        'kapasitas_ruangan' => 60,
        'lokasi' => 'Gedung Rektorat',
      ],
      [
        'nama_ruangan' => 'Theater',
        'kapasitas_ruangan' => 60,
        'lokasi' => 'Laboratorium Fakultas Sains dan Teknologi',
      ],
      [
        'nama_ruangan' => 'Lab. Rekayasa Sistem Informasi',
        'kapasitas_ruangan' => 25,
        'lokasi' => 'Laboratorium Fakultas Sains dan Teknologi',
      ],
      [
        'nama_ruangan' => 'Lab. Internet',
        'kapasitas_ruangan' => 25,
        'lokasi' => 'Fakultas Sains dan Teknologi',
      ],
      [
        'nama_ruangan' => 'Lab. Software Engineering',
        'kapasitas_ruangan' => 25,
        'lokasi' => 'Laboratorium Fakultas Sains dan Teknologi',
      ]
    ];

    foreach ($data as $ruangan) {
      Ruangan::insert([
        'nama_ruangan' => $ruangan['nama_ruangan'],
        'kapasitas_ruangan' => $ruangan['kapasitas_ruangan'],
        'lokasi' => $ruangan['lokasi'],
      ]);
    }
  }
}
