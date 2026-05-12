<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    \DB::table('products')->insert([
        [
            'sku' => 'SKU-001',
            'name' => 'Fone de Ouvido Bluetooth',
            'price' => 250.00,
            'stock' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'sku' => 'SKU-002',
            'name' => 'Mouse Wireless',
            'price' => 89.90,
            'stock' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
}
}
