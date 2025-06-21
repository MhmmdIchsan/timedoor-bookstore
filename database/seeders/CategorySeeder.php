<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 3000; $i++) {
            Category::create([
                'name' => $faker->word . '_' . $faker->unique()->randomNumber(5),
            ]);
        }
    }
}
