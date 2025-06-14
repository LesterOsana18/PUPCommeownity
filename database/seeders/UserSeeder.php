<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {

        $roles = ['event_coordinator', 'foster_caregiver', 'adoption_counselor', 'site_administrator'];

        for ($i = 1; $i <= 20; $i++) {
            $seed = Str::slug("user-$i");

            User::create([
                'first_name' => fake()->firstName,
                'last_name' => fake()->lastName,
                'middle_name' => fake()->lastName,
                'suffix' => fake()->randomElement(['', 'Jr.', 'Sr.', 'III']),
                'email' => fake()->unique()->safeEmail,
                'mobile_number' => '09' . fake()->numerify('#########'),
                'profile_picture' => "https://picsum.photos/seed/{$seed}/200/300",
                'address' => fake()->address,
                'password' => Hash::make('password'), // Default password
                'preferred_volunteer_role' => fake()->randomElement($roles),
                'availability' => fake()->sentence,
                'motivation_statement' => fake()->paragraph,
            ]);
        }
    }
}
