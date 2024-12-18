<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('table_peminjaman', function (Blueprint $table) {
      $table->integer('kode_peminjaman', 10);
      $table->string('keperluan', 100);
      $table->timestamp('mulai_pinjam');
      $table->string('rundown', 255);
      $table->string('status', 20);
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('table_peminjaman');
  }
};
