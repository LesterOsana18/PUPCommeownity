<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Supporter;

class SupporterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supporters_donors')->insert([
            [
                'name' => 'PUP College of Computer Science',
                'initials' => 'PCE',
                'message' => 'Your technical guidance and innovation inspire our work.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Student Council',
                'initials' => 'SC',
                'message' => 'Thank you for amplifying our voice to more students.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cat Lovers',
                'initials' => 'CL',
                'message' => 'We appreciate your love and support for every stray.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KindHeart',
                'initials' => 'KH',
                'message' => 'Your generosity fuels our mission to protect animals.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Animal Clinic',
                'initials' => 'AC',
                'message' => 'Compassion like yours makes real change happen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Donors',
                'initials' => 'DN',
                'message' => 'Your support keeps tails wagging and hearts purring.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
