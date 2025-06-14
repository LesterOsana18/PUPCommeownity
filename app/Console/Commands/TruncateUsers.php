<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Update;

class TruncateUsers extends Command
{
    protected $signature = 'truncate:users';
    protected $description = 'Truncate updates and users tables safely';

    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Update::truncate(); // child table first
        User::truncate();   // parent table second

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $this->info('All users and updates have been deleted.');
    }
}
