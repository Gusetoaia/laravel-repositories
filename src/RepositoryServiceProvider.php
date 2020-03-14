<?php

namespace IulianGusetoaia\LaravelRepositories;

use Illuminate\Support\ServiceProvider;
use IulianGusetoaia\LaravelRepositories\Commands\MakeRepositoryCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Repository service
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeRepositoryCommand::class
            ]);
        }
    }
}
