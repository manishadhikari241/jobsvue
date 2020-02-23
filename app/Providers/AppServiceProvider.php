<?php

namespace App\Providers;

use App\Repositories\Contracts\AboutRepositoryRepository;
use App\Repositories\Contracts\JobsCategoryRepository;
use App\Repositories\Eloquent\EloquentAboutRepositoryRepository;
use App\Repositories\Eloquent\EloquentJobsCategoryRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(JobsCategoryRepository::class, EloquentJobsCategoryRepository::class);
        $this->app->singleton(AboutRepositoryRepository::class, EloquentAboutRepositoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
