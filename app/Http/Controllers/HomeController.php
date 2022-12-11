<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        return view("home.pages.home");
    }

    public function about()
    {
        return view("home.pages.about");

    }

    public function service()
    {
        return view("home.pages.service");
    }

    public function contact()
    {
        return view("home.pages.contact");
    }
}
