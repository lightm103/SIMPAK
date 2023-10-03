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
        Schema::create('data_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('plat_nomer');
            $table->string('nama_pengguna');
            $table->string('alamat_pengguna');
            $table->string('foto_kendaraan');
            $table->string('foto_pengguna');
            $table->string('notelpon_pengguna');
            $table->string('merek_kendaraan');
            $table->string('jenis_kendaraan');
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
        Schema::dropIfExists('data_kendaraans');
    }
};