<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdoptionApplicationFactory extends Factory
{
    protected $model = \App\Models\AdoptionApplication::class;

    public function definition()
    {
        // Generate a birth date, sometimes under 18, sometimes over 18
        $isMinor = $this->faker->boolean(20); // ~20% chance to be under 18
        $birth_date = $isMinor
            ? $this->faker->dateTimeBetween('-17 years', '-1 day')->format('Y-m-d')
            : $this->faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d');

        // Co-signer logic
        if ($isMinor) {
            $co_signer_name = $this->faker->name;
            $co_signer_relationship = $this->faker->randomElement(['Parent', 'Guardian']);
            $co_signer_signature = $this->faker->name;
        } else {
            $co_signer_name = 'N/A';
            $co_signer_relationship = 'N/A';
            $co_signer_signature = null; // No signature if not a minor
        }

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'birth_date' => $birth_date,
            'occupation' => $this->faker->jobTitle,
            'company_business_name' => $this->faker->company,
            'social_media_profile' => $this->faker->url,
            'civil_status' => $this->faker->randomElement(['Single', 'Married', 'Other']),
            'sex' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'adoption_prompt' => collect(['friends', 'social_media', 'website', 'posters', 'other'])
                ->random(rand(1, 3))
                ->implode(','),
            'adopted_before' => $this->faker->randomElement(['yes', 'no']),
            'co_signer_name' => $co_signer_name,
            'co_signer_relationship' => $co_signer_relationship,
            'co_signer_signature' => $co_signer_signature,
        ];
    }
}