<?php

namespace App\Providers;

use App\Repositories\Contracts\AboutRepositoryRepository;
use App\Repositories\Contracts\JobsCategoryRepository;
<<<<<<< HEAD
use App\Repositories\Eloquent\EloquentAboutRepositoryRepository;
=======
use App\Repositories\Contracts\LoginRegisterRepository;
>>>>>>> master
use App\Repositories\Eloquent\EloquentJobsCategoryRepository;
use App\Repositories\Eloquent\EloquentLoginRegisterRepository;
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
<<<<<<< HEAD
        $this->app->singleton(AboutRepositoryRepository::class, EloquentAboutRepositoryRepository::class);
=======
        $this->app->singleton(LoginRegisterRepository::class, EloquentLoginRegisterRepository::class);
>>>>>>> master
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
