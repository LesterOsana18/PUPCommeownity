<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adoption;

class AdoptionSeeder extends Seeder
{
    public function run(): void
    {
        // 10 available cats
        Adoption::factory()->count(10)->create();

        // 9 previous cats (adopted)
        Adoption::factory()->count(9)->adopted()->create();
    }
}