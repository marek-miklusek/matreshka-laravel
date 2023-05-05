<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

class PagesController extends Controller
{
    public function __construct()
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
         
            // This variable(nav_links) is shared in every view now
            view()->share('nav_links', $paths);  
        }
    }


    public function home()
    {
        return view('pages.home', [
            'services' => Service::all()
        ]);
    }


    public function about()
    {
        return view('pages.about');
    }


    public function gallery()
    {
        return view('pages.gallery');
    }


    public function contact()
    {
        return view('pages.contact');
    }


    public function price_list()
    {
        return view('pages.price-list');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|max:255|email:rfc,dns',
            'text' => 'required'
        ]);

        Message::create($request->all());

        session()->flash('message', 'Your message was successfully sent');
        return back();
    }
}
