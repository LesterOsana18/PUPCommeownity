<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Report::insert([
        [
            'description' => 'A stray cat was seen near the cafeteria.',
            'location' => 'PUP Main Campus - Cafeteria',
            'seen_at' => '2025-06-12 10:30:00',
            'media' => 'cat_reports\cat-report-1.jpg',
            'observation' => 'The cat looked hungry and seemed to be limping.',
            'recurring' => 'yes',
            'reporter_name' => 'Juan Dela Cruz',
            'reporter_email' => 'juan@example.com',
            'reporter_affiliation' => 'student',
            'privacy' => false,
            'created_at' => Carbon::parse('2025-06-12 11:00:00'),
            'updated_at' => Carbon::parse('2025-06-12 11:00:00'),
        ],
        [
            'description' => 'Multiple cats spotted at the library garden.',
            'location' => 'PUP Library Garden',
            'seen_at' => '2025-06-10 08:15:00',
            'media' => 'cat_reports\cat-report-2.jpg',
            'observation' => 'Cats were napping under bushes. Might be regulars.',
            'recurring' => 'yes',
            'reporter_name' => 'Maria Santos',
            'reporter_email' => 'maria@example.com',
            'reporter_affiliation' => 'faculty',
            'privacy' => false,
            'created_at' => Carbon::parse('2025-06-11 09:00:00'),
            'updated_at' => Carbon::parse('2025-06-11 09:00:00'),
        ],
        [
            'description' => 'Cat entered the computer lab.',
            'location' => 'Building 4 - Room 205',
            'seen_at' => '2025-06-11 14:00:00',
            'media' => 'cat_reports\cat-report-3.jpeg',
            'observation' => 'Seemed lost or curious. No sign of injury.',
            'recurring' => 'no',
            'reporter_name' => 'Pedro Reyes',
            'reporter_email' => 'pedro@example.com',
            'reporter_affiliation' => 'staff',
            'privacy' => false,
            'created_at' => Carbon::parse('2025-06-10 14:30:00'),
            'updated_at' => Carbon::parse('2025-06-10 14:30:00'),
        ]
    ]);
    }
}



