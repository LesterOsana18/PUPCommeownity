<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Event::insert([
            [
                'status' => 'PAST',
                'name' => 'Cat Café for a Cause',
                'date' => '2025-06-02',
                'time_start' => '08:00:00',
                'time_end' => '16:00:00',
                'location' => 'PUP Oval',
                'description' => 'Enjoy drinks and pastries while bonding with rescued cats in a cozy setup, raising funds for their food, shelter, and medical needs.',
                'image_path' => 'images/event-1.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'PAST',
                'name' => 'TNR 101 Workshop',
                'date' => '2025-06-03',
                'time_start' => '08:00:00',
                'time_end' => '12:00:00',
                'location' => 'PUP Bulwagan',
                'description' => 'An educational session that introduces the Trap-Neuter-Return method, emphasizing its importance in managing the campus cat population humanely.',
                'image_path' => 'images/event-2.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'PAST',
                'name' => 'Meowmorial Day',
                'date' => '2025-06-04',
                'time_start' => '10:00:00',
                'time_end' => '12:00:00',
                'location' => 'PUP Catwalk',
                'description' => 'Honor our departed feline companions with a touching candle-lighting ceremony and a memorial wall where students can share photos and messages.',
                'image_path' => 'images/event-3.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'PAST',
                'name' => 'PUP Cat Census Day',
                'date' => '2025-06-05',
                'time_start' => '13:00:00',
                'time_end' => '15:00:00',
                'location' => 'PUP Catwalk',
                'description' => 'Organization-led effort to identify, count, and monitor the stray and community cats within the PUP campus. Data helps improve feeding routes and medical assistance planning.',
                'image_path' => 'images/event-4.jpg',
                'target_volunteers' => 33,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'PAST',
                'name' => 'Paws & Prints: Cat Merch Fundraiser',
                'date' => '2025-06-06',
                'time_start' => '08:00:00',
                'time_end' => '12:00:00',
                'location' => 'PUP Lagoon',
                'description' => 'A creative fundraiser selling cat-themed merchandise like shirts, stickers, tote bags, and keychains designed by PUP students. Proceeds support cat food, medication, and shelter needs.',
                'image_path' => 'images/event-5.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'CURRENT',
                'name' => 'Paw-sitive Adoption Day',
                'date' => '2025-06-18',
                'time_start' => '08:00:00',
                'time_end' => '16:00:00',
                'location' => 'PUP Oval',
                'description' => 'Help our campus cats find loving forever homes through a one-day adoption drive featuring meet-and-greets and adoption education booths.',
                'image_path' => 'images/event-6.jpg',
                'target_volunteers' => 20,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'CURRENT',
                'name' => 'Fur-tography Contest',
                'date' => '2025-06-19',
                'time_start' => '08:00:00',
                'time_end' => '16:00:00',
                'location' => 'PUP Lagoon',
                'description' => 'Show off your photography skills by capturing our feline residents at their finest. Winning entries will be featured on our official pages and printed for a charity exhibit!',
                'image_path' => 'images/event-7.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'CURRENT',
                'name' => 'Whisker Wellness Week',
                'date' => '2025-06-23',
                'time_start' => '08:00:00',
                'time_end' => '04:00:00',
                'location' => 'PUP Catwalk',
                'description' => 'A week-long campaign offering free spay/neuter services, vet checkups, and a mini-seminar on feline health for both students and our campus cats.',
                'image_path' => 'images/event-8.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'CURRENT',
                'name' => 'Paw-ssion Exhibit: Art for Cats',
                'date' => '2025-06-30',
                'time_start' => '08:00:00',
                'time_end' => '12:00:00',
                'location' => 'PUP Lagoon',
                'description' => 'A creative event showcasing student-made artworks, photos, and crafts related to cats. Proceeds from art sales go to the organization\'s feeding program and vet care for campus cats.',
                'image_path' => 'images/event-9.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ],
            [
                'status' => 'CURRENT',
                'name' => 'Cat Nurture 101: Basic Grooming Workshop',
                'date' => '2025-07-01',
                'time_start' => '08:00:00',
                'time_end' => '12:00:00',
                'location' => 'PUP Oval',
                'description' => 'Hands-on workshop teaching students how to properly groom cats, including brushing, nail trimming, and ear cleaning. Ideal for current or aspiring cat owners.',
                'image_path' => 'images/event-10.jpg',
                'target_volunteers' => 30,
                'current_volunteers' => 0,
                'created_at' => '2025-06-13 01:00:00',
                'updated_at' => '2025-06-13 02:00:00'
            ]
        ]);
    }
}