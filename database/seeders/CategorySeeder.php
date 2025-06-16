<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Fruits',
                'desc' => 'Fresh and organic fruits including seasonal and tropical varieties',
                'status' => 'active'
            ],
            [
                'name' => 'Vegetables',
                'desc' => 'Fresh vegetables including leafy greens, root vegetables, and herbs',
                'status' => 'active'
            ],
            [
                'name' => 'Meat & Poultry',
                'desc' => 'Fresh meat, poultry, and seafood products',
                'status' => 'active'
            ],
            [
                'name' => 'Dairy Products',
                'desc' => 'Milk, cheese, yogurt, and other dairy products',
                'status' => 'active'
            ],
            [
                'name' => 'Grains & Cereals',
                'desc' => 'Rice, wheat, oats, and other grain products',
                'status' => 'active'
            ],
            [
                'name' => 'Beverages',
                'desc' => 'Juices, soft drinks, water, and other beverages',
                'status' => 'active'
            ]
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                $category
            );
        }
    }
}
