<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class CategoryFactory extends Factory
{
    protected $model = \App\Models\Category::class;

    public function definition()
    {
        $faker = FakerFactory::create('id_ID');

        return [
            'id' => $faker->unique()->numerify('k#########'),
            'name' => $faker->word(),
            'status' => $faker->randomElement([0, 1]),
        ];
    }
}
