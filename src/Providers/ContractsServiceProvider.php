<?php

namespace Tomeet\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Tomeet\Modules\Contracts\RepositoryInterface;
use Tomeet\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
