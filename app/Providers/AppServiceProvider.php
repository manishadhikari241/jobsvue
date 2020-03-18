<?php

namespace App\Providers;

use App\Repositories\Contracts\AboutRepositoryRepository;
use App\Repositories\Contracts\JobsCategoryRepository;
use App\Repositories\Eloquent\EloquentAboutRepositoryRepository;
use App\Repositories\Contracts\LoginRegisterRepository;
use App\Repositories\Eloquent\EloquentJobsCategoryRepository;
use App\Repositories\Eloquent\EloquentLoginRegisterRepository;
use Illuminate\Http\Resources\Json\Resource;
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
        $this->app->singleton(LoginRegisterRepository::class, EloquentLoginRegisterRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Resource::withoutWrapping();
        Schema::defaultStringLength(191);
    }
}
