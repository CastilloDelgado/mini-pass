<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowEventsController extends Controller
{
    public function welcome()
    {
        $events = Event::all();

        return Inertia::render('Billboards/Welcome', [
            'events' => $events
        ]);
    }
}