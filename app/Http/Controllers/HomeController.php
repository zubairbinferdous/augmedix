<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home page 
    public function home()
    {
        return view('auth.login');
    }

    // watch page 
    public function watch()
    {
        return view('frontend.watch');
    }

    //portfolio page 
    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    //portfolio page 
    public function discover()
    {
        return view('frontend.discover');
    }
}
