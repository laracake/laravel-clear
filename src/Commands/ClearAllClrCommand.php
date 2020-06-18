<?php

namespace Laracake\ClearAll\ClearAllClrCommand;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ClearAllClrCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracake:clr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laracake Short Hand Command to clear all laravel config and cache in one go.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('config:cache');
        $this->info('Routes, Views and Config Cache cleared and config has been recached successfully');
    }
}
