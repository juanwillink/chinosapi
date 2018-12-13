<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
        	Product::create([
        		'title' => $faker->sentence,
        		'body' => $faker->paragraph,
        	]);
        }
    }
}
