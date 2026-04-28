<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'kode' => fake()->unique()->numberBetween(10000000, 99999999),
            'namabrg' => fake()->sentence(6),
            'kategori' => 'BEBAS',
            'satuan' => 'PCS',
            'hbeli' => floor(fake()->numberBetween(10000, 40000) / 1000) * 1000,
            'hjual' => floor(fake()->numberBetween(50000, 80000) / 1000) * 1000,
            'qawal' => fake()->randomNumber(2, true),
            'gambar' => fake()->randomElements(['headset.jpg', 'jam.jpg', 'sepatu.jpg'])[0],
        ];
    }
}
