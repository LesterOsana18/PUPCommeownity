<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donation;

class DonationsTableSeeder extends Seeder
{
    public function run()
    {
        Donation::factory()->count(10)->create();
    }
}
