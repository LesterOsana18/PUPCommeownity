<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdoptionApplicationSeeder extends Seeder
{
    public function run()
    {
        \App\Models\AdoptionApplication::factory()->count(20)->create();
    }
}