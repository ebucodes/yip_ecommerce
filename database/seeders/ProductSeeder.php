<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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

        // Get a seller user to assign products to
        $seller = User::where('role', 'seller')->first();
        $sellerId = $seller ? $seller->id : '1';

        // Available images to scatter across products
        $availableImages = [
            'fresh_oranges.jpg',
            'fresh_strawberries.jpeg',
            'organic_bananas.jpg',
            'tropical_mangoes.jpg'
        ];

        $products = [
            // Fruits
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Oranges',
                'desc' => 'Sweet and juicy oranges, perfect for fresh juice or eating',
                'category' => $fruitsCategory->id,
                'main_picture' => 'fresh_oranges.jpg',
                'other_pictures' => json_encode([
                    'fresh_strawberries.jpeg',
                    'organic_bananas.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 5.99,
                'purchased' => 0,
                'quantity' => 100,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Organic Bananas',
                'desc' => 'Organic ripe bananas, rich in potassium and natural sweetness',
                'category' => $fruitsCategory->id,
                'main_picture' => 'organic_bananas.jpg',
                'other_pictures' => json_encode([
                    'fresh_oranges.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 3.49,
                'purchased' => 0,
                'quantity' => 150,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Strawberries',
                'desc' => 'Sweet, juicy strawberries perfect for desserts and snacking',
                'category' => $fruitsCategory->id,
                'main_picture' => 'fresh_strawberries.jpeg',
                'other_pictures' => json_encode([
                    'organic_bananas.jpg',
                    'fresh_oranges.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 7.99,
                'purchased' => 0,
                'quantity' => 75,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Tropical Mango',
                'desc' => 'Ripe tropical mangoes with sweet, aromatic flavor',
                'category' => $fruitsCategory->id,
                'main_picture' => 'tropical_mangoes.jpg',
                'other_pictures' => json_encode([
                    'fresh_strawberries.jpeg',
                    'organic_bananas.jpg'
                ]),
                'price' => 2.99,
                'purchased' => 0,
                'quantity' => 80,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Red Apples',
                'desc' => 'Crisp and sweet red apples, great for snacking',
                'category' => $fruitsCategory->id,
                'main_picture' => 'fresh_oranges.jpg',
                'other_pictures' => json_encode([
                    'fresh_strawberries.jpeg',
                    'organic_bananas.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 4.99,
                'purchased' => 0,
                'quantity' => 120,
                'status' => 'active'
            ],

            // Vegetables
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Spinach',
                'desc' => 'Organic fresh spinach leaves, rich in iron and vitamins',
                'category' => $vegetablesCategory->id,
                'main_picture' => 'organic_bananas.jpg',
                'other_pictures' => json_encode([
                    'fresh_oranges.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 3.99,
                'purchased' => 0,
                'quantity' => 60,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Organic Carrots',
                'desc' => 'Sweet and crunchy organic carrots, perfect for cooking and snacking',
                'category' => $vegetablesCategory->id,
                'main_picture' => 'fresh_strawberries.jpeg',
                'other_pictures' => json_encode([
                    'fresh_oranges.jpg',
                    'organic_bananas.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 2.49,
                'purchased' => 0,
                'quantity' => 90,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Broccoli',
                'desc' => 'Nutritious fresh broccoli crowns, high in vitamins and fiber',
                'category' => $vegetablesCategory->id,
                'main_picture' => 'tropical_mangoes.jpg',
                'other_pictures' => json_encode([
                    'fresh_strawberries.jpeg',
                    'organic_bananas.jpg'
                ]),
                'price' => 4.49,
                'purchased' => 0,
                'quantity' => 45,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Red Bell Peppers',
                'desc' => 'Sweet and colorful red bell peppers, perfect for cooking',
                'category' => $vegetablesCategory->id,
                'main_picture' => 'fresh_oranges.jpg',
                'other_pictures' => json_encode([
                    'fresh_strawberries.jpeg',
                    'organic_bananas.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 6.99,
                'purchased' => 0,
                'quantity' => 35,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Tomatoes',
                'desc' => 'Vine-ripened tomatoes, perfect for salads and cooking',
                'category' => $vegetablesCategory->id,
                'main_picture' => 'organic_bananas.jpg',
                'other_pictures' => json_encode([
                    'fresh_oranges.jpg',
                    'fresh_strawberries.jpeg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 3.99,
                'purchased' => 0,
                'quantity' => 110,
                'status' => 'active'
            ],

            // Meat & Poultry
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Chicken Breast',
                'desc' => 'Lean, fresh chicken breast, perfect for healthy meals',
                'category' => $meatCategory->id,
                'main_picture' => 'fresh_strawberries.jpeg',
                'other_pictures' => json_encode([
                    'tropical_mangoes.jpg',
                    'fresh_oranges.jpg'
                ]),
                'price' => 12.99,
                'purchased' => 0,
                'quantity' => 25,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Ground Beef',
                'desc' => 'Fresh ground beef, 80% lean, perfect for burgers and cooking',
                'category' => $meatCategory->id,
                'main_picture' => 'tropical_mangoes.jpg',
                'other_pictures' => json_encode([
                    'organic_bananas.jpg',
                    'fresh_strawberries.jpeg'
                ]),
                'price' => 8.99,
                'purchased' => 0,
                'quantity' => 30,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Salmon Fillet',
                'desc' => 'Premium fresh salmon fillet, rich in omega-3 fatty acids',
                'category' => $meatCategory->id,
                'main_picture' => 'fresh_oranges.jpg',
                'other_pictures' => json_encode([
                    'fresh_strawberries.jpeg',
                    'organic_bananas.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 18.99,
                'purchased' => 0,
                'quantity' => 15,
                'status' => 'active'
            ],

            // Additional fruits
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Pineapple',
                'desc' => 'Sweet tropical pineapple, perfect for snacking or smoothies',
                'category' => $fruitsCategory->id,
                'main_picture' => 'organic_bananas.jpg',
                'other_pictures' => json_encode([
                    'fresh_oranges.jpg',
                    'tropical_mangoes.jpg'
                ]),
                'price' => 6.49,
                'purchased' => 0,
                'quantity' => 40,
                'status' => 'active'
            ],
            [
                'user_id' => $sellerId,
                'name' => 'Fresh Grapes',
                'desc' => 'Sweet seedless grapes, perfect for snacking',
                'category' => $fruitsCategory->id,
                'main_picture' => 'tropical_mangoes.jpg',
                'other_pictures' => json_encode([
                    'fresh_strawberries.jpeg',
                    'fresh_oranges.jpg'
                ]),
                'price' => 8.99,
                'purchased' => 0,
                'quantity' => 65,
                'status' => 'active'
            ]
        ];

        foreach ($products as $product) {
            Product::firstOrCreate(
                ['name' => $product['name'], 'user_id' => $product['user_id']],
                $product
            );
        }
    }
}
