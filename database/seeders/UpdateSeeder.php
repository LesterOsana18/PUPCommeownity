<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Update;
use Illuminate\Support\Str;

class UpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Update::create([
                'title' => "Sample Update #$i",
                'author' => fake()->name(),
                'image_path' => "images/carousel-temp-" . (($i % 6) + 1) . ".jpg",
                'excerpt' => Str::limit("This is the excerpt for update #$i. Lorem ipsum dolor sit amet.", 120),
                'content' => "Full content of the update #$i. This section contains detailed info...",
                'is_approved' => true,
            ]);
        }
    }
}
