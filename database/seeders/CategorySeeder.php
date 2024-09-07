<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Adventure',
            'description' => 'Engaging in thrilling activities that involve exploration and risk.',
            'image' => 'téléchargement (6).jpeg',
        ]);

        Category::create([
            'name' => 'Hiking',
            'description' => 'Walking on trails to explore and enjoy natural landscapes.',
            'image' => 'téléchargement (7).jpeg',
        ]);

        Category::create([
            'name' => 'Camping',
            'description' => 'Staying overnight in nature, usually in a tent or camper.',
            'image' => 'téléchargement (8).jpeg',
        ]);
        Category::create([
        'name' => 'Mountains',
                'description' => 'Explore the highest peaks and mountain ranges.',
                'image' => 'téléchargement (5).jpeg',
            ]);
        Category::create([

            'name' => 'Lakes',
                'description' => 'Enjoy tranquil lakeside views and water activities.',
                'image' => 'téléchargement (4).jpeg',
            ]);
        Category::create([
                'name' => 'Deserts',
                'description' => 'Experience the vast and arid beauty of deserts.',
                'image' => 'téléchargement (2).jpeg',
            ]);
    }
}
