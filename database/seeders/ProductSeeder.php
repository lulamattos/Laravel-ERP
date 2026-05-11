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
        \App\Models\Product::create([
            'name' => 'Camisa Listrada',
            'sku' => 'CAM-123-L',
            'price' => 89.90,
            'stock' => 50
        ]);

        \App\Models\Product::create([
            'name' => 'Caneca Dev',
            'sku' => 'DEV-999-C',
            'price' => 45.00,
            'stock' => 100
        ]);
    }
}
