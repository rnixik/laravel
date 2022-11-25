<?php

namespace App\Console\Commands;

use App\Services\DemoService;
use Illuminate\Console\Command;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle(DemoService $demoService)
    {
        $demoService->demo();
        $this->line('Log has been written');

        return 0;
    }
}
