<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Satuan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        $products = [
            [
                'kode' => '10001',
                'namabrg' => 'Beng-beng',
                'kategori' => 'COKLAT',
                'satuan' => 'PCS',
                'hbeli' => 1000,
                'hjual' => 2000,
                'qawal' => 30
            ],
            [
                'kode' => '10101',
                'namabrg' => 'TOP',
                'kategori' => 'COKLAT',
                'satuan' => 'PCS',
                'hbeli' => 3000,
                'hjual' => 4000,
                'qawal' => 20
            ],
            [
                'kode' => '10203',
                'namabrg' => 'DELFI',
                'kategori' => 'COKLAT',
                'satuan' => 'PCS',
                'hbeli' => 17000,
                'hjual' => 26500,
                'qawal' => 14
            ],
            [
                'kode' => '10293',
                'namabrg' => 'SILVER QEEN',
                'kategori' => 'COKLAT',
                'satuan' => 'PCS',
                'hbeli' => 12000,
                'hjual' => 18000,
                'qawal' => 18
            ],
            [
                'kode' => '10593',
                'namabrg' => 'TOBLERONE',
                'kategori' => 'COKLAT',
                'satuan' => 'PCS',
                'hbeli' => 32000,
                'hjual' => 48000,
                'qawal' => 48
            ],
            [
                'kode' => '20002',
                'namabrg' => 'Aqua 250ml',
                'kategori' => 'MINUMAN',
                'satuan' => 'BOTOL',
                'hbeli' => 2500,
                'hjual' => 3500,
                'qawal' => 50
            ],
            [
                'kode' => '20015',
                'namabrg' => 'LE MINERALE 250ml',
                'kategori' => 'MINUMAN',
                'satuan' => 'BOTOL',
                'hbeli' => 3000,
                'hjual' => 4000,
                'qawal' => 50
            ],
            [
                'kode' => '20815',
                'namabrg' => 'VIT 250ml',
                'kategori' => 'MINUMAN',
                'satuan' => 'BOTOL',
                'hbeli' => 3000,
                'hjual' => 4000,
                'qawal' => 50
            ],
            [
                'kode' => '20025',
                'namabrg' => 'Aqua 1000ml',
                'kategori' => 'MINUMAN',
                'satuan' => 'BOTOL',
                'hbeli' => 5000,
                'hjual' => 7000,
                'qawal' => 50
            ],
            [
                'kode' => '40011',
                'namabrg' => 'Zinc Mentol Anti Dendruft Family 65ML',
                'kategori' => 'SAMPHOO',
                'satuan' => 'BOTOL',
                'hbeli' => 30000,
                'hjual' => 45000,
                'qawal' => 50
            ],
            [
                'kode' => '40021',
                'namabrg' => 'PANTENE ANTI KETOMBE LIDAH BUAYA 70ML',
                'kategori' => 'SAMPHOO',
                'satuan' => 'BOTOL',
                'hbeli' => 25000,
                'hjual' => 37000,
                'qawal' => 20
            ],
            [
                'kode' => '40023',
                'namabrg' => 'PANTENE ANTI RAMBUT RONTOK 70ML',
                'kategori' => 'SAMPHOO',
                'satuan' => 'BOTOL',
                'hbeli' => 55000,
                'hjual' => 68000,
                'qawal' => 70
            ],

        ];

        // foreach ($products as $product) {
        //     Produk::factory()->create($product);
        // }

        Produk::factory(100)->create();

        Satuan::factory()->create([
            'satuan' => 'PCS'
        ]);

        Kategori::factory()->create([
            'kategori' => 'PERMEN'
        ]);
    }
}
