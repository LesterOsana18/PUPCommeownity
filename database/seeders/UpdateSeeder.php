<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Update;
use App\Models\User;
use Illuminate\Support\Str;

class UpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (User::count() === 0) {
            User::factory()->create(['first_name' => 'John', 'last_name' => 'Doe']);
            User::factory()->create(['first_name' => 'Jane', 'last_name' => 'Smith']);
            User::factory()->create(['first_name' => 'Bob', 'last_name' => 'Johnson']);
        }

        $users = User::all();

        for ($i = 1; $i <= 20; $i++) {
            $user = $users->random();

            $imageIndex = ($i % 6) + 1;
            $extension = in_array($imageIndex, [2, 3]) ? 'png' : 'jpg';

            Update::create([
                'title' => "Sample Update #$i",
                'author' => "{$user->first_name} {$user->last_name}",
                'image_path' => "images/carousel-temp-$imageIndex.$extension",
                'excerpt' => Str::limit("This is the excerpt for update #$i. Lorem ipsum dolor sit amet.", 120),
                'content' => "Full content of the update #$i. This section contains detailed info...",
                'is_approved' => true,
                'user_id' => $user->id,
            ]);
        }
    }
}
