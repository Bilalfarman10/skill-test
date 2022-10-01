<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Seeders\Test\ProductSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->essentialTruncates();
        $this->seedTest();
    }

    /**
     * Truncate DBs essential for Testing.
     */
    public function essentialTruncates()
    {
        Product::truncate();
    }

    /**
     * Run seeds for testing only.
     */
    public function seedTest()
    {
        $this->call(ProductSeeder::class);
    }
}
