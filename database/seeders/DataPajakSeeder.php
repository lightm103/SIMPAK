<?php

namespace Database\Seeders;

use App\Models\Pajak;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\DataPajak; // Pastikan Anda sudah memiliki model DataPajak

class DataPajakSeeder extends Seeder
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
            Pajak::create([
                'nama_pemilik' => $faker->name,
                'plat_nomer' => $faker->bothify('?? #### ??'), // Contoh: AB 1234 CD
                'email_pemilik' => $faker->unique()->safeEmail,
                'tanggal_berakhir_pajak' => $faker->dateTimeBetween('now', '+1 years')->format('Y-m-d'),
                'alamat_pemilik' => $faker->address,
            ]);
        }
    }
}
