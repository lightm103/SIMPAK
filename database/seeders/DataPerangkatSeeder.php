<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPerangkat;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;

class DataPerangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DataPerangkat::create([
                'nama_perangkat' => $faker->word,
                'nama_pengguna' => $faker->name,
                'alamat_pengguna' => $faker->address,
                'foto_perangkat' => 'default.jpg', // Ganti dengan nama file foto default jika ada
                'foto_pengguna' => 'default.jpg', // Ganti dengan nama file foto default jika ada
                'notelpon_pengguna' => $faker->phoneNumber,
                'merek_perangkat' => $faker->word,
                'tahun_perolehan' => $faker->year,
                'jabatan_pengguna' => $faker->jobTitle,
            ]);
        }
    }
}
