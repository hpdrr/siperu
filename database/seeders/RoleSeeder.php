<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $roles = [
      ['role' => 'admin'],
      ['role' => 'mahasiswa'],
    ];
    foreach ($roles as $role) {
      Roles::insert([
        'role' => $role['role'],
      ]);
    }
  }
}
