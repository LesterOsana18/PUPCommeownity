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
        $this->call(UpdateSeeder::class);
        $this->call(AnnouncementsTableSeeder::class);
        $this->call(SupporterSeeder::class);
        $this->call(TeamCommitteeSeeder::class);
    }
}
