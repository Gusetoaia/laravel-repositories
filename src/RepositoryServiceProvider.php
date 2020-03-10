<?php

namespace Gusetoaia;

use Illuminate\Support\ServiceProvider;
use Gusetoaia\Commands\MakeRepositoryCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeRepositoryCommand::class
            ]);
        }
    }
}