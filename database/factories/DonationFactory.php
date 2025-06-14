<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    public function definition()
    {
        $donationType = $this->faker->randomElement(['Monetary', 'Food', 'Medicine', 'Other']);

        return [
            'full_name'        => $this->faker->name,
            'email'            => $this->faker->unique()->safeEmail,
            'mobile_number'    => $this->faker->numerify('09#########'),
            'donation_type'    => $donationType,
            'donation_amount'  => $donationType === 'Monetary' ? $this->faker->numberBetween(100, 5000) : null,
            'donation_proof'   => $donationType === 'Monetary' ? $this->faker->image('public/storage', 640, 480, null, false) : null,
            'donation_details' => $this->faker->sentence,
            'message'          => $this->faker->optional()->sentence,
            'agreement'        => true,
        ];
    }
}
