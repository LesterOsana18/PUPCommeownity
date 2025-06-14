<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdoptionFactory extends Factory
{
    protected $model = \App\Models\Adoption::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'breed' => $this->faker->word,
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'age' => $this->faker->numberBetween(1, 10),
            'color' => $this->faker->randomElement(['black', 'white', 'brown', 'orange', 'gray', 'other']),
            'weight' => $this->faker->randomFloat(1, 2, 8),
            'sterilized' => $this->faker->boolean,
            'location' => $this->faker->city,
            'photo_path' => null,
        ];
    }
}