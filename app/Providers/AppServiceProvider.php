<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\ArticleRepositoryInterface;
use App\Repositories\AuthorRepository;
use App\Repositories\AuthorRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\PreferenceRepository;
use App\Repositories\PreferenceRepositoryInterface;
use App\Repositories\SourceRepository;
use App\Repositories\SourceRepositoryInterface;
use App\Services\ArticleService;
use App\Services\AuthorService;
use App\Services\CategoryService;
use App\Services\PreferenceService;
use App\Services\SourceService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SourceRepositoryInterface::class, SourceRepository::class);
        $this->app->bind(SourceService::class, function ($app) {
            return new SourceService($app->make(SourceRepositoryInterface::class));
        });


        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
        $this->app->bind(ArticleService::class, function ($app) {
            return new ArticleService($app->make(ArticleRepositoryInterface::class),$app->make(SourceRepositoryInterface::class),$app->make(CategoryRepositoryInterface::class),$app->make(AuthorRepositoryInterface::class));
        });


        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryService::class, function ($app) {
            return new CategoryService($app->make(CategoryRepositoryInterface::class));
        });

        $this->app->bind(AuthorRepositoryInterface::class, AuthorRepository::class);
        $this->app->bind(AuthorService::class, function ($app) {
            return new AuthorService($app->make(AuthorRepositoryInterface::class));
        });


        $this->app->bind(PreferenceRepositoryInterface::class, PreferenceRepository::class);
        $this->app->bind(PreferenceService::class, function ($app) {
            return new PreferenceService($app->make(PreferenceRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
