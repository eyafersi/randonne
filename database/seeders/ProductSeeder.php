<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'hiking boots',
            'description' => 'Sturdy, waterproof boots offering comfort and protection on rugged terrain.',
            'price' => 9.99,
            'image'=>'images (4).jpeg',
            'category_id'=>1,
        ]);

        Product::create([
            'name' => 'hiking tent',
            'description' => 'A compact and easy-to-pitch tent, ideal for overnight hikes.',
            'price' => 19.99,
            'image'=>'New-Product-Pop-up-Portable-Backpacking-Tent-3-Seconds-Instant-Tent-Lightweight-Automatic.webp',
            'category_id'=>3,
        ]);

        Product::create([
            'name' => 'Hiking poles',
            'description' => '',
            'price' => 29.99,
            'image'=>'product-zoom-352462-01.webp',
            'category_id'=>2,
        ]);
        Product::create([
            'name' => 'hiking backpack',
            'description' => 'A lightweight and durable pack for carrying essentials on long trails.',
            'price' => 29.99,
            'image'=>'téléchargement (10).jpeg',
            'category_id'=>6,
        
        ]);
        Product::create([
            'name' => 'Rainwear',
            'description' => 'Raincoat and overtrousers.',
            'price' => 26.99,
            'image'=>'rainwear_fc3b1cda-d5ec-4c3b-8041-55b885962452.jpg',
            'category_id'=>5,
        ]);
        Product::create([
            'name' => 'Floor mattresses',
            'description' => 'For greater comfort and better insulation of the floor.',
            'price' => 25.99,
            'image'=>'media.webp',
            'category_id'=>4,
        ]);
        Product::create([
            'name' => 'Layered clothing',
            'description' => 'Thermal clothing, fleeces, and windproof jacket.',
            'price' => 28.99,
            'image'=>'ATM1938_08531_small-full-banner.jpg',
            'category_id'=>3,
        ]);
    }
}

