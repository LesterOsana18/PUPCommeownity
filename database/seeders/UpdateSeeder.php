<?php

namespace Database\Seeders;

use App\Models\Update;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UpdateSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->error('No users found. Seed users first.');
            return;
        }

        // Combine both image groups into one pool
        $imagePool = [
            'carousel-temp-1.jpg',
            'carousel-temp-2.png',
            'carousel-temp-3.png',
            'carousel-temp-4.jpg',
            'carousel-temp-5.jpg',
            'carousel-temp-6.jpg',
            'prof-carousel-temp-1.jpg',
            'prof-carousel-temp-2.jpg',
            'prof-carousel-temp-3.jpg',
            'prof-carousel-temp-4.jpg',
            'prof-carousel-temp-5.jpg',
        ];

        $posts = [
            [
                'title' => 'Rescue Update: Little Mango Finds a Safe Haven',
                'content' => "Last Tuesday, our volunteers found a tiny ginger kitten hiding near the faculty building. We’ve named him Mango. He was weak, dehydrated, and trembling, but with immediate care and a warm bed, Mango is now eating well and purring happily. We're currently nursing him back to health and he's slowly gaining trust in humans again. Stay tuned for his full recovery and potential adoption profile!",
            ],
            [
                'title' => 'A Second Chance for Luna',
                'content' => "Luna was reported through our cat-in-need form last week, and we found her with a severe limp near the student center. After a quick rescue and a visit to the vet, it turns out she had a minor fracture. She’s now resting comfortably at a foster home.",
            ],
            [
                'title' => 'Pogi’s Corner: Honoring the Campus Cat Who Started It All',
                'content' => "Today, we remember Pogi—the beloved tabby whose story gave birth to PUP Sintang Pusa. His legacy lives on in every adoption and rescue, reminding us all why we continue this mission.",
            ],
            [
                'title' => 'Adoption Success: Midnight’s New Home',
                'content' => "Midnight, the sleek black cat from the engineering building, now sleeps soundly in her new home. Her adopter shared how she purrs loudly when brushed and follows her around the house.",
            ],
            [
                'title' => 'Community Feeding Drive Results',
                'content' => "Over 25 campus cats were fed during our latest drive! Volunteers also discovered a new kitten family near the gym bleachers. Regular feeding helps us monitor their health and spot urgent needs.",
            ],
            [
                'title' => 'New Volunteer Orientation Recap',
                'content' => "We welcomed 15 passionate volunteers this week! They learned about our feeding protocols, safe cat handling, and how to respond to urgent rescue reports. Welcome to the team!",
            ],
            [
                'title' => 'Tigger’s Medical Journey',
                'content' => "Tigger, a fiery tabby, was treated for a respiratory infection after a student flagged him during a class change. He’s now comfortably healing at a foster home.",
            ],
            [
                'title' => 'Found Near the Library: Help Us Identify This Cat',
                'content' => "A friendly white-and-gray cat was seen regularly by the library steps. He may be lost. Please help us identify if he belongs to someone or should be placed for adoption.",
            ],
            [
                'title' => 'How to Report a Cat in Need (Reminder)',
                'content' => "If you spot a sick or injured cat, report it through our website. Upload photos, a location, and short description. Our volunteers monitor and respond daily.",
            ],
            [
                'title' => 'Happy Tails: Biscuit Gets Adopted!',
                'content' => "Biscuit, the fluffy orange tabby near the cafeteria, finally has a home! She now enjoys sunbeams, a window perch, and lots of attention from her new family.",
            ],
            [
                'title' => 'Rainy Day Rescues: 3 Kittens Saved',
                'content' => "Despite the storm, our rescue team responded to a report about kittens trapped under a building. All three were rescued, warmed up, and are now safe in foster care.",
            ],
            [
                'title' => 'Meet Peanut: A New Face on Campus',
                'content' => "Peanut is a shy little tortoiseshell who was first spotted near the library garden. She's slowly warming up to students and accepts treats. Keep an eye out and say hi!",
            ],
            [
                'title' => 'Cat Shelter Upgraded Near Gate 3',
                'content' => "Thanks to your donations, we’ve upgraded the feeding shelter near Gate 3. It now has a covered area for rainy days and more space for shy cats to hide and eat peacefully.",
            ],
            [
                'title' => 'How to Safely Interact With Feral Cats',
                'content' => "Feral cats can be wary, but they’re not aggressive. Move slowly, don’t stare, and offer food with patience. Let them come to you. Respect their space and boundaries.",
            ],
            [
                'title' => 'Volunteers Needed for Feeding Routes',
                'content' => "We need 3–4 new volunteers to help cover morning and afternoon feeding near the clinic and library areas. If you have 30 minutes to spare, sign up today!",
            ],
        ];

        for ($i = 1; $i <= 30; $i++) {
            $user = $users->random();
            $post = collect($posts)->random();
            $image = collect($imagePool)->random();

            $update = Update::create([
                'title' => $post['title'],
                'author' => "{$user->first_name} {$user->last_name}",
                'excerpt' => Str::words($post['content'], 20, '...'),
                'content' => $post['content'],
                'image_path' => asset("images/{$image}"),
                'is_approved' => true,
                'user_id' => $user->id,
            ]);

            $pawUsers = $users->where('id', '!=', $user->id)->random(rand(0, 5))->pluck('id')->toArray();
            $update->pawedByUsers()->attach($pawUsers);
        }

        $this->command->info('30 updates seeded with local images and realistic content!');
    }
}
