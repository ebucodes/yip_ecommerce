<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fruitsCategory = Category::where('name', 'Fruits')->first();
        $vegetablesCategory = Category::where('name', 'Vegetables')->first();
        $meatCategory = Category::where('name', 'Meat & Poultry')->first();
        $dairyCategory = Category::where('name', 'Dairy Products')->first();
        $grainsCategory = Category::where('name', 'Grains & Cereals')->first();
        $beveragesCategory = Category::where('name', 'Beverages')->first();

        $subCategories = [
            // Fruits subcategories
            [
                'name' => 'Citrus Fruits',
                'category' => json_encode([$fruitsCategory->id]),
                'desc' => 'Oranges, lemons, limes, grapefruits and other citrus fruits',
                'status' => 'active'
            ],
            [
                'name' => 'Tropical Fruits',
                'category' => json_encode([$fruitsCategory->id]),
                'desc' => 'Mangoes, pineapples, papayas, and exotic tropical fruits',
                'status' => 'active'
            ],
            [
                'name' => 'Berries',
                'category' => json_encode([$fruitsCategory->id]),
                'desc' => 'Strawberries, blueberries, raspberries, and blackberries',
                'status' => 'active'
            ],
            [
                'name' => 'Stone Fruits',
                'category' => json_encode([$fruitsCategory->id]),
                'desc' => 'Peaches, plums, apricots, and cherries',
                'status' => 'active'
            ],

            // Vegetables subcategories
            [
                'name' => 'Leafy Greens',
                'category' => json_encode([$vegetablesCategory->id]),
                'desc' => 'Spinach, lettuce, kale, and other leafy vegetables',
                'status' => 'active'
            ],
            [
                'name' => 'Root Vegetables',
                'category' => json_encode([$vegetablesCategory->id]),
                'desc' => 'Carrots, potatoes, onions, and underground vegetables',
                'status' => 'active'
            ],
            [
                'name' => 'Herbs & Spices',
                'category' => json_encode([$vegetablesCategory->id]),
                'desc' => 'Fresh herbs, spices, and aromatic plants',
                'status' => 'active'
            ],
            [
                'name' => 'Cruciferous Vegetables',
                'category' => json_encode([$vegetablesCategory->id]),
                'desc' => 'Broccoli, cauliflower, cabbage, and Brussels sprouts',
                'status' => 'active'
            ],

            // Meat & Poultry subcategories
            [
                'name' => 'Fresh Chicken',
                'category' => json_encode([$meatCategory->id]),
                'desc' => 'Fresh chicken cuts and whole chicken',
                'status' => 'active'
            ],
            [
                'name' => 'Beef',
                'category' => json_encode([$meatCategory->id]),
                'desc' => 'Fresh beef cuts and ground beef',
                'status' => 'active'
            ],
            [
                'name' => 'Seafood',
                'category' => json_encode([$meatCategory->id]),
                'desc' => 'Fresh fish and seafood products',
                'status' => 'active'
            ]
        ];

        foreach ($subCategories as $subCategory) {
            SubCategory::firstOrCreate(
                ['name' => $subCategory['name']],
                $subCategory
            );
        }
    }
}
