<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPerangkat>
 */
class DataPerangkatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_perangkat' => fake(),
            'nama_pengguna' => fake(),
            'alamat_pengguna' => fake(),
            'foto_perangkat' => fake(),
            'foto_pengguna' => fake(),
            'notelpon_pengguna' => fake(),
            'merek_perangkat' => fake(),
            'tahun_perolehan' => fake(),
            'jabatan_pengguna' => fake(),
        ];
    }
}
