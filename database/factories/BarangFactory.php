<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_owner' => $this->faker->name(),
            'supplier' => $this->faker->name(),
            'tanggal' => $this->faker->dateTimeBetween('2018-01-01', '2022-12-31')->format('y-m-d'),
            'kode_barang' => $this->faker->randomNumber($nbDigits = 3, $strict = false),
            'jumlah' => $this->faker->randomNumber($nbDigits = 3, $strict = false),
            'nama_barang' => 'lorem ipsum',
        ];
    }
}
