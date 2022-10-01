<?php

namespace Database\Seeders\Test;

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $products = [];

        for ($i = 0; $i < 50; $i++) {
            $product = [
                'productName' => $faker->name(),
                'productPrice' => rand(10, 1000),
                'productImages' => $faker->imageUrl($width = 640, $height = 480),
                'productDescription' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                'haveUnits' => $faker->boolean(),
                'unit' => '',
                'weightPerUnit' => 0.0
            ];
            if ($product['haveUnits'])
                $product = array_merge($product, [
                    'unit' => rand(1, 10),
                    'weightPerUnit' => $faker->optional($weight = 0.9)->randomDigit,
                ]);
            $products[] = $product;
        }
        Product::insert($products);
    }
}
