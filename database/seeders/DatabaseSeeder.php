<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UpdateSeeder; // Make sure this exists

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Be Updated posts only
        $this->call(AnnouncementsTableSeeder::class);
    }
}
