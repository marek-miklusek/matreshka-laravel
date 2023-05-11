<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
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
