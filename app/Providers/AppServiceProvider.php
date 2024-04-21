<?php

namespace App\Providers;

use App\Models\Reminder;
use Illuminate\Support\ServiceProvider;
use App\Policies\ReminderPolicy;

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
        //
    }

    protected $policies = [
        Reminder::class => ReminderPolicy::class,
    ];
}
