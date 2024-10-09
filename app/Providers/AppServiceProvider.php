<?php

namespace App\Providers;

use App\Listeners\LoginFailed;
use App\Listeners\LoginSuccessful;
use App\Observers\SemesterObserver;
use App\Models\SchoolCampusSemester;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

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
        \Schema::defaultStringLength(191);

        Event::listen(
            LoginSuccessful::class,
            LoginFailed::class
        );

        SchoolCampusSemester::observe(SemesterObserver::class);
    }
}
