<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Models\Image;
use Illuminate\Support\Facades\Gate;
use App\Enums\Role;
use Illuminate\Support\ServiceProvider;use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Route::bind('image', function ($value) {
            if (is_numeric($value)) {
                return Image::where('id', $value)->firstOrFail();
            }
            return Image::where('slug', $value)->published()->firstOrFail();
        });

        Gate::before(function ($user, $ability) {
            if ($user->role === Role::Admin) {
                return true;
            }
        });

    }
}
