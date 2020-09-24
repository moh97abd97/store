<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'iPhone 7',
                'price' => 20000,
                'quantity' => 10
            ],
            [
                'name' => 'iPhone 8',
                'price' => 30000,
                'quantity' => 25
            ]
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
