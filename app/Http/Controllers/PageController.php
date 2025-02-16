<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
}
