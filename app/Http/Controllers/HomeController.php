<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ongoingEvent = Event::where(['status' => "on-going"])->latest()->first();
        $upcomingEvents = Event::where(['status' => "upcoming"])->latest()->limit(3)->get();

        return view('home', compact("ongoingEvent", "upcomingEvents"));
    }
}
