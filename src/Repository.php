<?php

namespace Gusetoaia\LaravelRepositories;

trait Repository
{
    /**
     * When the called method doesn't exists on the Repository, Call it on the model
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __call(string $method, array $parameters)
    {
        return $this->model->$method(...$parameters);
    }
}
