<?php

namespace App\Providers;

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
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


        /*
        |--------------------------------------------------------------------------
        | view()->composer(), dynamically compose view data for specified view
        |--------------------------------------------------------------------------
        */

        // Select all comments with the 'partials.footer' view
	    view()->composer('partials.footer', function($view)
        {
	        $view->with('comments', Comment::all());
        });


        // Generates and shares the navigation paths with the 'partials.navigation' view
        view()->composer('partials.navigation', function($view)
        {
            $paths = [];

            foreach (Route::getRoutes() as $route) {
            
                if ($route->methods()[0] !== 'GET') continue;

                $filtered_routes = ['/', 'O salóne', 'Galéria', 'Kontakt', 'Cenník'];

                foreach ($filtered_routes as $filtered_route) {
                    if ($filtered_route == $route->uri()) {
                        $path = $filtered_route;
                        $paths[$path] = $path === '/' ? 'Domov' : $path;
                        $paths = array_unique($paths);
                    }
                }
            
                $view->with('paths', $paths);
            }
        });
    }
}
