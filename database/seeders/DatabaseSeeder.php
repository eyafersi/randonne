<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Correctly call other seeders here
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}