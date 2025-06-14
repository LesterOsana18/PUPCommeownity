<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\AboutContactMsg;
use Illuminate\Support\Facades\DB;

class AboutContactMsgSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            [
                'name' => 'Paula Sanchez',
                'email' => 'paula@example.com',
                'message' => 'Hi! I was wondering if you’re currently accepting applications for committees?',
            ],
            [
                'name' => 'Leo Ramos',
                'email' => 'leo@example.com',
                'message' => 'Hello, I’m interested in joining your organization. Are there any open roles or memberships?',
            ],
            [
                'name' => 'Nina Cruz',
                'email' => 'nina@example.com',
                'message' => 'Good day! I want to volunteer with your org. What are the steps to get started?',
            ],
            [
                'name' => 'Karl Bautista',
                'email' => 'karl@example.com',
                'message' => 'Hi! Can I help feed cats around the campus?',
            ],
            [
                'name' => 'Lara Tan',
                'email' => 'lara@example.com',
                'message' => 'I want to foster a kitten, do you allow this?',
            ],
        ];

        foreach ($messages as $msg) {
            AboutContactMsg::create($msg);
        }
    }
}
