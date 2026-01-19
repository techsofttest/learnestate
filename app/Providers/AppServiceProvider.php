<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Course;

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
        View::composer(['partials.*'], function ($view) {
        $courses = Course::select('title', 'slug')
            ->orderBy('title')
            ->get();

        $view->with('globalCourses', $courses);
        });
    }
}
