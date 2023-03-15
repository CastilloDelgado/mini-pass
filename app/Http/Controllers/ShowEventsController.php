<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowEventsController extends Controller
{
    public function welcome()
    {
        $events = Event::orderBy('date')->get();

        return Inertia::render('Billboards/Welcome', [
            'events' => $events
        ]);
    }

    public function show(Event $event)
    {
        $event->ticket_types;
        return Inertia::render('Billboards/Show', [
            'event' => $event
        ]);
    }
}