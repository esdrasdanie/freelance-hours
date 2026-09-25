<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use App\Models\Project;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

#[Signature('app:close-project')]
#[Description('Command description')]
class CloseProject extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        Project::query()
            ->where('ends_at', '<=', now())
            ->update(['status' => 'closed']);
        Log::info('Rodou o comando');
    }
}
