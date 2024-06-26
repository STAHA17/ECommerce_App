<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 19.99,
            'image' => 'Product1.jpg',
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 19.99,
            'image' => 'Product2.jpg',
        ]);

        Product::create([
            'name' => 'Product 3',
            'description' => 'Description for Product 3',
            'price' => 19.99,
            'image' => 'Product3.jpg',
        ]);
    }
}
