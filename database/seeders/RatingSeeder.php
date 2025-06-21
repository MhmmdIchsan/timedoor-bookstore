<?php

namespace Database\Seeders;

use App\Models\Rating;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RatingSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $bookIds = Book::pluck('id')->toArray();

        for ($i = 0; $i < 500000; $i++) {
            Rating::create([
                'book_id' => $faker->randomElement($bookIds),
                'rating' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
