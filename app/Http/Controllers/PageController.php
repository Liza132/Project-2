<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function about()
    {

        return view('about');
    }

    public function contacts()
    {

        return view('contacts');
    }

    public function events()
    {

        return view('events');
    }

    public function bookings()
    {

        return view('bookings');
    }
}
