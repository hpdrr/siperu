<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Users::insert([
      'nim' => 11111111111,
      'nama' => 'admin',
      'role_id' => 1,
      'password' => bcrypt('administrator'),
    ]);
  }
}
