<?php

namespace Gusetoaia\LaravelRepositories;

use Illuminate\Support\ServiceProvider;
use Gusetoaia\LaravelRepositories\Commands\MakeRepositoryCommand;

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
