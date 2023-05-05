<?php

namespace App\Providers;

use App\Models\Comment;
use Illuminate\Support\ServiceProvider;

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
        // Required my own functions
        require_once app_path('Helpers/functions.php');

        // Select all comments and include into one specific view('partials.footer')
	    view()->composer('partials.footer', function($view)
        {
	        $view->with('comments', Comment::all());
        });
    }
}
