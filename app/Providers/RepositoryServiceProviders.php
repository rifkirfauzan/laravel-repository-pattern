<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\SiswaRepositoryInterface;
use App\Repositories\Eloquent\SiswaRepository;

class RepositoryServiceProviders extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SiswaRepositoryInterface::class, SiswaRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}