<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed 50 data kendaraan
        for ($i = 1; $i <= 50; $i++) {
            DB::table('data_kendaraans')->insert([
                'plat_nomer' => rand(10000, 99999), // Plat nomor 5 digit angka acak
                'nama_pengguna' => 'Pengguna ' . $i,
                'alamat_pengguna' => 'Alamat Pengguna ' . $i,
                'foto_kendaraan' => 'foto_kendaraan_' . $i . '.jpg',
                'foto_pengguna' => 'foto_pengguna_' . $i . '.jpg',
                'notelpon_pengguna' => '08123456789',
                'merek_kendaraan' => 'Merek Kendaraan ' . $i,
                'jenis_kendaraan' => 'Jenis Kendaraan ' . $i,
                'tahun_perolehan' => 'Tahun Perolehan ' . $i,
                'jabatan_pengguna' => 'Jabatan Pengguna ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
