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
        Schema::table('table_peminjaman', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_ruangan')->after('kode_peminjaman')->required();
            $table->foreign('kode_ruangan')->references('kode_ruangan')->on('ruangan')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_peminjaman', function (Blueprint $table) {
            $table->dropForeign(['kode_ruangan']);
            $table->dropColumn('kode_ruangan');
        });
    }
};
