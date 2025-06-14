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
        $this->call([
            UserSeeder::class,
            UpdateSeeder::class,
            AnnouncementsTableSeeder::class,
            SupporterSeeder::class,
            TeamCommitteeSeeder::class,
            ResourceSeeder::class,
            AdoptionSeeder::class,
            DonationsTableSeeder::class,
            ReportSeeder::class,
            AboutContactMsgSeeder::class
        ]);
    }
}
