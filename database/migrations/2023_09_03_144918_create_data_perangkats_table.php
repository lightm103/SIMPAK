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
        Schema::create('data_perangkats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perangkat');
            $table->string('nama_pengguna');
            $table->string('alamat_pengguna');
            $table->string('foto_perangkat');
            $table->string('foto_pengguna');
            $table->string('notelpon_pengguna');
            $table->string('merek_perangkat');
            $table->string('tahun_perolehan');
            $table->string('jabatan_pengguna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_perangkats');
    }
};
