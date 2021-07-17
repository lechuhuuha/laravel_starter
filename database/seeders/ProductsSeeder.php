<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = FakerFactory::create();

        for ($i = 0; $i < 20; $i++) {
            $data = [
                'name' => $faker->name(),
                'price' => $faker->randomDigit(),
                'quantity' => $faker->randomDigit(),
                'category_id' => rand(1, 10),
            ];
            DB::table('products')->insert($data);
        }
    }
}
