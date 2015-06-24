<?php namespace ViejoOeste\Repositories;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
    * Register Repositories
    */
    public function register()
    {
        App::bind(
            'ViejoOeste\Repositories\Cabin\CabinRepositoryInterface',
            'ViejoOeste\Repositories\Cabin\CabinRepository'
        );
        App::bind(
            'ViejoOeste\Repositories\Plan\PlanRepositoryInterface',
            'ViejoOeste\Repositories\Plan\PlanRepository'
        );
    }

}
