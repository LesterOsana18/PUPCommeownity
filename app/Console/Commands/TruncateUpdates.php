<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Update;
use App\Models\User;

class TruncateUpdates extends Command
{
    protected $signature = 'truncate:updates';
    protected $description = 'Truncate updates and paws tables safely';

    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Truncate dependent table first
        DB::table('paws')->truncate();   // M:N pivot
        Update::truncate();              // Main table

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $this->info('All updates and paw records have been deleted.');
    }
}
