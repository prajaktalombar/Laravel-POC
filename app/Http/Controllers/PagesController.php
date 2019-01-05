<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome')->with([
       'foo' => 'Foobar',
       'tasks' => [
        'Go to the store',
        'Go to the market',
        'Go to work',
       ],
    ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
