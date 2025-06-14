<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resource::insert([
            [
                'title' => 'Cat Care Basics',
                'description' => 'Essential guide for new cat owners covering nutrition, grooming, and health.',
                'image' => '/images/legacy-pogi.jpg',
                'link' => '#',
            ],
            [
                'title' => 'TNR Handbook',
                'description' => 'Complete guide to Trap-Neuter-Return programs for community cats.',
                'image' => '/images/about-us-sample-pic-1.jpg',
                'link' => '#',
            ],
            [
                'title' => 'Feline First Aid',
                'description' => 'Emergency procedures and first aid tips for cat injuries and illnesses.',
                'image' => '/images/about-us-sample-pic-2.jpg',
                'link' => '#',
            ],
            [
                'title' => 'Adoption Process',
                'description' => 'Step-by-step guide to our cat adoption procedures and requirements.',
                'image' => '/images/about-us-sample-pic-3.jpg',
                'link' => '#',
            ],
            [
                'title' => 'Behavior Guide',
                'description' => 'Understanding and correcting common feline behavior issues.',
                'image' => '/images/about-us-sample-pic-4.jpg',
                'link' => '#',
            ],
            [
                'title' => 'Volunteer Manual',
                'description' => 'Handbook for PUP Cat Coalition volunteers with policies and procedures.',
                'image' => '/images/about-us-sample-pic-5.jpg',
                'link' => '#',
            ]
        ]);
    }
}
