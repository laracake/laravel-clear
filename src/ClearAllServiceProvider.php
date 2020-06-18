<?php

namespace Laracake\ClearAll;

use Illuminate\Support\ServiceProvider;
use Laracake\ClearAll\ClearAllClrCommand\ClearAllClrCommand;
use Laracake\ClearAll\ClearAllCommand\ClearAllCommand;

class ClearAllServiceProvider extends ServiceProvider
{

    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                ClearAllCommand::class,
                ClearAllClrCommand::class
            ]);
        }

    }

    public function register()
    {

    }

}
