<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('announcements')->insert([
            [
                'title' => 'Latest Community Event Success',
                'author' => 'Jane Smith',
                'image_path' => 'images/carousel-temp-1.jpg',
                'excerpt' => 'Our recent community gathering exceeded all expectations with over 300 attendees...',
                'content' => <<<TEXT
Our recent community gathering exceeded all expectations with over 300 attendees joining us for an afternoon of connection and celebration. The park buzzed with music, laughter, and the joyful sounds of children playing. Local artists displayed their work, food vendors offered delicious treats, and volunteers guided visitors through various booths showcasing our mission.

Throughout the day, workshops and panel talks inspired participants to engage more deeply with animal welfare and sustainable living. Families were especially drawn to the interactive activities, including face painting, eco-crafts, and a special area where kids could learn about cat care through fun games.

Thanks to generous donations and incredible turnout, we were able to raise \$12,500, which will directly fund veterinary supplies, rescue operations, and educational campaigns. We extend our heartfelt gratitude to all who participated and helped make this event a heartwarming success.
TEXT,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Partnership Announcement',
                'author' => 'Michael Johnson',
                'image_path' => 'images/carousel-temp-2.png',
                'excerpt' => 'We’re excited to announce our new strategic partnership with Green Futures Initiative...',
                'content' => <<<TEXT
We're thrilled to announce a new strategic partnership with the Green Futures Initiative, a leading nonprofit in sustainability advocacy. This collaboration marks a significant step in our journey to align animal welfare with environmental responsibility.

Over the next six months, we’ll be launching joint campaigns that integrate green practices into pet care and community operations. This includes rolling out compostable litter packaging, promoting eco-friendly shelter designs, and conducting awareness drives on proper waste disposal in public pet spaces.

Our combined efforts aim to not only improve the lives of campus cats but also reduce our environmental footprint. Through shared resources and collective action, we’re building a future that’s compassionate to animals and kind to the Earth.
TEXT,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Upcoming Workshop Series',
                'author' => 'Sarah Williams',
                'image_path' => 'images/carousel-temp-3.png',
                'excerpt' => 'Join us for a new workshop series focused on development and growth...',
                'content' => <<<TEXT
Starting this July, we're rolling out a 6-week workshop series designed to empower students and community members with practical skills in advocacy, communication, and leadership. Each session is led by industry professionals and seasoned volunteers with years of hands-on experience.

Week one kicks off with “Storytelling for Change,” where participants learn how to craft compelling messages that inspire action. Other topics include event organizing, volunteer management, and the ethics of animal welfare. We’ll also have breakout sessions for networking and collaborative planning.

By the end of the series, attendees will not only gain tools to lead change in their communities but also earn a certificate of participation. Slots are limited, so early registration is encouraged.
TEXT,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Annual Fundraiser Results',
                'author' => 'Robert Chang',
                'image_path' => 'images/carousel-temp-4.jpg',
                'excerpt' => 'Thanks to your generosity, our annual fundraiser raised over $85,000...',
                'content' => <<<TEXT
This year’s annual fundraiser broke records, bringing in an astounding \$85,732 thanks to our generous supporters. The event was held virtually over three days and included livestream panels, online auctions, and a heartwarming showcase of our rescued cats’ adoption stories.

All funds raised will be allocated toward education grants, rescue kits, mobile vet services, and a new cat sanctuary wing. These initiatives are core to our mission of giving every cat a chance at a safe, loving life while empowering students and volunteers through real-world engagement.

We thank every donor, partner, and volunteer who contributed their time, money, and energy. Your impact will be felt across generations of animals and advocates to come.
TEXT,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Technology Innovation Award',
                'author' => 'Eliza Martinez',
                'image_path' => 'images/carousel-temp-5.jpg',
                'excerpt' => 'We received the Regional Technology Innovation Award for our platform...',
                'content' => <<<TEXT
We are honored to have received the Regional Technology Innovation Award for our digital engagement platform built for the PUP Commeownity. This platform, launched just last year, has already connected over 5,000 students, alumni, and volunteers through events, announcements, and real-time updates.

At the heart of the platform is a simple idea: centralize information and mobilize community action through user-friendly design. Features include adoption dashboards, donation portals, emergency alerts, and a robust admin panel for moderators.

This recognition energizes our commitment to transparency, innovation, and accessibility in service of animal welfare. We're excited to roll out new features soon, including volunteer scheduling tools and live cat tracking.
TEXT,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
